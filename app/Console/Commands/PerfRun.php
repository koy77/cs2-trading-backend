<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

/**
 * Перф-тест: лёгкий батч-сид PERF_ROWS строк (по умолчанию 100k — секунды)
 * + замер «до/после индекса» с EXPLAIN. Изолированная таблица perf_listings,
 * демо-данные не трогаются. Ноутбук не страдает: всё батчами по 1000 строк.
 */
class PerfRun extends Command
{
    protected $signature = 'perf:run {--rows=100000} {--batch=1000} {--drop : удалить индекс в конце}';

    protected $description = 'Сид 100k строк + замер эффекта индекса (EXPLAIN, тайминги)';

    private const INDEX = 'perf_status_price_idx';

    public function handle(): int
    {
        $rows = max(1000, min(500000, (int) $this->option('rows')));
        $batchSize = max(100, min(5000, (int) $this->option('batch')));

        $this->info("1) Сидим {$rows} строк в perf_listings (батчи по {$batchSize})...");

        DB::table('perf_listings')->truncate();

        $names = [
            'AK-47 | Redline (Field-Tested)',
            '★ Driver Gloves | Brocade Crane (Field-Tested)',
            'Dreams & Nightmares Case',
            'AWP | Asiimov (Field-Tested)',
        ];

        $started = microtime(true);
        $batch = [];

        for ($i = 1; $i <= $rows; $i++) {
            $batch[] = [
                'status' => $i % 7 === 0 ? 'reserved' : 'active',
                'price_cents' => random_int(50, 1500000),
                'market_hash_name' => $names[$i % 4],
                'created_at' => now()->toDateTimeString(),
            ];

            if (count($batch) >= $batchSize) {
                DB::table('perf_listings')->insert($batch);
                $batch = [];
            }
        }

        if ($batch !== []) {
            DB::table('perf_listings')->insert($batch);
        }

        $seedMs = (int) round((microtime(true) - $started) * 1000);
        $this->line("   Сид: {$seedMs} ms (".round($rows / max(1, $seedMs) * 1000).' строк/сек)');

        $where = "status = 'active' AND price_cents BETWEEN 1000 AND 5000";

        $this->dropIndex();

        $before = $this->measure($where);
        $this->line('2) Без индекса: '.$before['ms'].' ms (EXPLAIN rows='.$before['rows'].', key='.$before['key'].')');

        DB::statement('CREATE INDEX '.self::INDEX.' ON perf_listings (status, price_cents)');

        $after = $this->measure($where);
        $this->line('3) С индексом: '.$after['ms'].' ms (EXPLAIN rows='.$after['rows'].', key='.$after['key'].')');

        $this->newLine();
        $this->table(
            ['Этап', 'Время, ms', 'EXPLAIN rows', 'Индекс'],
            [
                ['Без индекса (full scan)', $before['ms'], $before['rows'], $before['key']],
                ['С индексом (status,price_cents)', $after['ms'], $after['rows'], $after['key']],
            ],
        );

        if ($before['ms'] > 0 && $after['ms'] > 0) {
            $this->info('Строк найдено: '.$before['count'].'; ускорение: ×'.round($before['ms'] / max(0.1, $after['ms']), 1));
        }

        if ($this->option('drop')) {
            $this->dropIndex();
            $this->line('Индекс удалён (--drop).');
        }

        return self::SUCCESS;
    }

    /**
     * @return array{ms: float, rows: string, key: string, count: int}
     */
    private function measure(string $where): array
    {
        $sql = "SELECT COUNT(*) AS c, MIN(price_cents) AS min_price FROM perf_listings WHERE {$where}";

        $started = microtime(true);
        $result = DB::selectOne($sql);
        $ms = round((microtime(true) - $started) * 1000, 1);

        $explain = DB::select('EXPLAIN '.$sql)[0] ?? null;

        return [
            'ms' => $ms,
            'rows' => (string) ($explain->rows ?? '—'),
            'key' => (string) ($explain->key ?? '—'),
            'count' => (int) ($result->c ?? 0),
        ];
    }

    private function dropIndex(): void
    {
        try {
            DB::statement('DROP INDEX '.self::INDEX.' ON perf_listings');
        } catch (\Throwable) {
            // индекса нет — ок
        }
    }
}
