<?php

namespace Tests\Feature;

use App\Exceptions\InsufficientFundsException;
use App\Exceptions\OrderConflictException;
use App\Models\Listing;
use App\Models\Order;
use App\Models\User;
use App\Services\Money\LedgerService;
use App\Services\Trading\OrderService;
use Database\Seeders\DemoSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class OrderFlowTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Postback в mock-psp при fulfilled — глушим HTTP-выход.
        Http::fake(['mock-psp:8081/*' => Http::response(['ok' => true], 200)]);
    }

    public function test_buy_and_accept_settles_ledger(): void
    {
        $this->seed(DemoSeeder::class);

        $buyer = User::query()->firstWhere('slug', 'buyer');
        $listing = Listing::query()->where('status', Listing::STATUS_ACTIVE)->firstOrFail();
        $seller = $listing->seller;
        $price = (int) $listing->price_cents;
        $ledger = app(LedgerService::class);
        $service = app(OrderService::class);

        $buyerBefore = $ledger->userBalance($buyer->id);

        $order = $service->buy($buyer, $listing, 'flow-1');

        $this->assertSame(Order::STATUS_PAID, $order->status);
        $this->assertSame($price, $ledger->balance('platform:escrow'));
        $this->assertSame($buyerBefore - $price, $ledger->userBalance($buyer->id));

        $order = $order->refresh();
        $this->assertNotNull($order->offer, 'оффер должен быть создан воркером (sync)');
        $this->assertSame('sent', $order->offer->state);

        $sellerBefore = $ledger->userBalance($seller->id);

        $order = $service->accept($seller, $order);

        $fee = (int) $order->fee_cents;
        $this->assertSame(Order::STATUS_FULFILLED, $order->status);
        $this->assertSame(0, $ledger->balance('platform:escrow'));
        $this->assertSame($fee, $ledger->balance('platform:fees'));
        $this->assertSame($sellerBefore + $price - $fee, $ledger->userBalance($seller->id));
        $this->assertSame('accepted', $order->offer->refresh()->state);
        $this->assertSame(Listing::STATUS_SOLD, $order->listing->refresh()->status);
    }

    public function test_second_buy_is_rejected_with_conflict(): void
    {
        $this->seed(DemoSeeder::class);

        $buyer = User::query()->firstWhere('slug', 'buyer');
        $outso = User::query()->firstWhere('slug', 'outso');
        $listing = Listing::query()->where('status', Listing::STATUS_ACTIVE)->firstOrFail();
        $service = app(OrderService::class);

        $service->buy($buyer, $listing, 'first');

        $this->expectException(OrderConflictException::class);
        $service->buy($outso, $listing, 'second');
    }

    public function test_decline_refunds_buyer_and_reopens_listing(): void
    {
        $this->seed(DemoSeeder::class);

        $buyer = User::query()->firstWhere('slug', 'buyer');
        $listing = Listing::query()->where('status', Listing::STATUS_ACTIVE)->firstOrFail();
        $ledger = app(LedgerService::class);
        $service = app(OrderService::class);

        $before = $ledger->userBalance($buyer->id);
        $order = $service->buy($buyer, $listing, 'decline-1');

        $order = $service->refund($listing->seller, $order->refresh(), 'declined');

        $this->assertSame(Order::STATUS_REFUNDED, $order->status);
        $this->assertSame($before, $ledger->userBalance($buyer->id));
        $this->assertSame(0, $ledger->balance('platform:escrow'));
        $this->assertSame(Listing::STATUS_ACTIVE, $order->listing->refresh()->status);
        $this->assertNull($order->listing->buyer_id);
    }

    public function test_http_buy_with_idempotency_key_replays(): void
    {
        $this->seed(DemoSeeder::class);

        $buyer = User::query()->firstWhere('slug', 'buyer');
        $listing = Listing::query()->where('status', Listing::STATUS_ACTIVE)->firstOrFail();

        $first = $this->actingAs($buyer)
            ->withHeaders(['Idempotency-Key' => 'it-key-1'])
            ->postJson('/api/orders', ['listing_id' => $listing->id]);

        $first->assertCreated();

        $second = $this->actingAs($buyer)
            ->withHeaders(['Idempotency-Key' => 'it-key-1'])
            ->postJson('/api/orders', ['listing_id' => $listing->id]);

        $second->assertCreated()->assertHeader('Idempotent-Replay', 'true');

        $this->assertSame(1, Order::query()->count());
    }

    public function test_buy_without_funds_is_rejected(): void
    {
        $this->seed(DemoSeeder::class);

        $outso = User::query()->firstWhere('slug', 'outso'); // инвентарь есть, баланс 0
        $listing = Listing::query()->where('status', Listing::STATUS_ACTIVE)->firstOrFail();
        $service = app(OrderService::class);

        $this->expectException(InsufficientFundsException::class);
        $service->buy($outso, $listing, 'broke-1');
    }
}
