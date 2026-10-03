<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

/**
 * Демонстрационное «отравленное» сообщение: всегда падает,
 * после retries уходит в failed_jobs (make queue-fail / make queue-replay).
 */
class PoisonJob implements ShouldQueue
{
    use Queueable;

    public int $tries = 3;

    public function backoff(): int
    {
        return 2;
    }

    public function handle(): void
    {
        throw new \RuntimeException('Демонстрационное отравленное сообщение (это ожидаемо)');
    }
}
