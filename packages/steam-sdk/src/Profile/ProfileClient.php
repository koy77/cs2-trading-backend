<?php

declare(strict_types=1);

namespace SteamSdk\Profile;

use SteamSdk\Exceptions\SteamRequestException;
use SteamSdk\Support\RateLimitedHttpClient;

/**
 * Reads public Steam community profiles via the keyless "?xml=1" endpoint.
 *
 * Request failures and unknown/private profiles are reported as null.
 */
final class ProfileClient
{
    private readonly RateLimitedHttpClient $http;

    public function __construct(?RateLimitedHttpClient $http = null)
    {
        $this->http = $http ?? new RateLimitedHttpClient;
    }

    public function byVanity(string $vanity): ?ProfileData
    {
        $vanity = trim($vanity);

        if ($vanity === '') {
            return null;
        }

        return $this->fetch('https://steamcommunity.com/id/'.rawurlencode($vanity).'/?xml=1');
    }

    public function bySteamId(string $steamId64): ?ProfileData
    {
        $steamId64 = trim($steamId64);

        if (preg_match('/^\d{17}$/', $steamId64) !== 1) {
            return null;
        }

        return $this->fetch('https://steamcommunity.com/profiles/'.$steamId64.'/?xml=1');
    }

    private function fetch(string $url): ?ProfileData
    {
        try {
            return ProfileData::fromXml($this->http->getXml($url));
        } catch (SteamRequestException) {
            return null;
        }
    }
}
