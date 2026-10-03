<?php

declare(strict_types=1);

namespace SteamSdk\Tests\Support;

use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use SimpleXMLElement;
use SteamSdk\Exceptions\SteamRequestException;

final class RateLimitedHttpClientTest extends TestCase
{
    private const URL = 'https://steamcommunity.com/market/priceoverview/?appid=730&currency=1&market_hash_name=Test';

    public function test_get_raw_returns_the_response_body(): void
    {
        $http = $this->makeClient([new Response(200, [], 'plain body')]);

        self::assertSame('plain body', $http->getRaw(self::URL));
    }

    public function test_get_json_decodes_a_json_object(): void
    {
        $http = $this->makeClient([new Response(200, [], '{"success":true,"lowest_price":"$1.00"}')]);

        self::assertSame(
            ['success' => true, 'lowest_price' => '$1.00'],
            $http->getJson(self::URL),
        );
    }

    public function test_get_json_throws_on_invalid_payload(): void
    {
        $http = $this->makeClient([new Response(200, [], 'this is not json')]);

        $this->expectException(SteamRequestException::class);

        $http->getJson(self::URL);
    }

    public function test_get_xml_returns_simplexml(): void
    {
        $http = $this->makeClient([
            new Response(200, [], '<?xml version="1.0"?><profile><steamID64>76561197960287930</steamID64></profile>'),
        ]);

        $xml = $http->getXml(self::URL);

        self::assertInstanceOf(SimpleXMLElement::class, $xml);
        self::assertSame('76561197960287930', (string) $xml->steamID64);
    }

    public function test_get_xml_throws_on_garbage(): void
    {
        $http = $this->makeClient([new Response(200, [], '<<<not xml')]);

        $this->expectException(SteamRequestException::class);

        $http->getXml(self::URL);
    }

    public function test_retries_on_429_with_one_second_backoff(): void
    {
        $http = $this->makeClient([
            new Response(429, [], 'too many requests'),
            new Response(200, [], '{"ok":true}'),
        ]);

        self::assertSame('{"ok":true}', $http->getRaw(self::URL));
        self::assertSame([1.0], $http->sleeps);
        self::assertCount(2, $http->requests);
    }

    public function test_retries_on_5xx_with_1s_then_2s_backoff(): void
    {
        $http = $this->makeClient([
            new Response(503, [], 'service unavailable'),
            new Response(500, [], 'server error'),
            new Response(200, [], 'recovered'),
        ]);

        self::assertSame('recovered', $http->getRaw(self::URL));
        self::assertSame([1.0, 2.0], $http->sleeps);
        self::assertCount(3, $http->requests);
    }

    public function test_throws_after_retries_are_exhausted(): void
    {
        $http = $this->makeClient([new Response(429, [], ''), new Response(429, [], '')], maxRetries: 1);

        try {
            $http->getRaw(self::URL);
            self::fail('SteamRequestException was expected');
        } catch (SteamRequestException $exception) {
            self::assertStringContainsString('HTTP 429', $exception->getMessage());
        }

        self::assertSame([1.0], $http->sleeps);
        self::assertCount(2, $http->requests);
    }

    public function test_retries_on_network_errors(): void
    {
        $http = $this->makeClient([
            new ConnectException('Connection refused', new Request('GET', self::URL)),
            new Response(200, [], 'recovered'),
        ]);

        self::assertSame('recovered', $http->getRaw(self::URL));
        self::assertSame([1.0], $http->sleeps);
    }

    public function test_does_not_retry_on_non_retryable_client_errors(): void
    {
        $http = $this->makeClient([new Response(404, [], 'not found')]);

        try {
            $http->getRaw(self::URL);
            self::fail('SteamRequestException was expected');
        } catch (SteamRequestException $exception) {
            self::assertStringContainsString('HTTP 404', $exception->getMessage());
        }

        self::assertSame([], $http->sleeps);
        self::assertCount(1, $http->requests);
    }

    public function test_calls_before_request_callback_before_every_attempt(): void
    {
        $calls = 0;

        $http = $this->makeClient(
            [new Response(429, [], ''), new Response(200, [], 'ok')],
            beforeRequest: function () use (&$calls): void {
                $calls++;
            },
        );

        $http->getRaw(self::URL);

        self::assertSame(2, $calls);
    }

    public function test_waits_min_interval_between_consecutive_requests(): void
    {
        $http = $this->makeClient(
            [new Response(200, [], 'a'), new Response(200, [], 'b')],
            minIntervalSeconds: 5.0,
        );

        $http->getRaw(self::URL);
        $http->getRaw(self::URL);

        self::assertCount(1, $http->sleeps);
        self::assertGreaterThan(4.5, $http->sleeps[0]);
        self::assertLessThanOrEqual(5.0, $http->sleeps[0]);
    }

    public function test_sends_chrome_like_steam_headers(): void
    {
        $http = $this->makeClient([new Response(200, [], '')]);

        $http->getRaw(self::URL);

        $request = $http->lastRequest();

        self::assertNotNull($request);
        self::assertStringContainsString('Mozilla/5.0', $request->getHeaderLine('User-Agent'));
        self::assertStringContainsString('Chrome/', $request->getHeaderLine('User-Agent'));
        self::assertSame('https://steamcommunity.com/', $request->getHeaderLine('Referer'));
        self::assertSame('en-US,en;q=0.9', $request->getHeaderLine('Accept-Language'));
    }

    public function test_post_form_sends_an_urlencoded_body(): void
    {
        $http = $this->makeClient([new Response(200, [], 'is_valid:true')]);

        $body = $http->postForm('https://steamcommunity.com/openid/login', [
            'openid.mode' => 'check_authentication',
            'openid.claimed_id' => 'https://steamcommunity.com/openid/id/76561197960287930',
        ]);

        self::assertSame('is_valid:true', $body);

        $request = $http->lastRequest();

        self::assertNotNull($request);
        self::assertSame('POST', $request->getMethod());
        self::assertSame('https://steamcommunity.com/openid/login', (string) $request->getUri());
        self::assertSame('application/x-www-form-urlencoded', $request->getHeaderLine('Content-Type'));
        self::assertStringContainsString('openid.mode=check_authentication', (string) $request->getBody());
    }

    /**
     * @param  list<ResponseInterface|\Throwable>  $queue
     */
    private function makeClient(
        array $queue,
        float $minIntervalSeconds = 0.0,
        int $maxRetries = 2,
        ?callable $beforeRequest = null,
    ): FakeRateLimitedHttpClient {
        return new FakeRateLimitedHttpClient(new MockHandler($queue), $minIntervalSeconds, $maxRetries, $beforeRequest);
    }
}
