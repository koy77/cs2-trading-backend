<?php

namespace App\Listeners;

use App\Events\OrderPaid;
use App\Jobs\FulfillOrderJob;

class QueueFulfillOrder
{
    public function handle(OrderPaid $event): void
    {
        // Исполнение сделки — асинхронно (очередь orders.fulfill)
        FulfillOrderJob::dispatch($event->order->id)->onQueue('orders.fulfill');
    }
}
