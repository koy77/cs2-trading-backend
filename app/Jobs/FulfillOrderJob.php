<?php

namespace App\Jobs;

use App\Models\Order;
use App\Services\Steam\TradeProvider;
use App\Support\EventLogger;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

/**
 * Исполнение сделки (очередь orders.fulfill): создаём трейд-оффер у провайдера.
 * Идемпотентен: повтор не создаёт второй оффер (плюс unique(order_id) в БД).
 */
class FulfillOrderJob implements ShouldQueue
{
    use Queueable;

    public int $tries = 5;

    public function __construct(public readonly int $orderId) {}

    /** @return array<int, int> */
    public function backoff(): array
    {
        return [5, 15, 45, 120, 300];
    }

    public function handle(TradeProvider $provider, EventLogger $events): void
    {
        $order = Order::query()->with('offer')->find($this->orderId);

        if ($order === null || $order->status !== Order::STATUS_PAID) {
            return; // уже завершён/возвращён — ничего не делаем
        }

        if ($order->offer !== null) {
            return; // оффер уже создан (повторная доставка сообщения)
        }

        $offer = $provider->createOffer($order);

        $events->log('trade.offer_created', $order->buyer, 'order', $order->id, [
            'offer_id' => $offer->provider_offer_id,
            'provider' => $offer->provider,
        ]);
    }
}
