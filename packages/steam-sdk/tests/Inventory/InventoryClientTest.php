<?php

declare(strict_types=1);

namespace SteamSdk\Tests\Inventory;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use SteamSdk\Inventory\InventoryClient;
use SteamSdk\Inventory\InventorySnapshot;
use SteamSdk\Tests\Support\FakeRateLimitedHttpClient;
use SteamSdk\Tests\Support\TestCase;

final class InventoryClientTest extends TestCase
{
    private const STEAM_ID = '76561197960287930';

    public function test_snapshot_from_array_parses_the_inventory_fixture(): void
    {
        $snapshot = InventorySnapshot::fromArray(self::loadFixtureJson('inventory.json'));

        self::assertTrue($snapshot->isSuccess());
        self::assertSame(3, $snapshot->getTotalCount());
        self::assertCount(3, $snapshot->getItems());

        $awp = $snapshot->getItems()[0];
        self::assertSame('210001', $awp->getAssetId());
        self::assertSame('310001', $awp->getClassId());
        self::assertSame('0', $awp->getInstanceId());
        self::assertSame(1, $awp->getAmount());
        self::assertSame('AWP | Asiimov (Field-Tested)', $awp->getMarketHashName());
        self::assertSame('Sniper Rifle', $awp->getType());
        self::assertSame('AWP | Asiimov', $awp->getName());
        self::assertSame('https://community.cloudflare.steamstatic.com/economy/image/abc123', $awp->getIconUrl());
        self::assertTrue($awp->isTradable());
        self::assertTrue($awp->isMarketable());

        $sticker = $snapshot->getItems()[1];
        self::assertSame('Sticker | Titan (Holo)', $sticker->getMarketHashName());
        self::assertSame('Sticker', $sticker->getType());
        self::assertFalse($sticker->isTradable());
        self::assertFalse($sticker->isMarketable());

        // Third asset shares classid 310001 with the AWP but has instanceid "1":
        // it must be matched to its own description, not to the instanceid "0" one.
        $statTrak = $snapshot->getItems()[2];
        self::assertSame('210003', $statTrak->getAssetId());
        self::assertSame('StatTrak AWP | Asiimov (Field-Tested)', $statTrak->getMarketHashName());
        self::assertTrue($statTrak->isTradable());
        self::assertFalse($statTrak->isMarketable());
    }

    public function test_snapshot_from_array_returns_invalid_snapshot_for_private_inventory(): void
    {
        $snapshot = InventorySnapshot::fromArray(self::loadFixtureJson('inventory_private.json'));

        self::assertFalse($snapshot->isSuccess());
        self::assertTrue($snapshot->isEmpty());
        self::assertSame(0, $snapshot->getTotalCount());
        self::assertSame([], $snapshot->getItems());
    }

    public function test_fetch_reads_a_single_page_fixture(): void
    {
        $http = $this->makeHttp([
            new Response(200, [], self::loadFixture('inventory.json')),
        ]);

        $snapshot = (new InventoryClient($http))->fetch(self::STEAM_ID);

        self::assertTrue($snapshot->isSuccess());
        self::assertCount(3, $snapshot->getItems());
        self::assertSame(3, $snapshot->getTotalCount());

        $request = $http->lastRequest();

        self::assertNotNull($request);
        self::assertSame(
            'https://steamcommunity.com/inventory/'.self::STEAM_ID.'/730/2?l=english&count=2000',
            (string) $request->getUri(),
        );
    }

