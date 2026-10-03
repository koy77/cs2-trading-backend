<?php

declare(strict_types=1);

namespace SteamSdk\Tests\Support;

use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected static function fixturePath(string $name): string
    {
        return __DIR__.'/../fixtures/'.$name;
    }

    protected static function loadFixture(string $name): string
    {
        $contents = file_get_contents(self::fixturePath($name));

        self::assertIsString($contents);

        return $contents;
    }

    /**
     * @return array<string, mixed>
     */
    protected static function loadFixtureJson(string $name): array
    {
        $decoded = json_decode(self::loadFixture($name), true, 512, JSON_THROW_ON_ERROR);

        self::assertIsArray($decoded);

        return $decoded;
    }
}
