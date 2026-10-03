<?php

declare(strict_types=1);

namespace SteamSdk\Market;

/**
 * Parsed result of the market price overview endpoint.
 *
 * Values are kept as strings exactly as Steam returned them
 * (e.g. "$31.42", "1,234"); use getRaw() for the untouched payload.
 */
final class PriceData
{
    /**
     * @param  array<string, mixed>  $raw
     */
    public function __construct(
        private readonly ?string $lowest,
        private readonly ?string $median,
        private readonly ?string $volume,
        private readonly array $raw,
    ) {}

    /**
     * @param  array<string, mixed>  $json
     */
    public static function fromArray(array $json): self
    {
        return new self(
            self::stringOrNull($json['lowest_price'] ?? null),
            self::stringOrNull($json['median_price'] ?? null),
            self::stringOrNull($json['volume'] ?? null),
            $json,
        );
    }

    public function getLowest(): ?string
    {
        return $this->lowest;
    }

    public function getMedian(): ?string
    {
        return $this->median;
    }

    public function getVolume(): ?string
    {
        return $this->volume;
    }

    /**
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->raw;
    }

    private static function stringOrNull(mixed $value): ?string
    {
        return is_scalar($value) ? (string) $value : null;
    }
}