    public function test_fetch_paginates_using_last_assetid(): void
    {
        $pageOne = [
            'assets' => [
                ['assetid' => '210001', 'classid' => '310001', 'instanceid' => '0', 'amount' => '1'],
                ['assetid' => '210002', 'classid' => '310002', 'instanceid' => '0', 'amount' => '1'],
            ],
            'descriptions' => [
                ['classid' => '310001', 'instanceid' => '0', 'market_hash_name' => 'AWP | Asiimov (Field-Tested)', 'tradable' => 1, 'marketable' => 1],
                ['classid' => '310002', 'instanceid' => '0', 'market_hash_name' => 'Sticker | Titan (Holo)', 'tradable' => 0, 'marketable' => 0],
            ],
            'total_inventory_count' => 3,
            'success' => 1,
            'more_items' => 1,
            'last_assetid' => '210002',
        ];

        $pageTwo = [
            'assets' => [
                ['assetid' => '210003', 'classid' => '310003', 'instanceid' => '0', 'amount' => '1'],
            ],
            'descriptions' => [
                ['classid' => '310003', 'instanceid' => '0', 'market_hash_name' => 'Desert Eagle | Blaze (Factory New)', 'tradable' => 1, 'marketable' => 1],
            ],
            'total_inventory_count' => 3,
            'success' => 1,
        ];

        $http = $this->makeHttp([
            new Response(200, [], json_encode($pageOne, JSON_THROW_ON_ERROR)),
            new Response(200, [], json_encode($pageTwo, JSON_THROW_ON_ERROR)),
        ]);

        $snapshot = (new InventoryClient($http))->fetch(self::STEAM_ID);

        self::assertCount(3, $snapshot->getItems());
        self::assertSame(3, $snapshot->getTotalCount());
        self::assertSame('Desert Eagle | Blaze (Factory New)', $snapshot->getItems()[2]->getMarketHashName());

        self::assertCount(2, $http->requests);
        self::assertStringNotContainsString('start_assetid', (string) $http->requests[0]->getUri());
        self::assertStringContainsString('start_assetid=210002', (string) $http->requests[1]->getUri());
    }

    public function test_fetch_respects_max_items_and_stops_paginating(): void
    {
        $pageOne = [
            'assets' => [
                ['assetid' => '210001', 'classid' => '310001', 'instanceid' => '0', 'amount' => '1'],
                ['assetid' => '210002', 'classid' => '310002', 'instanceid' => '0', 'amount' => '1'],
            ],
            'descriptions' => [
                ['classid' => '310001', 'instanceid' => '0', 'market_hash_name' => 'AWP | Asiimov (Field-Tested)', 'tradable' => 1, 'marketable' => 1],
                ['classid' => '310002', 'instanceid' => '0', 'market_hash_name' => 'Sticker | Titan (Holo)', 'tradable' => 0, 'marketable' => 0],
            ],
            'total_inventory_count' => 3,
            'success' => 1,
            'more_items' => 1,
            'last_assetid' => '210002',
        ];

        $http = $this->makeHttp([
            new Response(200, [], json_encode($pageOne, JSON_THROW_ON_ERROR)),
        ]);

        $snapshot = (new InventoryClient($http))->fetch(self::STEAM_ID, maxItems: 2);

        self::assertCount(2, $snapshot->getItems());
        self::assertSame(3, $snapshot->getTotalCount()); // total reported by Steam is kept
        self::assertCount(1, $http->requests);           // no second page requested
    }

    public function test_fetch_returns_invalid_snapshot_for_private_inventory(): void
    {
        $http = $this->makeHttp([
            new Response(200, [], self::loadFixture('inventory_private.json')),
        ]);

        $snapshot = (new InventoryClient($http))->fetch(self::STEAM_ID);

        self::assertFalse($snapshot->isSuccess());
        self::assertTrue($snapshot->isEmpty());
        self::assertSame(0, $snapshot->getTotalCount());
    }

    public function test_fetch_returns_invalid_snapshot_on_http_failure(): void
    {
        $http = $this->makeHttp([
            new Response(500, [], ''),
            new Response(500, [], ''),
            new Response(500, [], ''),
        ]);

        $snapshot = (new InventoryClient($http))->fetch(self::STEAM_ID);

        self::assertFalse($snapshot->isSuccess());
        self::assertTrue($snapshot->isEmpty());
    }

    /**
     * @param  list<ResponseInterface|\Throwable>  $queue
     */
    private function makeHttp(array $queue): FakeRateLimitedHttpClient
    {
        return new FakeRateLimitedHttpClient(new MockHandler($queue));
    }
}
