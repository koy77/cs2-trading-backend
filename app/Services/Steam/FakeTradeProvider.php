<?php

namespace App\Services\Steam;

use App\Models\Order;
use App\Models\TradeOffer;
use Illuminate\Support\Str;

/**
 * Fake-провайдер трейд-офферов: моделирует жизненный цикл
 * created → sent → accepted | declined | expired.
 */
class FakeTradeProvider implements TradeProvider
{
    public function createOffer(Order $order): TradeOffer
    {
        return TradeOffer::query()->create([
            'order_id' => $order->id,
            'provider' => 'fake',
            'provider_offer_id' => 'fake-'.$order->id.'-'.Str::lower(Str::random(8)),
            'state' => TradeOffer::STATE_SENT,
        ]);
    }

    public function accept(TradeOffer $offer): void
    {
        $offer->update(['state' => TradeOffer::STATE_ACCEPTED]);
    }

    public function decline(TradeOffer $offer): void
    {
        $offer->update(['state' => TradeOffer::STATE_DECLINED]);
    }

    public function expire(TradeOffer $offer): void
    {
        $offer->update(['state' => TradeOffer::STATE_EXPIRED]);
    }
}
