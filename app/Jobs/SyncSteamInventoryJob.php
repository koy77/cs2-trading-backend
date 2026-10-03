<?php

namespace App\Jobs;

use App\Events\InventorySynced;
use App\Models\InventoryItem;
use App\Models\SteamAccount;
use App\Services\Steam\SteamGateway;
use App\Support\EventLogger;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\DB;

/**
 * Синк инвентаря Steam (очередь inventory.sync).
 * Идемпотентен: upsert по unique(steam_account_id, asset_id).
 */
class SyncSteamInventoryJob implements ShouldQueue
{
    use Queueable;

    public int $tries = 3;

    public function __construct(
        public readonly int $steamAccountId,
        public readonly string $mode = 'real',
    ) {}

    /** @return array<int, int> */
    public function backoff(): array
    {
        return [5, 15, 45];
    }

    public function handle(SteamGateway $gateway, EventLogger $events): void
    {
        $account = SteamAccount::query()->findOrFail($this->steamAccountId);
        $snapshot = $gateway->fetchInventory($account, $this->mode);

        DB::transaction(function () use ($account, $snapshot, $events) {
            $seen = [];

            foreach ($snapshot->getItems() as $item) {
                $seen[] = $item->getAssetId();

                InventoryItem::query()->updateOrCreate(
                    [
                        'steam_account_id' => $account->id,
                        'asset_id' => $item->getAssetId(),
                    ],
                    [
                        'class_id' => $item->getClassId(),
                        'instance_id' => $item->getInstanceId(),
                        'amount' => $item->getAmount(),
                        'market_hash_name' => $item->getMarketHashName(),
                        'item_type' => $item->getType(),
                        'name' => $item->getName(),
                        'icon_url' => $item->getIconUrl(),
                        'tradable' => $item->isTradable(),
                        'marketable' => $item->isMarketable(),
                    ],
                );
            }

            // Предметы, исчезнувшие из Steam, помечаем removed (не удаляем —
            // на них могут ссылаться старые листинги/заказы).
            if ($seen !== []) {
                InventoryItem::query()
                    ->where('steam_account_id', $account->id)
                    ->where('status', 'in_inventory')
                    ->whereNotIn('asset_id', $seen)
                    ->update(['status' => 'removed']);
            }

            $account->update(['last_sync_at' => now()]);

            $events->log('inventory.sync_attempt', $account->user, 'steam_account', $account->id, [
                'mode' => $this->mode,
                'received' => count($snapshot->getItems()),
                'total' => $snapshot->getTotalCount(),
            ]);
        });

        InventorySynced::dispatch($account->refresh());
    }
}
