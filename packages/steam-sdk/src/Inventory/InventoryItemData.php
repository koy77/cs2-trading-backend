<?php

declare(strict_types=1);

namespace SteamSdk\Inventory;

/**
 * One inventory asset joined with its description data.
 */
final class InventoryItemData
{
    public const ICON_BASE_URL = 'https://community.cloudflare.steamstatic.com/economy/image/';

    public function __construct(
        private readonly string $assetId,
        private readonly string $classId,
        private readonly string $instanceId,
        private readonly int $amount,
        private readonly string $marketHashName,
        private readonly string $type,
        private readonly string $name,
        private readonly ?string $iconUrl,
        private readonly bool $tradable,
        private readonly bool $marketable,
    ) {}

    /**
     * @param  array<string, mixed>  $asset
     * @param  array<string, mixed>|null  $description
     */
    public static function fromSteamData(array $asset, ?array $description): self
    {
        $iconPath = trim((string) ($description['icon_url'] ?? ''));

        return new self(
            assetId: (string) ($asset['assetid'] ?? ''),
            classId: (string) ($asset['classid'] ?? ''),
            instanceId: (string) ($asset['instanceid'] ?? ''),
            amount: (int) ($asset['amount'] ?? 1),
            marketHashName: (string) ($description['market_hash_name'] ?? ''),
            type: (string) ($description['type'] ?? ''),
            name: (string) ($description['name'] ?? ''),
            iconUrl: $iconPath === '' ? null : self::ICON_BASE_URL.$iconPath,
            tradable: (bool) ($description['tradable'] ?? false),
            marketable: (bool) ($description['marketable'] ?? false),
        );
    }

    public function getAssetId(): string
    {
        return $this->assetId;
    }

    public function getClassId(): string
    {
        return $this->classId;
    }

    public function getInstanceId(): string
    {
        return $this->instanceId;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getMarketHashName(): string
    {
        return $this->marketHashName;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getIconUrl(): ?string
    {
        return $this->iconUrl;
    }

    public function isTradable(): bool
    {
        return $this->tradable;
    }

    public function isMarketable(): bool
    {
        return $this->marketable;
    }
}
