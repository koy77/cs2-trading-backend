<?php

namespace App\Http\Controllers;

use App\Jobs\SyncSteamInventoryJob;
use App\Services\Market\MarketService;
use App\Support\PriceParser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /** Синк инвентаря текущего пользователя (live|fixture) — через очередь. */
    public function sync(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'mode' => 'nullable|in:real,live,fixture',
        ]);

        $account = $request->user()?->steamAccount;

        if ($account === null) {
            return response()->json(['error' => 'У пользователя нет Steam-аккаунта'], 422);
        }

        $mode = ($validated['mode'] ?? 'real') === 'fixture' ? 'fixture' : 'real';

        SyncSteamInventoryJob::dispatch($account->id, $mode)->onQueue('inventory.sync');

        return response()->json([
            'queued' => true,
            'mode' => $mode,
            'steam_id64' => $account->steam_id64,
        ], 202);
    }

    /** Цена Steam Market (кэш Redis; источник live|fixture|fallback). */
    public function price(Request $request, MarketService $market): JsonResponse
    {
        $hash = trim((string) $request->query('hash', ''));

        if ($hash === '') {
            return response()->json(['error' => 'Параметр hash обязателен'], 422);
        }

        $price = $market->price($hash);
        $price['lowest_cents'] = PriceParser::toCents($price['lowest']);

        return response()->json($price);
    }
}
