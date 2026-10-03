<?php

namespace App\Features;

use App\Models\User;

/**
 * A/B-эксперимент: размер комиссии платформы.
 * 'a' = базовая (3.00%), 'b' = повышенная (4.00%). Детерминировано по user_id.
 */
class FeeVariant
{
    public function resolve(User $user): string
    {
        return $user->id % 2 === 0 ? 'a' : 'b';
    }

    public static function feePercentFor(string $variant): int
    {
        $base = (int) config('services.psp.fee_default', 300);

        return $variant === 'b' ? $base + 100 : $base;
    }
}
