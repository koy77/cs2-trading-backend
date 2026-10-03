<?php

namespace App\Providers;

use App\Events\InventorySynced;
use App\Events\OrderFulfilled;
use App\Events\OrderPaid;
use App\Events\OrderRefunded;
use App\Listeners\QueueFulfillOrder;
use App\Listeners\RecordDomainEvent;
use App\Listeners\SendPostbackOnFulfilled;
use App\Services\Money\PspSigner;
use App\Services\Steam\FakeTradeProvider;
use App\Services\Steam\TradeProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Провайдер исполнения сделки: Fake (см. TradeProvider — реальный требует сессии Steam).
        $this->app->singleton(TradeProvider::class, FakeTradeProvider::class);

        // HMAC-подписант вебхуков: секрет и окно timestamp из конфига.
        $this->app->singleton(PspSigner::class, fn () => new PspSigner(
            (string) config('services.psp.secret'),
            (int) config('services.psp.window', 300),
        ));
    }

    public function boot(): void
    {
        // События → листенеры (бизнес-логика в джобах, листенеры тонкие).
        Event::listen(OrderPaid::class, QueueFulfillOrder::class);
        Event::listen(OrderFulfilled::class, SendPostbackOnFulfilled::class);

        Event::listen(InventorySynced::class, RecordDomainEvent::class);
        Event::listen(OrderPaid::class, RecordDomainEvent::class);
        Event::listen(OrderFulfilled::class, RecordDomainEvent::class);
        Event::listen(OrderRefunded::class, RecordDomainEvent::class);
    }
}
