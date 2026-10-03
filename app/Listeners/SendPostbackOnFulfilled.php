<?php

namespace App\Listeners;

use App\Events\OrderFulfilled;
use App\Jobs\SendPostbackJob;

class SendPostbackOnFulfilled
{
    public function handle(OrderFulfilled $event): void
    {
        // Исходящий postback партнёру/PSP — через очередь webhooks.out (с ретраями)
        SendPostbackJob::dispatch($event->order->id)->onQueue('webhooks.out');
    }
}
