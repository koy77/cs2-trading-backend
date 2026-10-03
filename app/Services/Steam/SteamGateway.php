<?php

namespace App\Services\Steam;

use App\Models\SteamAccount;
use SteamSdk\Inventory\InventoryClient;
use SteamSdk\Inventory\InventorySnapshot;

/**
 * Точка входа в Steam-данные: real (живые запросы) или fixture (слепки реальных профилей).
 */
class SteamGateway
{
    public function __construct(private readonly InventoryClient $inventory) {}

    public function mode(): string
    {
        return (string) config('services.steam.provider', 'real');
    }

    public function fetchInventory(SteamAccount $account, ?string $mode = null): InventorySnapshot
    {
        $mode ??= $this->mode();

        if ($mode === 'fixture') {
            return $this->fixtureInventory($account->steam_id64);
        }

        return $this->inventory->fetch($account->steam_id64);
    }

    public function fixtureInventory(string $steamId64): InventorySnapshot
    {
        $path = $this->fixturePath($steamId64);

        if (! is_file($path)) {
            return InventorySnapshot::fromArray([]);
        }

        $json = json_decode((string) file_get_contents($path), true);

        return InventorySnapshot::fromArray(is_array($json) ? $json : []);
    }

    /**
     * Известные фикстуры-профили: [steamId64 => файл] (для сидов и документации).
     *
     * @return array<string, string>
     */
    public function fixtureProfiles(): array
    {
        $dir = base_path((string) config('services.steam.fixtures_path'));
        $result = [];

        foreach (glob($dir.'/inventory-*.json') ?: [] as $file) {
            $id = preg_replace('/\D+/', '', basename($file, '.json'));

            if (is_string($id) && $id !== '') {
                $result[$id] = $file;
            }
        }

        return $result;
    }

    public function hasFixture(string $steamId64): bool
    {
        return is_file($this->fixturePath($steamId64));
    }

    private function fixturePath(string $steamId64): string
    {
        return base_path((string) config('services.steam.fixtures_path'))."/inventory-{$steamId64}.json";
    }
}
