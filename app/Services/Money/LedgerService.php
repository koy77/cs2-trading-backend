<?php

namespace App\Services\Money;

use App\Models\LedgerEntry;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use RuntimeException;

/**
 * Двойная запись: каждая операция — группа проводок с нулевой суммой
 * (дебет = кредит). Счета: user:{id}, platform:escrow, platform:fees, psp:clearing.
 */
class LedgerService
{
    /**
     * @param  array<string, int>  $legs  account => знаковая сумма в центах
     */
    public function post(array $legs, string $refType, ?int $refId = null, ?string $description = null): string
    {
        $sum = array_sum($legs);

        if ($sum !== 0) {
            throw new RuntimeException("Unbalanced ledger entry: sum={$sum} cents");
        }

        $group = (string) Str::uuid();
        $rows = [];

        foreach ($legs as $account => $cents) {
            if ($cents === 0) {
                continue;
            }

            $rows[] = [
                'entry_group' => $group,
                'account' => $account,
                'amount_cents' => $cents,
                'ref_type' => $refType,
                'ref_id' => $refId,
                'description' => $description,
                'created_at' => now(),
            ];
        }

        LedgerEntry::query()->insert($rows);

        return $group;
    }

    public function balance(string $account): int
    {
        return (int) LedgerEntry::query()->where('account', $account)->sum('amount_cents');
    }

    public function userBalance(int $userId): int
    {
        return $this->balance("user:{$userId}");
    }

    /** @return Collection<int, LedgerEntry> */
    public function recent(int $limit = 15): Collection
    {
        return LedgerEntry::query()->orderByDesc('id')->limit($limit)->get();
    }
}
