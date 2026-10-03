<?php

namespace App\Providers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use SteamSdk\Inventory\InventoryClient;
use SteamSdk\Market\PriceClient;
use SteamSdk\OpenId\SteamOpenId;
use SteamSdk\Profile\ProfileClient;
use SteamSdk\Support\RateLimitedHttpClient;
use SteamSdk\WebApi\PublicClient;

/**
 * Steam-интеграция: SDK-клиенты + общий (межпроцессный) троттлинг через Redis.
 */
class SteamServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(RateLimitedHttpClient::class, function () {
            $minInterval = max(0.0, (float) config('services.steam.min_interval', 1.0));

            return new RateLimitedHttpClient($minInterval, 2, function () use ($minInterval) {
                // Гейт в Redis: web + воркеры ходят во внешний Steam по очереди (~1 rps).
                $key = 'steam:http:gate';
                $deadline = microtime(true) + 30;

                while (Cache::get($key) !== null && microtime(true) < $deadline) {
                    usleep(150_000);
                }

                Cache::put($key, 'busy', max(1, (int) ceil($minInterval)));
            });
        });

        $this->app->singleton(SteamOpenId::class, fn () => new SteamOpenId($this->app->make(RateLimitedHttpClient::class)));
        $this->app->singleton(ProfileClient::class, fn () => new ProfileClient($this->app->make(RateLimitedHttpClient::class)));
        $this->app->singleton(InventoryClient::class, fn () => new InventoryClient($this->app->make(RateLimitedHttpClient::class)));
        $this->app->singleton(PriceClient::class, fn () => new PriceClient($this->app->make(RateLimitedHttpClient::class)));
        $this->app->singleton(PublicClient::class, fn () => new PublicClient($this->app->make(RateLimitedHttpClient::class)));
    }

    public function boot(): void
    {
        //
    }
}
