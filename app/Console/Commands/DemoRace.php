<?php

namespace App\Console\Commands;

use App\Models\Listing;
use App\Models\User;
use App\Services\Money\LedgerService;
use App\Support\EventLogger;
use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

/**
 * Гонка: N параллельных покупок одного листинга.
 * Ожидаемый результат: ровно один успех (atomic claim + unique-индекс), остальные — конфликт.
 */
class DemoRace extends Command
{
    protected $signature = 'demo:race {--attempts=30 : число параллельных процессов} {--listing= : id листинга} {--user= : slug покупателя (по умолчанию buyer)}';

    protected $description = 'Гонка за листинг: N параллельных покупок, ровно один победитель';

    public function handle(EventLogger $events): int
    {
        $listing = $this->option('listing')
            ? Listing::query()->find((int) $this->option('listing'))
            : Listing::query()->where('status', Listing::STATUS_ACTIVE)->orderByDesc('id')->first();

        if ($listing === null) {
            $this->error('Нет активного листинга. Выстави предмет на продажу или сделай свежие сиды (make fresh).');

            return self::FAILURE;
        }

        $slug = (string) ($this->option('user') ?: 'buyer');
        $buyer = User::query()->firstWhere('slug', $slug);

        if ($buyer === null) {
            $this->error("Покупатель '{$slug}' не найден");

            return self::FAILURE;
        }

        $balance = app(LedgerService::class)->userBalance($buyer->id);

        if ($balance < $listing->price_cents) {
            $this->error(sprintf(
                'У покупателя %s баланс %s — меньше цены листинга #%d (%s). Пополни баланс (кнопка «Пополнить $10» в панели) или сделай make fresh.',
                $buyer->slug,
                number_format($balance / 100, 2).' $',
                $listing->id,
                number_format($listing->price_cents / 100, 2).' $',
            ));

            return self::FAILURE;
        }

        $attempts = max(1, (int) $this->option('attempts'));

        $this->info("Гонка: {$attempts} параллельных покупок листинга #{$listing->id} (".$listing->inventoryItem?->market_hash_name.')');
        $this->info("Покупатель: {$buyer->slug}; цена: ".number_format($listing->price_cents / 100, 2).' $');

        $env = $this->childEnv();
        $processes = [];
        $started = microtime(true);

        for ($i = 1; $i <= $attempts; $i++) {
            $process = new Process(
                [PHP_BINARY, base_path('artisan'), 'demo:buy-direct', (string) $listing->id, (string) $buyer->id, '--attempt='.$i],
                base_path(),
            );
            $process->setEnv($env);
            $process->setTimeout(60);
            $processes[] = $process;
        }

        foreach ($processes as $process) {
            $process->start();
        }

        $codes = [];

        foreach ($processes as $process) {
            try {
                $process->wait();
                $codes[] = $process->getExitCode();
            } catch (\Throwable) {
                $codes[] = -1;
            }
        }

        $durationMs = (int) round((microtime(true) - $started) * 1000);
        $success = count(array_filter($codes, fn ($c) => $c === 0));
        $conflict = count(array_filter($codes, fn ($c) => $c === 1));
        $funds = count(array_filter($codes, fn ($c) => $c === 3));
        $other = $attempts - $success - $conflict - $funds;

        $this->newLine();
        $this->table(
            ['Метрика', 'Значение'],
            [
                ['Победителей (успешная покупка)', $success],
                ['Конфликтов (409: уже продано/зарезервировано)', $conflict],
                ['Недостаточно средств (пополни баланс)', $funds],
                ['Прочих (ошибка)', $other],
                ['Длительность гонки', $durationMs.' ms'],
            ],
        );

        $ok = $success === 1;

        if (! $ok && $success === 0 && $funds > 0) {
            $this->error("✗ Победитель не определён: {$funds} попыток отбито недостатком средств у покупателя. Пополни баланс (кнопка «Пополнить $10» в панели) или сделай make fresh.");
        } else {
            $this->{$ok ? 'info' : 'error'}($ok
                ? '✓ Инвариант «не продать дважды» удержан: ровно один заказ.'
                : "✗ Ожидался ровно один победитель, получено {$success}. Разберись немедленно!");
        }

        $events->log('demo.race', null, 'listing', $listing->id, [
            'attempts' => $attempts,
            'success' => $success,
            'conflict' => $conflict,
            'funds' => $funds,
            'duration_ms' => $durationMs,
        ]);

        return $ok ? self::SUCCESS : self::FAILURE;
    }

    /**
     * Явно передаём дочерним процессам окружение текущего (в тестах это cs2_test).
     *
     * @return array<string, string>
     */
    private function childEnv(): array
    {
        return array_filter([
            'APP_ENV' => app()->environment(),
            'DB_CONNECTION' => (string) config('database.default'),
            'DB_HOST' => (string) config('database.connections.mysql.host'),
            'DB_PORT' => (string) config('database.connections.mysql.port'),
            'DB_DATABASE' => (string) config('database.connections.mysql.database'),
            'DB_USERNAME' => (string) config('database.connections.mysql.username'),
            'DB_PASSWORD' => (string) config('database.connections.mysql.password'),
            'CACHE_STORE' => (string) config('cache.default'),
            'REDIS_HOST' => (string) config('database.redis.default.host'),
            'QUEUE_CONNECTION' => (string) config('queue.default'),
            'SESSION_DRIVER' => 'array',
        ], fn ($value) => $value !== '');
    }
}
