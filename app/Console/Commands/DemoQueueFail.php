<?php

namespace App\Console\Commands;

use App\Jobs\PoisonJob;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class DemoQueueFail extends Command
{
    protected $signature = 'demo:queue-fail {--jobs=1 : сколько отравленных сообщений бросить}';

    protected $description = 'Бросить «отравленные» сообщения в очередь (после ретраев уйдут в failed_jobs)';

    public function handle(): int
    {
        $jobs = max(1, (int) $this->option('jobs'));

        for ($i = 0; $i < $jobs; $i++) {
            PoisonJob::dispatch((string) Str::uuid())->onQueue('orders.fulfill');
        }

        $this->info("Отправлено отравленных сообщений: {$jobs} (очередь orders.fulfill).");
        $this->line('Первая доставка падает намеренно → задачи попадут в failed_jobs (счётчик в панели).');
        $this->line('Посмотреть: make artisan CMD="queue:failed"');
        $this->line('Разобрать (повторная доставка пройдёт успешно): make queue-replay');

        return self::SUCCESS;
    }
}
