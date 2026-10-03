<?php

declare(strict_types=1);

namespace SteamSdk\Inventory;

use SteamSdk\Exceptions\SteamRequestException;
use SteamSdk\Support\RateLimitedHttpClient;

/**
 * Fetches public Steam inventories via the keyless community endpoint,
 * following start_assetid / last_assetid pagination.
 */
final class InventoryClient
{
    public const DEFAULT_APP_ID = 730;

    public const DEFAULT_CONTEXT_ID = 2;

    private const PAGE_SIZE = 2000;

    private readonly RateLimitedHttpClient $http;

    public function __construct(?RateLimitedHttpClient $http = null)
    {
        $this->http = $http ?? new RateLimitedHttpClient;
    }

    /**
     * Fetch up to $maxItems items of a public inventory.
     *
     * Private inventories and request failures yield an invalid snapshot
     * (isSuccess() === false) instead of an exception.
     */
    public function fetch(
        string $steamId64,
        int $appId = self::DEFAULT_APP_ID,
        int $contextId = self::DEFAULT_CONTEXT_ID,
        int $maxItems = 5000,
    ): InventorySnapshot {
        $steamId64 = trim($steamId64);

        if ($steamId64 === '') {
            return InventorySnapshot::invalid();
        }

        $maxItems = max(0, $maxItems);

        /** @var array<string, InventoryItemData> $merged keyed by assetid */
        $merged = [];
        $totalCount = 0;
        $startAssetId = null;

        while (true) {
            $url = sprintf(
                'https://steamcommunity.com/inventory/%s/%d/%d?l=english&count=%d',
                rawurlencode($steamId64),
                $appId,
                $contextId,
                self::PAGE_SIZE,
            );

            if ($startAssetId !== null) {
                $url .= '&start_assetid='.rawurlencode($startAssetId);
            }

            try {
                $page = $this->http->getJson($url);
            } catch (SteamRequestException) {
                return InventorySnapshot::invalid();
            }

            $snapshot = InventorySnapshot::fromArray($page);

            if (! $snapshot->isSuccess()) {
                return InventorySnapshot::invalid();
            }

            $totalCount = max($totalCount, $snapshot->getTotalCount());

            foreach ($snapshot->getItems() as $item) {
                $merged[$item->getAssetId()] = $item;
            }

            if ($snapshot->isEmpty()) {
                break;
            }

            if (count($merged) >= $maxItems) {
                break;
            }

            $lastAssetId = isset($page['last_assetid']) ? (string) $page['last_assetid'] : '';

            // No further pages, or Steam is repeating the cursor.
            if ($lastAssetId === '' || $lastAssetId === $startAssetId) {
                break;
            }

            if ($totalCount > 0 && count($merged) >= $totalCount) {
                break;
            }

            $startAssetId = $lastAssetId;
        }

        $items = array_slice(array_values($merged), 0, $maxItems);

        return InventorySnapshot::fromItems($totalCount > 0 ? $totalCount : count($items), $items);
    }
}
