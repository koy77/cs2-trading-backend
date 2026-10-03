<?php

declare(strict_types=1);

namespace SteamSdk\Tests\WebApi;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use SteamSdk\Tests\Support\FakeRateLimitedHttpClient;
use SteamSdk\Tests\Support\TestCase;
use SteamSdk\WebApi\PublicClient;

final class PublicClientTest extends TestCase
{
    public function test_player_count_parses_the_response(): void
    {
        $http = $this->makeHttp([new Response(200, [], '{"response":{"player_count":483066,"result":1}}')]);

        self::assertSame(483066, (new PublicClient($http))->playerCount(730));

        $request = $http->lastRequest();

        self::assertNotNull($request);

        $uri = (string) $request->getUri();

        self::assertStringContainsString('ISteamUserStats/GetNumberOfCurrentPlayers', $uri);
        self::assertStringContainsString('appid=730', $uri);
    }

    public function test_player_count_returns_null_when_unavailable(): void
    {
        $http = $this->makeHttp([new Response(200, [], '{"response":{"result":42}}')]);

        self::assertNull((new PublicClient($http))->playerCount(999999));
    }

    public function test_player_count_returns_null_on_http_failure(): void
    {
        $http = $this->makeHttp([
            new Response(500, [], ''),
            new Response(500, [], ''),
            new Response(500, [], ''),
        ]);

        self::assertNull((new PublicClient($http))->playerCount(730));
    }

    public function test_news_returns_the_news_items(): void
    {
        $payload = json_encode([
            'appnews' => [
                'appid' => 730,
                'newsitems' => [
                    ['gid' => '1', 'title' => 'Update', 'url' => 'https://example.com/1', 'date' => 1750000000],
                    ['gid' => '2', 'title' => 'Event', 'url' => 'https://example.com/2', 'date' => 1750000001],
                ],
            ],
        ], JSON_THROW_ON_ERROR);

        $http = $this->makeHttp([new Response(200, [], $payload)]);

        $news = (new PublicClient($http))->news(730, 2);

        self::assertCount(2, $news);
        self::assertSame('Update', $news[0]['title']);
        self::assertSame('https://example.com/2', $news[1]['url']);

        $request = $http->lastRequest();

        self::assertNotNull($request);

        $uri = (string) $request->getUri();

        self::assertStringContainsString('ISteamNews/GetNewsForApp', $uri);
        self::assertStringContainsString('appid=730', $uri);
        self::assertStringContainsString('count=2', $uri);
    }

    public function test_news_returns_empty_array_on_http_failure(): void
    {
        $http = $this->makeHttp([
            new Response(500, [], ''),
            new Response(500, [], ''),
            new Response(500, [], ''),
        ]);

        self::assertSame([], (new PublicClient($http))->news(730));
    }

    /**
     * @param  list<ResponseInterface|\Throwable>  $queue
     */
    private function makeHttp(array $queue): FakeRateLimitedHttpClient
    {
        return new FakeRateLimitedHttpClient(new MockHandler($queue));
    }
}
