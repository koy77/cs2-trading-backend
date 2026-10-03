<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\MetricsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PspWebhookController;
use App\Http\Controllers\SteamAuthController;
use App\Http\Middleware\IdempotencyKey;
use Illuminate\Support\Facades\Route;

// Панель
Route::get('/', [PanelController::class, 'index'])->name('panel');
Route::get('/metrics', MetricsController::class)->name('metrics');

// Вход (Steam OpenID + демо-входы)
Route::get('/auth/steam/redirect', [SteamAuthController::class, 'redirect'])->name('steam.redirect');
Route::get('/auth/steam/callback', [SteamAuthController::class, 'callback'])->name('steam.callback');
Route::post('/auth/demo', [SteamAuthController::class, 'demo'])->name('auth.demo');
Route::post('/auth/logout', [SteamAuthController::class, 'logout'])->name('auth.logout');

// API панели (действия от текущего пользователя сессии)
Route::prefix('api')->group(function () {
    Route::get('/state', [PanelController::class, 'state']);

    Route::post('/inventory/sync', [InventoryController::class, 'sync']);
    Route::get('/price', [InventoryController::class, 'price']);
    Route::post('/listings', [ListingController::class, 'store']);

    Route::post('/orders', [OrderController::class, 'store'])->middleware(IdempotencyKey::class);
    Route::post('/orders/{order}/accept', [OrderController::class, 'accept']);
    Route::post('/orders/{order}/decline', [OrderController::class, 'decline']);
    Route::post('/orders/{order}/expire', [OrderController::class, 'expire']);

    Route::post('/payments/topup', [PaymentController::class, 'topup'])->middleware(IdempotencyKey::class);

    // Демо-кнопки (инъекции: гонка, вебхуки, очереди, режим PSP)
    Route::post('/demo/race', [DemoController::class, 'race']);
    Route::post('/demo/webhook', [DemoController::class, 'webhook']);
    Route::post('/demo/queue-poison', [DemoController::class, 'queuePoison']);
    Route::post('/demo/queue-replay', [DemoController::class, 'queueReplay']);
    Route::post('/demo/psp-mode', [DemoController::class, 'pspMode']);
});

// Вебхуки PSP (без сессии; аутентификация — HMAC)
Route::post('/webhooks/psp', [PspWebhookController::class, 'handle']);
