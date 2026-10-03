<?php

namespace App\Console\Commands;

use App\Exceptions\OrderConflictException;
use App\Models\Order;
use App\Services\Trading\OrderService;
use Illuminate\Console\Command;

class OrdersExpireReservations extends Command
{
    protected $signature = 'orders:expire-reservations {--minutes=15 : порог протухания резерва}';

    protected $description = 'Снять протухшие резервы: оффер истёк → возврат покупателю, листинг обратно в продажу';

    public function handle(OrderService $service): int
    {
        $threshold = now()->subMinutes(max(1, (int) $this->option('minutes')));

        $stale = Order::query()
            ->where('status', Order::STATUS_PAID)
            ->whereNotNull('paid_at')
            ->where('paid_at', '<=', $threshold)
            ->get();

        $expired = 0;

        foreach ($stale as $order) {
            $seller = $order->seller;

            if ($seller === null) {
                continue; // FK гарантирует наличие продавца; страховка для статического анализа
            }

            try {
                $service->refund($seller, $order, 'expired');
                $expired++;
            } catch (OrderConflictException) {
                // состояние уже изменилось (гонка с действием продавца) — пропускаем
            }
        }

        $this->info("Снято протухших резервов: {$expired} (кандидатов: {$stale->count()})");

        return self::SUCCESS;
    }
}
