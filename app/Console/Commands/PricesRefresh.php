<?php

namespace App\Console\Commands;

use App\Jobs\RefreshPricesJob;
use App\Models\Listing;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class PricesRefresh extends Command
{
    protected $signature = 'prices:refresh';

    protected $description = 'Обновить кэш цен (Redis) для активных листингов — через очередь prices.refresh';

    public function handle(): int
    {
        $names = DB::table('listings')
            ->join('inventory_items', 'listings.inventory_item_id', '=', 'inventory_items.id')
            ->where('listings.status', Listing::STATUS_ACTIVE)
            ->distinct()
            ->limit(20)
            ->pluck('inventory_items.market_hash_name')
            ->all();

        if ($names === []) {
            $this->info('Нет активных листингов — нечего обновлять.');

            return self::SUCCESS;
        }

        RefreshPricesJob::dispatch($names)->onQueue('prices.refresh');

        $this->info('Отправлено на обновление цен: '.count($names).' предмет(ов) → очередь prices.refresh');

        return self::SUCCESS;
    }
}
