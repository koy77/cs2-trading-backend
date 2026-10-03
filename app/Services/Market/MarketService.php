<?php

namespace App\Services\Market;

use App\Support\PriceParser;
use Illuminate\Support\Facades\Cache;
use SteamSdk\Market\PriceClient;
use Throwable;

/**
 * Рыночные цены Steam Market с кэшем в Redis.
 * STEAM_PROVIDER=real — живые запросы (троттлинг в SDK+провайдере);
 * fixture — детерминированные значения (CI/страховка от лимитов Steam).
 */
class MarketService
{
    public function __construct(private readonly PriceClient $prices) {}

    /**
     * @return array{lowest: ?string, median: ?string, volume: ?string, source: string, cached_at: string}
     */
    public function price(string $marketHashName): array
    {
        $ttl = (int) config('services.steam.price_cache_ttl', 180);
        $key = 'steam:price:'.sha1(strtolower($marketHashName));

        return Cache::remember($key, $ttl, function () use ($marketHashName) {
            if (config('services.steam.provider') === 'fixture') {
                return $this->fixturePrice($marketHashName, 'fixture');
            }

            try {
                $price = $this->prices->price($marketHashName);
            } catch (Throwable $e) {
                report($e);

                return $this->fixturePrice($marketHashName, 'fallback');
            }

            if ($price === null) {
                return $this->fixturePrice($marketHashName, 'fallback');
            }

            return [
                'lowest' => $price->getLowest(),
                'median' => $price->getMedian(),
                'volume' => $price->getVolume(),
                'source' => 'live',
                'cached_at' => now()->toIso8601String(),
            ];
        });
    }

    public function priceCents(string $marketHashName): int
    {
        return PriceParser::toCents($this->price($marketHashName)['lowest']);
    }

    /**
     * @return array{lowest: ?string, median: ?string, volume: ?string, source: string, cached_at: string}
     */
    private function fixturePrice(string $marketHashName, string $source): array
    {
        $seed = crc32(strtolower($marketHashName));
        $cents = 50 + ($seed % 9950);
        $money = '$'.number_format($cents / 100, 2);

        return [
            'lowest' => $money,
            'median' => $money,
            'volume' => (string) (1 + ($seed % 500)),
            'source' => $source,
            'cached_at' => now()->toIso8601String(),
        ];
    }
}
