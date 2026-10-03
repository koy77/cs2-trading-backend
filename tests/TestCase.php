<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        $this->forceTestEnvironment();

        parent::setUp();
    }

    /**
     * phpunit <env> не всегда доходит до Laravel Env (зависит от variables_order в php.ini —
     * во frankenphp-образе он пуст), поэтому фиксируем тестовое окружение явно ДО старта
     * приложения. Иначе тесты уходят в реальный RabbitMQ и в боевую БД (проверено — ловили).
     */
    private function forceTestEnvironment(): void
    {
        $vars = [
            'APP_ENV' => 'testing',
            'DB_CONNECTION' => 'mysql',
            'DB_DATABASE' => 'cs2_test',
            'QUEUE_CONNECTION' => 'sync',
            'CACHE_STORE' => 'redis',
            'SESSION_DRIVER' => 'array',
            'MAIL_MAILER' => 'array',
            'BROADCAST_CONNECTION' => 'null',
            'STEAM_PROVIDER' => 'fixture',
            'PSP_WEBHOOK_SECRET' => 'test-secret',
            'BCRYPT_ROUNDS' => '4',
        ];

        foreach ($vars as $key => $value) {
            $_ENV[$key] = $value;
            $_SERVER[$key] = $value;
            putenv("{$key}={$value}");
        }
    }
}
