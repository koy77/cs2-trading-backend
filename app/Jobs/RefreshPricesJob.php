<?php

namespace App\Jobs;

use App\Services\Market\MarketService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

/**
 * Обновление кэша цен (очередь prices.refresh) для набора market_hash_name.
 */
class RefreshPricesJob implements ShouldQueue
{
    use Queueable;

    public int $tries = 2;

    /** @param array<int, string> $hashNames */
    public function __construct(public readonly array $hashNames) {}

    public function handle(MarketService $market): void
    {
        foreach (array_slice($this->hashNames, 0, 20) as $name) {
            $market->price($name); // cache remember с TTL
        }
    }
}
