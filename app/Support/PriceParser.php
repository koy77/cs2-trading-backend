<?php

namespace App\Support;

/**
 * Парсер денежных строк Steam Market ('$34.50', '34,50€', '1 234,56 руб') в центы.
 */
class PriceParser
{
    public static function toCents(?string $money): int
    {
        if ($money === null || $money === '') {
            return 0;
        }

        // убрать всё, кроме цифр и разделителей
        $clean = preg_replace('/[^\d,.]/', '', $money) ?? '';

        if ($clean === '') {
            return 0;
        }

        $lastComma = strrpos($clean, ',');
        $lastDot = strrpos($clean, '.');

        // определить десятичный разделитель (последний из встреченных)
        if ($lastComma !== false && $lastDot !== false) {
            $decimal = $lastComma > $lastDot ? ',' : '.';
        } elseif ($lastComma !== false) {
            $decimal = ',';
        } else {
            $decimal = '.';
        }

        if ($decimal === ',') {
            $clean = str_replace('.', '', $clean);      // '1.234,56' -> '1234,56'
            $clean = str_replace(',', '.', $clean);
        } else {
            $clean = str_replace(',', '', $clean);      // '1,234.56' -> '1234.56'
        }

        return (int) round(((float) $clean) * 100);
    }
}
