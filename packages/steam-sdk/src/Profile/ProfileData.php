<?php

declare(strict_types=1);

namespace SteamSdk\Profile;

use SimpleXMLElement;

/**
 * Immutable subset of a Steam community profile (from community XML).
 */
final class ProfileData
{
    public function __construct(
        private readonly string $steamId64,
        private readonly string $personaName,
        private readonly ?string $avatarUrl,
    ) {}

    public static function fromXml(SimpleXMLElement $xml): ?self
    {
        $steamId64 = trim((string) ($xml->steamID64 ?? ''));

        if (preg_match('/^\d{17}$/', $steamId64) !== 1) {
            return null;
        }

        return new self(
            $steamId64,
            trim((string) ($xml->steamID ?? '')),
            self::firstNonEmptyString(
                (string) ($xml->avatarFull ?? ''),
                (string) ($xml->avatarMedium ?? ''),
                (string) ($xml->avatarIcon ?? ''),
            ),
        );
    }

    public function getSteamId64(): string
    {
        return $this->steamId64;
    }

    public function getPersonaName(): string
    {
        return $this->personaName;
    }

    public function getAvatarUrl(): ?string
    {
        return $this->avatarUrl;
    }

    private static function firstNonEmptyString(string ...$values): ?string
    {
        foreach ($values as $value) {
            $value = trim($value);

            if ($value !== '') {
                return $value;
            }
        }

        return null;
    }
}
