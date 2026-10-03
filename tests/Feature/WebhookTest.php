<?php

namespace Tests\Feature;

use App\Models\Payment;
use App\Models\User;
use App\Models\WebhookEvent;
use App\Services\Money\LedgerService;
use App\Services\Money\PspSigner;
use Database\Seeders\DemoSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WebhookTest extends TestCase
{
    use RefreshDatabase;

    private function postRaw(string $body, ?string $signature, ?string $timestamp)
    {
        return $this->call('POST', '/webhooks/psp', [], [], [], [
            'CONTENT_TYPE' => 'application/json',
            'HTTP_ACCEPT' => 'application/json',
            'HTTP_X-PSP-SIGNATURE' => (string) $signature,
            'HTTP_X-PSP-TIMESTAMP' => (string) $timestamp,
        ], $body);
    }

    private function payload(Payment $payment, string $eventId): string
    {
        return (string) json_encode([
            'event' => 'payment.paid',
            'event_id' => $eventId,
            'payment_id' => $payment->id,
            'status' => 'paid',
            'amount_cents' => $payment->amount_cents,
            'currency' => 'USD',
        ], JSON_UNESCAPED_SLASHES);
    }

    private function payment(User $user): Payment
    {
        return Payment::query()->create([
            'user_id' => $user->id,
            'provider' => 'psp',
            'amount_cents' => 1000,
            'currency' => 'USD',
            'status' => Payment::STATUS_PENDING,
        ]);
    }

    public function test_valid_webhook_credits_balance_once(): void
    {
        $this->seed(DemoSeeder::class);

        $buyer = User::query()->firstWhere('slug', 'buyer');
        $ledger = app(LedgerService::class);
        $signer = app(PspSigner::class);

        $payment = $this->payment($buyer);
        $body = $this->payload($payment, 'evt_test_ok');
        $before = $ledger->userBalance($buyer->id);

        $this->postRaw($body, $signer->sign($body), (string) now()->getTimestamp())
            ->assertOk()->assertJsonPath('ok', true);

        $this->assertSame($before + 1000, $ledger->userBalance($buyer->id));
        $this->assertSame(Payment::STATUS_PAID, $payment->refresh()->status);
        $this->assertSame(1, WebhookEvent::query()->count());

        // Повторная доставка того же event_id — идемпотентно.
        $this->postRaw($body, $signer->sign($body), (string) now()->getTimestamp())
            ->assertOk()->assertJsonPath('duplicate', true);

        $this->assertSame($before + 1000, $ledger->userBalance($buyer->id));
        $this->assertSame(1, WebhookEvent::query()->count());
    }

    public function test_bad_signature_is_rejected(): void
    {
        $this->seed(DemoSeeder::class);

        $buyer = User::query()->firstWhere('slug', 'buyer');
        $payment = $this->payment($buyer);
        $body = $this->payload($payment, 'evt_bad_sig');

        $this->postRaw($body, 'sha256='.str_repeat('0', 64), (string) now()->getTimestamp())
            ->assertStatus(401)->assertJsonPath('error', 'bad_signature');

        $this->assertSame(Payment::STATUS_PENDING, $payment->refresh()->status);
        $this->assertSame(0, WebhookEvent::query()->count());
    }

    public function test_stale_timestamp_is_rejected(): void
    {
        $this->seed(DemoSeeder::class);

        $buyer = User::query()->firstWhere('slug', 'buyer');
        $signer = app(PspSigner::class);
        $payment = $this->payment($buyer);
        $body = $this->payload($payment, 'evt_stale');

        $this->postRaw($body, $signer->sign($body), (string) (now()->getTimestamp() - 3600))
            ->assertStatus(401)->assertJsonPath('error', 'stale_timestamp');
    }

    public function test_invalid_payload_is_rejected(): void
    {
        $this->seed(DemoSeeder::class);

        $signer = app(PspSigner::class);
        $body = '{"event":"payment.paid"}';

        $this->postRaw($body, $signer->sign($body), (string) now()->getTimestamp())
            ->assertStatus(422)->assertJsonPath('error', 'invalid_payload');
    }
}
