<?php

namespace App\Support;

use App\Services\Psp\PspClient;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Throwable;

/**
 * Статусы систем для панели: MySQL, Redis, RabbitMQ (+глубины очередей), Steam, PSP.
 * Тяжёлые проверки кэшируются на несколько секунд (панель поллит часто).
 */
class SystemStatus
{
    public const APP_QUEUES = ['inventory.sync', 'prices.refresh', 'orders.fulfill', 'trades.poll', 'webhooks.out'];

    public function __construct(private readonly PspClient $psp) {}

    /**
     * @return array<string, mixed>
     */
    public function snapshot(): array
    {
        return [
            'mysql' => $this->mysql(),
            'redis' => $this->redis(),
            'rabbitmq' => $this->rabbit(),
            'queues' => $this->queues(),
            'queue_failed' => $this->failedJobs(),
            'steam' => $this->steam(),
            'psp' => $this->pspHealth(),
        ];
    }

    /** @return array{ok: bool, info: string} */
    private function mysql(): array
    {
        return Cache::remember('status:mysql', 3, function () {
            try {
                DB::select('select 1');

                return ['ok' => true, 'info' => (string) DB::connection()->getDatabaseName()];
            } catch (Throwable $e) {
                return ['ok' => false, 'info' => $e->getMessage()];
            }
        });
    }

    /** @return array{ok: bool, info: string} */
    private function redis(): array
    {
        return Cache::remember('status:redis', 3, function () {
            try {
                Cache::put('status:ping', time(), 5);

                return ['ok' => true, 'info' => (string) Cache::get('status:ping')];
            } catch (Throwable $e) {
                return ['ok' => false, 'info' => $e->getMessage()];
            }
        });
    }

    /** @return array{ok: bool, info: string} */
    private function rabbit(): array
    {
        return Cache::remember('status:rabbit', 4, function () {
            try {
                $response = Http::timeout(3)
                    ->withBasicAuth((string) config('services.rabbitmq.user'), (string) config('services.rabbitmq.password'))
                    ->get($this->rabbitUrl().'/api/overview');

                return $response->successful()
                    ? ['ok' => true, 'info' => 'v'.($response->json('rabbitmq_version') ?? '?')]
                    : ['ok' => false, 'info' => 'HTTP '.$response->status()];
            } catch (Throwable $e) {
                return ['ok' => false, 'info' => $e->getMessage()];
            }
        });
    }

    /** @return array<string, int> queue => messages_ready */
    public function queues(): array
    {
        return Cache::remember('status:queues', 4, function () {
            try {
                $response = Http::timeout(3)
                    ->withBasicAuth((string) config('services.rabbitmq.user'), (string) config('services.rabbitmq.password'))
                    ->get($this->rabbitUrl().'/api/queues');

                if (! $response->successful()) {
                    return [];
                }

                $result = [];

                foreach ($response->json() ?? [] as $queue) {
                    $name = (string) ($queue['name'] ?? '');

                    if (in_array($name, self::APP_QUEUES, true)) {
                        $result[$name] = (int) ($queue['messages_ready'] ?? 0) + (int) ($queue['messages_unacknowledged'] ?? 0);
                    }
                }

                return $result;
            } catch (Throwable) {
                return [];
            }
        });
    }

    /** @return array{ok: bool, info: string} */
    private function failedJobs(): array
    {
        return Cache::remember('status:failed', 5, function () {
            try {
                $count = DB::table('failed_jobs')->count();

                return ['ok' => $count === 0, 'info' => (string) $count];
            } catch (Throwable $e) {
                return ['ok' => false, 'info' => $e->getMessage()];
            }
        });
    }

    /** @return array{mode: string, min_interval: float, demo_profile: string} */
    private function steam(): array
    {
        return [
            'mode' => (string) config('services.steam.provider'),
            'min_interval' => (float) config('services.steam.min_interval'),
            'demo_profile' => (string) config('services.steam.demo_profile'),
        ];
    }

    /** @return array{ok: bool, mode: string} */
    private function pspHealth(): array
    {
        $health = $this->psp->health();

        return [
            'ok' => $health !== null,
            'mode' => (string) ($health['mode'] ?? 'n/a'),
        ];
    }

    private function rabbitUrl(): string
    {
        return (string) config('services.rabbitmq.management_url');
    }
}
