<?php

declare(strict_types=1);

namespace SteamSdk\Market;

use SteamSdk\Exceptions\SteamRequestException;
use SteamSdk\Support\RateLimitedHttpClient;

/**
 * Keyless CS2 market price lookups via the market priceoverview endpoint.
 */
final class PriceClient
{
    public const APP_ID = 730;

    private readonly RateLimitedHttpClient $http;

    public function __construct(?RateLimitedHttpClient $http = null)
    {
        $this->http = $http ?? new RateLimitedHttpClient;
    }

    /**
     * Latest price overview for a market_hash_name, or null when the item has no
     * listings / the lookup failed.
     */
    public function price(string $marketHashName, int $currency = 1): ?PriceData
    {
        $url = 'https://steamcommunity.com/market/priceoverview/?appid='.self::APP_ID
            .'&currency='.$currency
            .'&market_hash_name='.rawurlencode($marketHashName);

        try {
            $json = $this->http->getJson($url);
        } catch (SteamRequestException) {
            return null;
        }

        if (! self::isSuccess($json)) {
            return null;
        }

        return PriceData::fromArray($json);
    }

    /**
     * @param  array<string, mixed>  $json
     */
    private static function isSuccess(array $json): bool
    {
        $success = $json['success'] ?? false;

        return $success === true || $success === 1 || $success === '1';
    }
}
