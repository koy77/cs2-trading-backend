<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class LedgerCheck extends Command
{
    protected $signature = 'ledger:check';

    protected $description = 'Проверить двойную запись: каждая группа сбалансирована, суммы по счетам';

    public function handle(): int
    {
        $unbalanced = DB::table('ledger_entries')
            ->selectRaw('entry_group, SUM(amount_cents) AS s')
            ->groupBy('entry_group')
            ->havingRaw('SUM(amount_cents) <> 0')
            ->get();

        $total = (int) DB::table('ledger_entries')->sum('amount_cents');

        $accounts = DB::table('ledger_entries')
            ->selectRaw('account, SUM(amount_cents) AS s, COUNT(*) AS c')
            ->groupBy('account')
            ->orderBy('account')
            ->get();

        $this->table(
            ['Счёт', 'Проводок', 'Баланс, $'],
            $accounts->map(fn ($r) => [
                $r->account,
                $r->c,
                number_format(((int) $r->s) / 100, 2),
            ])->all(),
        );

        if ($unbalanced->isNotEmpty() || $total !== 0) {
            $this->error('✗ Ledger НЕ сбалансирован! Групп с ненулевой суммой: '.$unbalanced->count()."; общая сумма: {$total}");
            $this->table(['entry_group', 'sum'], $unbalanced->map(fn ($r) => [$r->entry_group, $r->s])->all());

            return self::FAILURE;
        }

        $this->info('✓ Двойная запись сходится: дебет = кредит в каждой группе, общая сумма 0.');

        return self::SUCCESS;
    }
}
