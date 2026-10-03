<?php

use PhpAmqpLib\Connection\AMQPLazyConnection;
use VladimirYuldashev\LaravelQueueRabbitMQ\Queue\Jobs\RabbitMQJob;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Queue Connection Name
    |--------------------------------------------------------------------------
    */

    'default' => env('QUEUE_CONNECTION', 'rabbitmq'),

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
    | Драйверы: "sync", "database", "rabbitmq", "redis", "deferred", "background",
    | "failover", "null"
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'connection' => env('DB_QUEUE_CONNECTION'),
            'table' => env('DB_QUEUE_TABLE', 'jobs'),
            'queue' => env('DB_QUEUE', 'default'),
            'retry_after' => (int) env('DB_QUEUE_RETRY_AFTER', 90),
            'after_commit' => false,
        ],

        // RabbitMQ (пакет vladimir-yuldashev/laravel-queue-rabbitmq).
        // 5 очередей приложения: inventory.sync, prices.refresh, orders.fulfill,
        // trades.poll, webhooks.out. Отрава после retries уходит в failed_jobs
        // (наблюдение/реплей — make queue-replay); DLX можно включить в options.
        'rabbitmq' => [
            'driver' => 'rabbitmq',
            'queue' => env('RABBITMQ_QUEUE', 'default'),
            'connection' => AMQPLazyConnection::class,

            'hosts' => [
                [
                    'host' => env('RABBITMQ_HOST', '127.0.0.1'),
                    'port' => env('RABBITMQ_PORT', 5672),
                    'user' => env('RABBITMQ_USER', 'guest'),
                    'password' => env('RABBITMQ_PASSWORD', 'guest'),
                    'vhost' => env('RABBITMQ_VHOST', '/'),
                ],
            ],

            'options' => [
                'ssl_options' => [
                    'cafile' => env('RABBITMQ_SSL_CAFILE'),
                    'local_cert' => env('RABBITMQ_SSL_LOCALCERT'),
                    'local_key' => env('RABBITMQ_SSL_LOCALKEY'),
                    'verify_peer' => env('RABBITMQ_SSL_VERIFY_PEER', true),
                    'passphrase' => env('RABBITMQ_SSL_PASSPHRASE'),
                ],
                'queue' => [
                    'job' => RabbitMQJob::class,
                ],
            ],

            // 'horizon' => false,
            'worker' => env('RABBITMQ_WORKER', 'default'),
            'after_commit' => false,
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => env('REDIS_QUEUE_CONNECTION', 'default'),
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => (int) env('REDIS_QUEUE_RETRY_AFTER', 90),
            'block_for' => null,
            'after_commit' => false,
        ],

        'deferred' => [
            'driver' => 'deferred',
        ],

        'background' => [
            'driver' => 'background',
        ],

        'failover' => [
            'driver' => 'failover',
            'connections' => [
                'database',
                'deferred',
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Job Batching
    |--------------------------------------------------------------------------
    */

    'batching' => [
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'job_batches',
    ],

    /*
    |--------------------------------------------------------------------------
    | Failed Queue Jobs
    |--------------------------------------------------------------------------
    */

    'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'failed_jobs',
    ],

];
