<?php

declare(strict_types=1);

namespace SteamSdk\Tests\Market;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use SteamSdk\Market\PriceClient;
use SteamSdk\Market\PriceData;
use SteamSdk\Tests\Support\FakeRateLimitedHttpClient;
use SteamSdk\Tests\Support\TestCase;

final class PriceClientTest extends TestCase
{
    public function test_price_parses_the_price_fixture(): void
    {
        $http = $this->makeHttp([new Response(200, [], self::loadFixture('price.json'))]);

        $price = (new PriceClient($http))->price('AWP | Asiimov (Field-Tested)');

        self::assertNotNull($price);
        self::assertSame('$31.42', $price->getLowest());
        self::assertSame('$31.55', $price->getMedian());
        self::assertSame('1,234', $price->getVolume());
        self::assertSame(self::loadFixtureJson('price.json'), $price->getRaw());
    }

    public function test_price_sends_appid_currency_and_encoded_market_hash_name(): void
    {
        $http = $this->makeHttp([new Response(200, [], self::loadFixture('price.json'))]);

        (new PriceClient($http))->price('AWP | Asiimov (Field-Tested)', 3);

        $request = $http->lastRequest();

        self::assertNotNull($request);

        $uri = (string) $request->getUri();

        self::assertStringStartsWith('https://steamcommunity.com/market/priceoverview/?', $uri);
        self::assertStringContainsString('appid=730', $uri);
        self::assertStringContainsString('currency=3', $uri);
        self::assertStringContainsString(
            'market_hash_name='.rawurlencode('AWP | Asiimov (Field-Tested)'),
            $uri,
        );
    }

    public function test_price_returns_null_when_success_is_false(): void
    {
        $http = $this->makeHttp([new Response(200, [], '{"success":false}')]);

        self::assertNull((new PriceClient($http))->price('Unknown Item'));
    }

    public function test_price_returns_null_on_http_failure(): void
    {
        $http = $this->makeHttp([
            new Response(500, [], ''),
            new Response(500, [], ''),
            new Response(500, [], ''),
        ]);

        self::assertNull((new PriceClient($http))->price('AWP | Asiimov (Field-Tested)'));
    }

    public function test_price_data_tolerates_missing_fields(): void
    {
        $price = PriceData::fromArray(['success' => true, 'volume' => '7']);

        self::assertNull($price->getLowest());
        self::assertNull($price->getMedian());
        self::assertSame('7', $price->getVolume());
    }

    /**
     * @param  list<ResponseInterface|\Throwable>  $queue
     */
    private function makeHttp(array $queue): FakeRateLimitedHttpClient
    {
        return new FakeRateLimitedHttpClient(new MockHandler($queue));
    }
}
