<?php

namespace App\Console\Commands;

use App\Jobs\PollTradesJob;
use App\Models\TradeOffer;
use Illuminate\Console\Command;

class TradesPoll extends Command
{
    protected $signature = 'trades:poll';

    protected $description = 'Поллинг состояний трейд-офферов (очередь trades.poll)';

    public function handle(): int
    {
        $open = TradeOffer::query()->where('state', TradeOffer::STATE_SENT)->count();

        PollTradesJob::dispatch()->onQueue('trades.poll');

        $this->info("Открытых офферов: {$open}; джоба поллинга отправлена в очередь trades.poll");

        return self::SUCCESS;
    }
}
