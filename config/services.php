<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Steam (без API-ключей)
    |--------------------------------------------------------------------------
    */

    'steam' => [
        // real — живые запросы (с троттлингом); fixture — слепки реальных профилей
        'provider' => env('STEAM_PROVIDER', 'real'),
        // минимальный интервал между внешними запросами (сек), общий для web+workers (Redis-гейт)
        'min_interval' => (float) env('STEAM_HTTP_MIN_INTERVAL', 1.0),
        // TTL кэша цен Steam Market (сек)
        'price_cache_ttl' => (int) env('STEAM_PRICE_CACHE_TTL', 180),
        'fixtures_path' => env('STEAM_FIXTURES_PATH', 'database/fixtures/steam'),
        'demo_profile' => env('STEAM_DEMO_PROFILE', '76561199104360494'),
    ],

    /*
    |--------------------------------------------------------------------------
    | PSP (mock-psp сервис)
    |--------------------------------------------------------------------------
    */

    'rabbitmq' => [
        // management API (панель статусов + метрики очередей)
        'management_url' => env('RABBITMQ_MGMT_URL', 'http://rabbitmq:15672'),
        'user' => env('RABBITMQ_USER', 'cs2'),
        'password' => env('RABBITMQ_PASSWORD', 'secret'),
    ],

    'psp' => [
        'base_url' => env('PSP_BASE_URL', 'http://mock-psp:8081'),
        // URL, по которому mock-PSP стучит в наш вебхук (изнутри docker-сети)
        'callback_url' => env('PSP_CALLBACK_URL', 'http://app:8080/webhooks/psp'),
        // URL приложения «самого для себя» (демо-команды шлют реальные HTTP-запросы)
        'self_url' => env('PSP_SELF_URL', 'http://localhost:8080'),
        'secret' => env('PSP_WEBHOOK_SECRET', 'dev-secret'),
        // окно допуска timestamp у вебхука (сек)
        'window' => (int) env('PSP_WEBHOOK_WINDOW', 300),
        // базовая комиссия платформы (в сотых процента: 300 = 3.00%)
        'fee_default' => (int) env('PLATFORM_FEE_DEFAULT', 300),
    ],

];
