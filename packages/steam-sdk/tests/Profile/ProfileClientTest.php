<?php

declare(strict_types=1);

namespace SteamSdk\Tests\Profile;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use SteamSdk\Profile\ProfileClient;
use SteamSdk\Tests\Support\FakeRateLimitedHttpClient;
use SteamSdk\Tests\Support\TestCase;

final class ProfileClientTest extends TestCase
{
    private const STEAM_ID = '76561197960287930';

    public function test_by_steam_id_parses_the_xml_fixture(): void
    {
        $http = $this->makeHttp([new Response(200, [], self::loadFixture('profile.xml'))]);

        $profile = (new ProfileClient($http))->bySteamId(self::STEAM_ID);

        self::assertNotNull($profile);
        self::assertSame(self::STEAM_ID, $profile->getSteamId64());
        self::assertSame('Robin Walker', $profile->getPersonaName());
        self::assertSame('https://avatars.akamai.steamstatic.com/abcd_full.jpg', $profile->getAvatarUrl());

        $request = $http->lastRequest();

        self::assertNotNull($request);
        self::assertSame(
            'https://steamcommunity.com/profiles/'.self::STEAM_ID.'/?xml=1',
            (string) $request->getUri(),
        );
    }

    public function test_by_vanity_requests_the_vanity_url(): void
    {
        $http = $this->makeHttp([new Response(200, [], self::loadFixture('profile.xml'))]);

        $profile = (new ProfileClient($http))->byVanity('robinwalker');

        self::assertNotNull($profile);

        $request = $http->lastRequest();

        self::assertNotNull($request);
        self::assertSame('https://steamcommunity.com/id/robinwalker/?xml=1', (string) $request->getUri());
    }

    public function test_returns_null_for_an_unknown_profile_payload(): void
    {
        $http = $this->makeHttp([
            new Response(200, [], '<?xml version="1.0"?><response><error>Profile not found</error></response>'),
        ]);

        self::assertNull((new ProfileClient($http))->byVanity('doesnotexist'));
    }

    public function test_returns_null_on_http_failure(): void
    {
        $http = $this->makeHttp([new Response(404, [], '')]);

        self::assertNull((new ProfileClient($http))->bySteamId(self::STEAM_ID));
    }

    public function test_returns_null_and_makes_no_request_for_a_malformed_steam_id(): void
    {
        $http = $this->makeHttp([]);

        self::assertNull((new ProfileClient($http))->bySteamId('not-a-steam-id'));
        self::assertSame([], $http->requests);
    }

    public function test_returns_null_for_an_empty_vanity(): void
    {
        $http = $this->makeHttp([]);

        self::assertNull((new ProfileClient($http))->byVanity('  '));
        self::assertSame([], $http->requests);
    }

    /**
     * @param  list<ResponseInterface|\Throwable>  $queue
     */
    private function makeHttp(array $queue): FakeRateLimitedHttpClient
    {
        return new FakeRateLimitedHttpClient(new MockHandler($queue));
    }
}
