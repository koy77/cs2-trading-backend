<?php

declare(strict_types=1);

namespace SteamSdk\WebApi;

use SteamSdk\Exceptions\SteamRequestException;
use SteamSdk\Support\RateLimitedHttpClient;

/**
 * Keyless access to public Steam Web API methods that need no API key.
 */
final class PublicClient
{
    private const BASE_URL = 'https://api.steampowered.com';

    private readonly RateLimitedHttpClient $http;

    public function __construct(?RateLimitedHttpClient $http = null)
    {
        $this->http = $http ?? new RateLimitedHttpClient;
    }

    /**
     * Current number of players in an app (ISteamUserStats/GetNumberOfCurrentPlayers).
     */
    public function playerCount(int $appId): ?int
    {
        $url = self::BASE_URL.'/ISteamUserStats/GetNumberOfCurrentPlayers/v1/?appid='.$appId;

        try {
            $json = $this->http->getJson($url);
        } catch (SteamRequestException) {
            return null;
        }

        $count = $json['response']['player_count'] ?? null;

        return is_numeric($count) ? (int) $count : null;
    }

    /**
     * Latest news items for an app (ISteamNews/GetNewsForApp), newest first.
     *
     * @return list<array<string, mixed>>
     */
    public function news(int $appId, int $count = 3): array
    {
        $url = self::BASE_URL.'/ISteamNews/GetNewsForApp/v2/?appid='.$appId
            .'&count='.max(0, $count)
            .'&maxlength=0';

        try {
            $json = $this->http->getJson($url);
        } catch (SteamRequestException) {
            return [];
        }

        $items = $json['appnews']['newsitems'] ?? [];

        if (! is_array($items)) {
            return [];
        }

        return array_values(array_filter($items, 'is_array'));
    }
}
