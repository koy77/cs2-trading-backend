<?php

namespace App\Http\Controllers;

use App\Models\InventoryItem;
use App\Models\Listing;
use App\Models\Order;
use App\Models\User;
use App\Services\Money\LedgerService;
use App\Support\EventLogger;
use App\Support\SystemStatus;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PanelController extends Controller
{
    /** Единая страница панели (всё кнопками). */
    public function index(): View
    {
        return view('panel');
    }

    /** Состояние для поллинга: пользователи, балансы, инвентарь, листинги, заказы, журнал. */
    public function state(Request $request, SystemStatus $status, LedgerService $ledger, EventLogger $events): JsonResponse
    {
        $user = $request->user();

        return response()->json([
            'user' => $user ? ['id' => $user->id, 'slug' => $user->slug, 'name' => $user->name] : null,
            'users' => User::query()->orderBy('id')->get(['id', 'slug', 'name'])->toArray(),
            'status' => $status->snapshot(),
            'steam' => $this->steamBlock($user),
            'balances' => [
                'self' => $user ? $ledger->userBalance($user->id) : 0,
                'escrow' => $ledger->balance('platform:escrow'),
                'fees' => $ledger->balance('platform:fees'),
                'psp_clearing' => $ledger->balance('psp:clearing'),
            ],
            'inventory' => $this->inventoryBlock($user),
            'listings' => $this->listingsBlock($user),
            'orders' => $this->ordersBlock($user),
            'ledger' => $ledger->recent(12)->map(fn ($e) => [
                'id' => $e->id,
                'account' => $e->account,
                'amount_cents' => $e->amount_cents,
                'description' => $e->description,
                'at' => $e->created_at?->toIso8601String(),
            ])->toArray(),
            'events' => $events->recent(20)->map(fn ($e) => [
                'id' => $e->id,
                'type' => $e->type,
                'meta' => $e->meta,
                'at' => $e->created_at?->toIso8601String(),
            ])->toArray(),
        ]);
    }

    /**
     * @return array<string, mixed>|null
     */
    private function steamBlock(?User $user): ?array
    {
        $account = $user?->steamAccount;

        return $account ? [
            'steam_id64' => $account->steam_id64,
            'persona_name' => $account->persona_name,
            'last_sync_at' => $account->last_sync_at?->toIso8601String(),
            'fixture_available' => is_file(base_path((string) config('services.steam.fixtures_path'))."/inventory-{$account->steam_id64}.json"),
        ] : null;
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function inventoryBlock(?User $user): array
    {
        if ($user === null) {
            return [];
        }

        return $user->inventoryItems()
            ->orderBy('market_hash_name')
            ->limit(150)
            ->get()
            ->map(fn (InventoryItem $item) => [
                'id' => $item->id,
                'market_hash_name' => $item->market_hash_name,
                'tradable' => $item->tradable,
                'marketable' => $item->marketable,
                'status' => $item->status,
                'icon_url' => $item->icon_url,
                'listable' => $item->isListable(),
            ])->toArray();
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function listingsBlock(?User $user): array
    {
        return Listing::query()
            ->with(['seller:id,slug', 'buyer:id,slug', 'inventoryItem:id,market_hash_name,icon_url'])
            ->whereIn('status', [Listing::STATUS_ACTIVE, Listing::STATUS_RESERVED])
            ->orderByDesc('id')
            ->limit(40)
            ->get()
            ->map(fn (Listing $l) => [
                'id' => $l->id,
                'market_hash_name' => $l->inventoryItem?->market_hash_name,
                'icon_url' => $l->inventoryItem?->icon_url,
                'price_cents' => $l->price_cents,
                'status' => $l->status,
                'seller' => $l->seller?->slug,
                'buyer' => $l->buyer?->slug,
                'mine' => $user !== null && $l->seller_id === $user->id,
                'can_buy' => $user !== null
                    && $l->status === Listing::STATUS_ACTIVE
                    && $l->seller_id !== $user->id,
            ])->toArray();
    }

    /**
     * @return array{purchases: array<int, array<string, mixed>>, sales: array<int, array<string, mixed>>}
     */
    private function ordersBlock(?User $user): array
    {
        if ($user === null) {
            return ['purchases' => [], 'sales' => []];
        }

        $map = fn (Order $o) => [
            'id' => $o->id,
            'listing_id' => $o->listing_id,
            'market_hash_name' => $o->listing?->inventoryItem?->market_hash_name,
            'price_cents' => $o->price_cents,
            'fee_cents' => $o->fee_cents,
            'fee_variant' => $o->fee_variant,
            'status' => $o->status,
            'offer_state' => $o->offer?->state,
            'buyer' => $o->buyer?->slug,
            'seller' => $o->seller?->slug,
        ];

        return [
            'purchases' => $user->purchases()->with(['listing.inventoryItem:id,market_hash_name', 'offer', 'buyer:id,slug', 'seller:id,slug'])
                ->orderByDesc('id')->limit(10)->get()->map($map)->toArray(),
            'sales' => $user->sales()->with(['listing.inventoryItem:id,market_hash_name', 'offer', 'buyer:id,slug', 'seller:id,slug'])
                ->orderByDesc('id')->limit(10)->get()->map($map)->toArray(),
        ];
    }
}
