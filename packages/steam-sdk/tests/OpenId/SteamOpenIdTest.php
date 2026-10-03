<?php

declare(strict_types=1);

namespace SteamSdk\Tests\OpenId;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use SteamSdk\OpenId\SteamOpenId;
use SteamSdk\Tests\Support\FakeRateLimitedHttpClient;
use SteamSdk\Tests\Support\TestCase;

final class SteamOpenIdTest extends TestCase
{
    private const STEAM_ID = '76561197960287930';

    public function test_builds_checkid_setup_url_with_identifier_select(): void
    {
        $openId = new SteamOpenId($this->makeHttp([]));

        $url = $openId->url('https://app.example.com/auth/steam/callback?x=1', 'https://app.example.com');

        self::assertStringStartsWith('https://steamcommunity.com/openid/login?', $url);

        $rawQuery = (string) parse_url($url, PHP_URL_QUERY);
        self::assertStringContainsString('openid.ns=http', $rawQuery);
        self::assertStringContainsString('openid.mode=checkid_setup', $rawQuery);
        self::assertStringContainsString(
            'openid.claimed_id='.rawurlencode(SteamOpenId::IDENTIFIER_SELECT),
            $rawQuery,
        );
        self::assertStringContainsString(
            'openid.identity='.rawurlencode(SteamOpenId::IDENTIFIER_SELECT),
            $rawQuery,
        );

        parse_str($rawQuery, $query); // PHP normalises dots to underscores in parsed names

        self::assertSame('http://specs.openid.net/auth/2.0', $query['openid_ns']);
        self::assertSame('checkid_setup', $query['openid_mode']);
        self::assertSame('https://app.example.com/auth/steam/callback?x=1', $query['openid_return_to']);
        self::assertSame('https://app.example.com', $query['openid_realm']);
    }

    public function test_extracts_steam_id_from_claimed_id(): void
    {
        $openId = new SteamOpenId;

        self::assertSame(
            self::STEAM_ID,
            $openId->steamIdFromClaimedId('https://steamcommunity.com/openid/id/'.self::STEAM_ID),
        );
    }

    public function test_returns_null_for_invalid_claimed_ids(): void
    {
        $openId = new SteamOpenId;

        self::assertNull($openId->steamIdFromClaimedId(''));
        self::assertNull($openId->steamIdFromClaimedId('https://steamcommunity.com/openid/id/12345')); // too short
        self::assertNull($openId->steamIdFromClaimedId('https://steamcommunity.com/openid/id/7656119796028793')); // 16 digits
        self::assertNull($openId->steamIdFromClaimedId('https://steamcommunity.com/openid/id/'.self::STEAM_ID.'/')); // trailing slash
        self::assertNull($openId->steamIdFromClaimedId('https://steamcommunity.com/openid/id/not-a-number'));
    }

    public function test_validate_posts_to_steam_and_returns_steam_id(): void
    {
        $http = $this->makeHttp([new Response(200, [], 'ns:http://specs.openid.net/auth/2.0'."\n".'is_valid:true'."\n")]);
        $openId = new SteamOpenId($http);

        $steamId = $openId->validate([
            'openid_ns' => 'http://specs.openid.net/auth/2.0',
            'openid_mode' => 'id_res',
            'openid_op_endpoint' => 'https://steamcommunity.com/openid/login',
            'openid_claimed_id' => 'https://steamcommunity.com/openid/id/'.self::STEAM_ID,
            'openid_identity' => 'https://steamcommunity.com/openid/id/'.self::STEAM_ID,
            'openid_return_to' => 'https://app.example.com/auth/steam/callback?x=1',
            'openid_response_nonce' => '2026-10-03T10:00:00Zdeadbeef',
            'openid_assoc_handle' => '1234567890',
            'openid_signed' => 'op_endpoint,claimed_id,identity,return_to,response_nonce,assoc_handle',
            'openid_sig' => 'somesignature',
            'state' => 'must-not-be-forwarded',
        ]);

        self::assertSame(self::STEAM_ID, $steamId);

        $request = $http->lastRequest();

        self::assertNotNull($request);
        self::assertSame('POST', $request->getMethod());
        self::assertSame('https://steamcommunity.com/openid/login', (string) $request->getUri());

        $body = urldecode((string) $request->getBody());

        self::assertStringContainsString('openid.mode=check_authentication', $body);
        self::assertStringContainsString('openid.claimed_id=https://steamcommunity.com/openid/id/'.self::STEAM_ID, $body);
        self::assertStringContainsString('openid.sig=somesignature', $body);
        self::assertStringNotContainsString('openid_', $body); // underscore forms were normalised back to dots
        self::assertStringNotContainsString('state=', $body); // non-openid parameters are dropped
    }

    public function test_validate_accepts_already_dotted_keys(): void
    {
        $http = $this->makeHttp([new Response(200, [], 'is_valid:true')]);
        $openId = new SteamOpenId($http);

        $steamId = $openId->validate([
            'openid.mode' => 'id_res',
            'openid.claimed_id' => 'https://steamcommunity.com/openid/id/'.self::STEAM_ID,
            'openid.identity' => 'https://steamcommunity.com/openid/id/'.self::STEAM_ID,
        ]);

        self::assertSame(self::STEAM_ID, $steamId);
    }

    public function test_validate_returns_null_when_steam_says_invalid(): void
    {
        $http = $this->makeHttp([new Response(200, [], "is_valid:false\n")]);
        $openId = new SteamOpenId($http);

        self::assertNull($openId->validate([
            'openid_mode' => 'id_res',
            'openid_claimed_id' => 'https://steamcommunity.com/openid/id/'.self::STEAM_ID,
        ]));
    }

    public function test_validate_returns_null_when_steam_is_unreachable(): void
    {
        $http = $this->makeHttp([
            new Response(500, [], ''),
            new Response(500, [], ''),
            new Response(500, [], ''),
        ]);
        $openId = new SteamOpenId($http);

        self::assertNull($openId->validate([
            'openid_mode' => 'id_res',
            'openid_claimed_id' => 'https://steamcommunity.com/openid/id/'.self::STEAM_ID,
        ]));
    }

    public function test_validate_does_not_call_steam_for_an_unparseable_claimed_id(): void
    {
        $http = $this->makeHttp([]);
        $openId = new SteamOpenId($http);

        self::assertNull($openId->validate([
            'openid_mode' => 'id_res',
            'openid_claimed_id' => 'https://steamcommunity.com/openid/id/123',
        ]));

        self::assertSame([], $http->requests);
    }

    public function test_validate_returns_null_when_mode_is_not_id_res(): void
    {
        $http = $this->makeHttp([]);
        $openId = new SteamOpenId($http);

        self::assertNull($openId->validate([
            'openid_mode' => 'cancel',
            'openid_claimed_id' => 'https://steamcommunity.com/openid/id/'.self::STEAM_ID,
        ]));

        self::assertSame([], $http->requests);
    }

    /**
     * @param  list<ResponseInterface|\Throwable>  $queue
     */
    private function makeHttp(array $queue, int $maxRetries = 2): FakeRateLimitedHttpClient
    {
        return new FakeRateLimitedHttpClient(new MockHandler($queue), maxRetries: $maxRetries);
    }
}
