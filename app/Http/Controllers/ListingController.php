<?php

namespace App\Http\Controllers;

use App\Exceptions\OrderConflictException;
use App\Http\Requests\CreateListingRequest;
use App\Models\InventoryItem;
use App\Services\Trading\ListingService;
use Illuminate\Http\JsonResponse;

class ListingController extends Controller
{
    public function store(CreateListingRequest $request, ListingService $listings): JsonResponse
    {
        $seller = $request->user();

        if ($seller === null) {
            abort(401, 'Требуется вход');
        }

        $item = InventoryItem::query()->with('steamAccount')
            ->findOrFail((int) $request->validated('inventory_item_id'));

        try {
            $listing = $listings->create($seller, $item, (int) $request->validated('price_cents'));
        } catch (OrderConflictException $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }

        return response()->json([
            'listing' => [
                'id' => $listing->id,
                'price_cents' => $listing->price_cents,
                'status' => $listing->status,
            ],
        ], 201);
    }
}
