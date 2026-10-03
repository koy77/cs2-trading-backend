<?php

namespace App\Console\Commands;

use App\Jobs\SyncSteamInventoryJob;
use App\Models\SteamAccount;
use App\Models\User;
use App\Services\Steam\SteamGateway;
use Illuminate\Console\Command;

class SteamSync extends Command
{
    protected $signature = 'steam:sync {--mode= : real|fixture} {--steam-id= : SteamID64} {--user= : slug пользователя}';

    protected $description = 'Синхронизировать инвентарь Steam (выполняет job сразу, без очереди)';

    public function handle(SteamGateway $gateway): int
    {
        $mode = (string) ($this->option('mode') ?: $gateway->mode());
        $account = $this->resolveAccount();

        if ($account === null) {
            $this->error('Steam-аккаунт не найден. Укажи --user/--steam-id или запусти сиды (make fresh).');

            return self::FAILURE;
        }

        $user = $account->user;

        if ($user === null) {
            $this->error('Steam-аккаунт не привязан к пользователю');

            return self::FAILURE;
        }

        $this->info("Синк инвентаря {$account->steam_id64} ({$user->slug}) в режиме {$mode}...");

        dispatch_sync(new SyncSteamInventoryJob($account->id, $mode));

        $account->refresh();
        $count = $account->inventoryItems()->count();

        $this->info("Готово: предметов в БД — {$count}; last_sync_at = {$account->last_sync_at}");

        return self::SUCCESS;
    }

    private function resolveAccount(): ?SteamAccount
    {
        if ($steamId = $this->option('steam-id')) {
            return SteamAccount::query()->firstWhere('steam_id64', $steamId);
        }

        if ($slug = $this->option('user')) {
            return User::query()->firstWhere('slug', $slug)?->steamAccount;
        }

        return SteamAccount::query()->firstWhere('steam_id64', (string) config('services.steam.demo_profile'))
            ?? SteamAccount::query()->first();
    }
}
