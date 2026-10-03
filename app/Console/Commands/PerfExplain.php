<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class PerfExplain extends Command
{
    protected $signature = 'perf:explain';

    protected $description = 'EXPLAIN горячего запроса (лента активных листингов)';

    public function handle(): int
    {
        $sql = "SELECT id, price_cents, status FROM listings WHERE status = 'active' ORDER BY price_cents ASC LIMIT 20";

        $this->info('EXPLAIN: '.$sql);

        $rows = DB::select('EXPLAIN '.$sql);

        $this->table(
            ['id', 'select_type', 'type', 'possible_keys', 'key', 'rows', 'Extra'],
            array_map(fn ($r) => [
                $r->id ?? '',
                $r->select_type ?? '',
                $r->type ?? '',
                $r->possible_keys ?? '—',
                $r->key ?? '—',
                $r->rows ?? '',
                $r->Extra ?? '',
            ], $rows),
        );

        return self::SUCCESS;
    }
}
