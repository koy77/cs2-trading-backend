<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

/**
 * Лёгкий load-smoke: N запросов к /api/state батчами по C (curl_multi).
 */
class LoadLight extends Command
{
    protected $signature = 'load:light {--requests=200} {--concurrency=20}';

    protected $description = 'Лёгкий load-smoke по /api/state (p50/p95, rps)';

    public function handle(): int
    {
        $url = rtrim((string) config('services.psp.self_url'), '/').'/api/state';
        $requests = max(1, min(2000, (int) $this->option('requests')));
        $concurrency = max(1, min(50, (int) $this->option('concurrency')));

        $this->info("Load-smoke: {$requests} запросов к {$url} (по {$concurrency} параллельно)");

        $times = [];
        $errors = 0;
        $done = 0;
        $started = microtime(true);

        $multi = curl_multi_init();

        while ($done < $requests) {
            $handles = [];
            $n = min($concurrency, $requests - $done);

            for ($i = 0; $i < $n; $i++) {
                $ch = curl_init($url);
                curl_setopt_array($ch, [
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_TIMEOUT => 15,
                    CURLOPT_FOLLOWLOCATION => true,
                ]);
                curl_multi_add_handle($multi, $ch);
                $handles[] = ['ch' => $ch, 't0' => microtime(true)];
            }

            do {
                $status = curl_multi_exec($multi, $running);
                if ($running > 0) {
                    curl_multi_select($multi, 0.5);
                }
            } while ($running > 0 && $status === CURLM_OK);

            foreach ($handles as $h) {
                $code = (int) curl_getinfo($h['ch'], CURLINFO_RESPONSE_CODE);
                $times[] = (microtime(true) - $h['t0']) * 1000;

                if ($code < 200 || $code >= 400) {
                    $errors++;
                }

                curl_multi_remove_handle($multi, $h['ch']);
                curl_close($h['ch']);
            }

            $done += $n;
        }

        curl_multi_close($multi);

        $totalSeconds = max(0.001, microtime(true) - $started);
        sort($times);

        $pick = fn (float $q) => round($times[min(count($times) - 1, (int) floor($q * count($times)))], 1);

        $this->table(
            ['Запросов', 'Ошибок', 'p50, ms', 'p95, ms', 'avg, ms', 'rps'],
            [[
                $requests,
                $errors,
                $pick(0.50),
                $pick(0.95),
                round(array_sum($times) / max(1, count($times)), 1),
                round($requests / $totalSeconds, 1),
            ]],
        );

        if ($errors === $requests) {
            $this->error('Все запросы неуспешны — приложение запущено? (make up)');

            return self::FAILURE;
        }

        return self::SUCCESS;
    }
}
