<?php

namespace Tests\Feature;

use App\Models\Listing;
use App\Models\Order;
use App\Models\User;
use App\Services\Money\LedgerService;
use Database\Seeders\DemoSeeder;
use Illuminate\Foundation\Testing\DatabaseTruncation;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

/**
 * Гонка за листинг: N параллельных процессов бьют в один листинг.
 * DatabaseTruncation (без транзакции) — дочерние процессы должны видеть закоммиченные данные.
 * После теста подчищаем таблицы, чтобы не загрязнять другие классы тестов.
 */
class RaceTest extends TestCase
{
    use DatabaseTruncation;

    /** Таблицы в порядке, безопасном для FK. */
    private const TABLES = [
        'trade_offers', 'orders', 'ledger_entries', 'listings', 'inventory_items',
        'steam_accounts', 'payments', 'webhook_events', 'idempotency_keys',
        'events', 'features', 'perf_listings',
    ];

    public function test_exactly_one_parallel_buy_wins(): void
    {
        $this->seed(DemoSeeder::class);

        $listing = Listing::query()
            ->where('status', Listing::STATUS_ACTIVE)
            ->orderByDesc('id')
            ->firstOrFail();

        $buyer = User::query()->firstWhere('slug', 'buyer');
        $ledger = app(LedgerService::class);
        $before = $ledger->userBalance($buyer->id);
        $price = (int) $listing->price_cents;

        $this->artisan('demo:race', [
            '--attempts' => 10,
            '--listing' => (string) $listing->id,
            '--user' => 'buyer',
        ])->assertSuccessful();

        $this->assertSame(1, Order::query()->where('listing_id', $listing->id)->count());

        // Деньги списаны ровно один раз.
        $this->assertSame($before - $price, $ledger->userBalance($buyer->id));
        $this->assertSame($price, $ledger->balance('platform:escrow'));
    }

    protected function tearDown(): void
    {
        // Дочерние процессы коммитят данные вне транзакций — убираем их явно.
        foreach (self::TABLES as $table) {
            DB::table($table)->delete();
        }

        DB::table('users')->whereIn('slug', ['kyle', 'outso', 'buyer'])->delete();

        parent::tearDown();
    }
}
