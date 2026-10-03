<?php

namespace App\Listeners;

use App\Events\InventorySynced;
use App\Events\OrderFulfilled;
use App\Events\OrderPaid;
use App\Events\OrderRefunded;
use App\Support\EventLogger;

/**
 * Пишет доменные события в аналитику (таблица events).
 */
class RecordDomainEvent
{
    public function __construct(private readonly EventLogger $events) {}

    public function handle(object $event): void
    {
        match (true) {
            $event instanceof InventorySynced => $this->events->log(
                'inventory.synced',
                $event->account->user,
                'steam_account',
                $event->account->id,
                ['items' => $event->account->inventoryItems()->count()],
            ),
            $event instanceof OrderPaid => $this->events->log(
                'order.paid',
                $event->order->buyer,
                'order',
                $event->order->id,
                ['price_cents' => $event->order->price_cents, 'fee_cents' => $event->order->fee_cents],
            ),
            $event instanceof OrderFulfilled => $this->events->log(
                'order.fulfilled',
                $event->order->seller,
                'order',
                $event->order->id,
                ['proceeds_cents' => $event->order->sellerProceedsCents()],
            ),
            $event instanceof OrderRefunded => $this->events->log(
                'order.refunded',
                $event->order->buyer,
                'order',
                $event->order->id,
                ['reason' => $event->reason],
            ),
            default => null,
        };
    }
}
