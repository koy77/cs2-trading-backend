<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use RuntimeException;

/**
 * Демонстрационное «отравленное» сообщение.
 *
 * Первая доставка падает намеренно → задача уходит в failed_jobs.
 * «Разобрать failed» (queue:retry all) доставляет её повторно — и она ПРОХОДИТ:
 * полный цикл «упало → разобрали → переиграли» (в жизни так реплеят задачи после фикса бага).
 */
class PoisonJob implements ShouldQueue
{
    use Queueable;

    public int $tries = 1;

    /** Токен изолирует один «яд» от другого (флаг «уже падал» — на задачу). */
    public string $token = '';

    public function __construct(string $token = '')
    {
        $this->token = $token !== '' ? $token : uniqid('poison-', true);
    }

    public function handle(): void
    {
        $flag = storage_path('framework/poison-once-'.$this->token.'.flag');

        if (! is_file($flag)) {
            @touch($flag);

            throw new RuntimeException('Демонстрационный яд: первая доставка падает намеренно. Нажми «Разобрать failed» — повторная доставка пройдёт успешно.');
        }

        // Повторная доставка (после разбора failed) — успех.
    }
}
