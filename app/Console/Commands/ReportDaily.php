<?php

namespace App\Console\Commands;

use App\Models\Order;
use App\Support\EventLogger;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

/**
 * Ежедневный отчёт: аналитика заказов + A/B-эксперимент комиссии (Pennant).
 */
class ReportDaily extends Command
{
    protected $signature = 'report:daily {--rollup : записать роллап-событие (для scheduler)}';

    protected $description = 'Отчёт: заказы, GMV, комиссии, A/B-варианты, события';

    public function handle(EventLogger $events): int
    {
        if ($this->option('rollup')) {
            $events->log('report.rollup', null, null, null, [
                'orders' => Order::query()->count(),
                'gmv_cents' => (int) Order::query()->sum('price_cents'),
            ]);

            $this->info('Роллап аналитики записан в events.');

            return self::SUCCESS;
        }

        $byStatus = DB::table('orders')
            ->selectRaw('status, COUNT(*) AS c, COALESCE(SUM(price_cents),0) AS gmv, COALESCE(SUM(fee_cents),0) AS fees')
            ->groupBy('status')
            ->get();

        $this->info('Заказы по статусам:');
        $this->table(
            ['Статус', 'Заказов', 'Сумма, $', 'Комиссия, $'],
            $byStatus->map(fn ($r) => [
                $r->status,
                $r->c,
                number_format(((int) $r->gmv) / 100, 2),
                number_format(((int) $r->fees) / 100, 2),
            ])->all(),
        );

        $decided = (int) $byStatus->whereIn('status', [Order::STATUS_PAID, Order::STATUS_FULFILLED, Order::STATUS_REFUNDED])->sum('c');
        $fulfilled = (int) $byStatus->where('status', Order::STATUS_FULFILLED)->sum('c');
        $conversion = $decided > 0 ? round($fulfilled / $decided * 100, 1) : 0.0;
        $this->line("Конверсия paid → fulfilled: {$conversion}%");

        $ab = DB::table('orders')
            ->selectRaw('fee_variant AS variant, COUNT(*) AS c, COALESCE(SUM(fee_cents),0) AS fees, COALESCE(AVG(fee_cents),0) AS avg_fee')
            ->whereNotNull('fee_variant')
            ->groupBy('fee_variant')
            ->get();

        if ($ab->isNotEmpty()) {
            $this->newLine();
            $this->info('A/B комиссии (Pennant FeeVariant):');
            $this->table(
                ['Вариант', 'Заказов', 'Комиссий всего, $', 'Средняя комиссия, $'],
                $ab->map(fn ($r) => [
                    $r->variant,
                    $r->c,
                    number_format(((int) $r->fees) / 100, 2),
                    number_format(((float) $r->avg_fee) / 100, 2),
                ])->all(),
            );
        }

        $top = DB::table('events')
            ->selectRaw('type, COUNT(*) AS c')
            ->where('created_at', '>=', now()->subDay())
            ->groupBy('type')
            ->orderByDesc('c')
            ->limit(10)
            ->get();

        if ($top->isNotEmpty()) {
            $this->newLine();
            $this->info('События за 24 часа (топ-10):');
            $this->table(['Тип', 'Кол-во'], $top->map(fn ($r) => [$r->type, $r->c])->all());
        }

        return self::SUCCESS;
    }
}
