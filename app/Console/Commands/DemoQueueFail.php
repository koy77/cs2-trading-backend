<?php

namespace App\Console\Commands;

use App\Jobs\PoisonJob;
use Illuminate\Console\Command;

class DemoQueueFail extends Command
{
    protected $signature = 'demo:queue-fail {--jobs=1 : сколько отравленных сообщений бросить}';

    protected $description = 'Бросить «отравленные» сообщения в очередь (после ретраев уйдут в failed_jobs)';

    public function handle(): int
    {
        $jobs = max(1, (int) $this->option('jobs'));

        for ($i = 0; $i < $jobs; $i++) {
            PoisonJob::dispatch()->onQueue('orders.fulfill');
        }

        $this->info("Отправлено отравленных сообщений: {$jobs} (очередь orders.fulfill).");
        $this->line('Воркер выполнит попытки и положит их в failed_jobs.');
        $this->line('Посмотреть: make artisan CMD="queue:failed"');
        $this->line('Вернуть в работу: make queue-replay');

        return self::SUCCESS;
    }
}
