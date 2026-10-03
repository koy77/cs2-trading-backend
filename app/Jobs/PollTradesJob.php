<?php

namespace App\Jobs;

use App\Models\TradeOffer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

/**
 * Поллинг состояний трейд-офферов (очередь trades.poll).
 * С Fake-провайдером состояния меняются кнопками панели; в проде здесь запрос
 * к провайдеру (Steam-сессия) и синхронизация статусов.
 */
class PollTradesJob implements ShouldQueue
{
    use Queueable;

    public int $tries = 2;

    public function handle(): void
    {
        TradeOffer::query()
            ->where('state', TradeOffer::STATE_SENT)
            ->orderBy('id')
            ->limit(50)
            ->get()
            ->each(function (TradeOffer $offer) {
                // touch: имитация «проверили у провайдера»
                $offer->touch();
            });
    }
}
