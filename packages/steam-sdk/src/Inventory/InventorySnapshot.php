<?php

declare(strict_types=1);

namespace SteamSdk\Inventory;

/**
 * Immutable result of an inventory fetch.
 *
 * A snapshot with isSuccess() === false means the inventory is private,
 * unavailable or the request failed: no items and a zero total count.
 */
final class InventorySnapshot
{
    /**
     * @param  list<InventoryItemData>  $items
     */
    private function __construct(
        private readonly bool $success,
        private readonly int $totalCount,
        private readonly array $items,
    ) {}

    /**
     * Snapshot used for private inventories and failed fetches.
     */
    public static function invalid(): self
    {
        return new self(false, 0, []);
    }

    /**
     * Build a snapshot from a raw Steam inventory payload (also used for fixtures).
     *
     * A payload without a truthy "success" key yields an invalid snapshot
     * instead of throwing, so private inventories are never fatal.
     *
     * @param  array<string, mixed>  $json
     */
    public static function fromArray(array $json): self
    {
        if (! self::isTruthy($json['success'] ?? false)) {
            return self::invalid();
        }

        $descriptions = [];

        foreach (self::arrayItems($json['descriptions'] ?? []) as $description) {
            $descriptions[self::matchKey($description)] = $description;
        }

        $items = [];

        foreach (self::arrayItems($json['assets'] ?? []) as $asset) {
            $items[] = InventoryItemData::fromSteamData($asset, $descriptions[self::matchKey($asset)] ?? null);
        }

        $totalCount = (int) ($json['total_inventory_count'] ?? 0);

        if ($totalCount <= 0) {
            $totalCount = count($items);
        }

        return new self(true, $totalCount, $items);
    }

    /**
     * @param  list<InventoryItemData>  $items
     */
    public static function fromItems(int $totalCount, array $items): self
    {
        return new self(true, max(0, $totalCount), array_values($items));
    }

    public function isSuccess(): bool
    {
        return $this->success;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * @return list<InventoryItemData>
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function isEmpty(): bool
    {
        return $this->items === [];
    }

    /**
     * @return list<array<string, mixed>>
     */
    private static function arrayItems(mixed $value): array
    {
        if (! is_array($value)) {
            return [];
        }

        return array_values(array_filter($value, 'is_array'));
    }

    /**
     * assets[] and descriptions[] refer to each other by (classid, instanceid).
     *
     * @param  array<string, mixed>  $row
     */
    private static function matchKey(array $row): string
    {
        $instanceId = (string) ($row['instanceid'] ?? '');

        return ((string) ($row['classid'] ?? '')).'/'.($instanceId === '' ? '0' : $instanceId);
    }

    private static function isTruthy(mixed $value): bool
    {
        return $value === true || $value === 1 || $value === '1';
    }
}
