<?php

namespace Database\Seeders;

use App\Jobs\SyncSteamInventoryJob;
use App\Models\LedgerEntry;
use App\Models\Listing;
use App\Models\SteamAccount;
use App\Models\User;
use App\Services\Market\MarketService;
use App\Services\Money\LedgerService;
use App\Services\Trading\ListingService;
use Illuminate\Database\Seeder;

/**
 * Демо-данные: 3 пользователя (2 продавца с реальными публичными профилями + покупатель),
 * инвентарь из фикстур (слепки настоящих инвентарей), баланс покупателя из «PSP-клиринга»
 * и витрина из листингов по «рыночным» ценам.
 *
 * Идемпотентен: повторный запуск не плодит сущности (firstOrCreate + guard'ы).
 */
class DemoSeeder extends Seeder
{
    /** @var list<array{slug: string, name: string, steam: string, persona: string}> */
    private const PEOPLE = [
        ['slug' => 'kyle', 'name' => 'Kyle', 'steam' => '76561199104360494', 'persona' => 'Kyle'],
        ['slug' => 'outso', 'name' => 'outsoseewhoya', 'steam' => '76561198646937711', 'persona' => 'outsoseewhoya'],
        ['slug' => 'buyer', 'name' => 'Demo Buyer', 'steam' => '76561199036154513', 'persona' => 'crazy2'],
    ];

    public function run(): void
    {
        // Цены при сидировании — детерминированные (fixture), без сетевых вызовов.
        config()->set('services.steam.provider', 'fixture');
        config()->set('cache.default', 'array');

        foreach (self::PEOPLE as $person) {
            $user = User::query()->firstOrCreate(
                ['slug' => $person['slug']],
                ['name' => $person['name'], 'email' => $person['slug'].'@demo.local', 'is_demo' => true],
            );

            SteamAccount::query()->firstOrCreate(
                ['steam_id64' => $person['steam']],
                ['user_id' => $user->id, 'persona_name' => $person['persona']],
            );
        }

        // Инвентарь — слепки реальных публичных инвентарей Steam.
        foreach (SteamAccount::query()->get() as $account) {
            dispatch_sync(new SyncSteamInventoryJob($account->id, 'fixture'));
            $this->command?->info("Инвентарь {$account->steam_id64}: ".$account->inventoryItems()->count().' предмет(ов)');
        }

        // Стартовый баланс демо-покупателя: $100 «зашли» через PSP-клиринг (двойная запись).
        $buyer = User::query()->firstWhere('slug', 'buyer');

        if (LedgerEntry::query()->where('ref_type', 'seed')->doesntExist()) {
            app(LedgerService::class)->post(
                ['psp:clearing' => -10000, "user:{$buyer->id}" => 10000],
                'seed',
                null,
                'Стартовый баланс демо-покупателя ($100)',
            );
        }

        // Витрина: предметы продавцов по «рыночным» ценам.
        $market = app(MarketService::class);
        $listings = app(ListingService::class);

        foreach ([['slug' => 'kyle', 'take' => 2], ['slug' => 'outso', 'take' => 1]] as $entry) {
            $seller = User::query()->firstWhere('slug', $entry['slug']);

            $items = $seller->inventoryItems()
                ->where('status', 'in_inventory')
                ->where('tradable', true)
                ->orderByDesc('marketable')
                ->orderBy('id')
                ->limit($entry['take'])
                ->get();

            foreach ($items as $item) {
                if (Listing::query()->where('inventory_item_id', $item->id)->exists()) {
                    continue;
                }

                $price = max(100, $market->priceCents((string) $item->market_hash_name));
                $listing = $listings->create($seller, $item, $price);

                $this->command?->info("Листинг #{$listing->id}: {$item->market_hash_name} — ".number_format($price / 100, 2).' $');
            }
        }

        $this->command?->info('Демо-входы готовы: kyle / outso / buyer');
    }
}
