<?php

namespace App\Console\Commands;

use App\Exceptions\InsufficientFundsException;
use App\Exceptions\OrderConflictException;
use App\Models\Listing;
use App\Models\User;
use App\Services\Trading\OrderService;
use Illuminate\Console\Command;

class DemoBuyDirect extends Command
{
    protected $signature = 'demo:buy-direct {listing} {user} {--attempt=0 : номер попытки (для ключа идемпотентности)}';

    protected $description = 'Одна покупка от лица пользователя (используется гонкой/тестами)';

    public function handle(OrderService $orders): int
    {
        $listing = Listing::query()->find((int) $this->argument('listing'));
        $user = User::query()->find((int) $this->argument('user'));

        if ($listing === null || $user === null) {
            return $this->emit(['ok' => false, 'reason' => 'not_found'], 2);
        }

        try {
            $order = $orders->buy($user, $listing, 'race-attempt-'.$this->option('attempt').'-'.$user->id);

            return $this->emit(['ok' => true, 'order_id' => $order->id], 0);
        } catch (OrderConflictException $e) {
            return $this->emit(['ok' => false, 'reason' => 'conflict', 'message' => $e->getMessage()], 1);
        } catch (InsufficientFundsException $e) {
            // Код 3 — не хватило баланса: гонка отличает его от 409-конфликта (0 = успех, 1 = конфликт, 2 = прочая ошибка).
            return $this->emit(['ok' => false, 'reason' => 'funds', 'message' => $e->getMessage()], 3);
        } catch (\Throwable $e) {
            return $this->emit(['ok' => false, 'reason' => 'error', 'message' => $e->getMessage()], 2);
        }
    }

    /**
     * @param  array<string, mixed>  $data
     */
    private function emit(array $data, int $exitCode): int
    {
        $this->line(json_encode($data, JSON_UNESCAPED_SLASHES) ?: '{}');

        return $exitCode;
    }
}
