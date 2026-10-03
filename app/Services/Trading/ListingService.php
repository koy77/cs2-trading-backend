<?php

namespace App\Services\Trading;

use App\Exceptions\OrderConflictException;
use App\Models\InventoryItem;
use App\Models\Listing;
use App\Models\User;

class ListingService
{
    public function create(User $seller, InventoryItem $item, int $priceCents): Listing
    {
        $account = $item->steamAccount;

        if (! $item->isListable() || $account === null || $account->user_id !== $seller->id) {
            throw new OrderConflictException('Предмет нельзя выставить на продажу');
        }

        return Listing::query()->create([
            'inventory_item_id' => $item->id,
            'seller_id' => $seller->id,
            'price_cents' => $priceCents,
            'status' => Listing::STATUS_ACTIVE,
        ]);
    }

    public function cancel(User $seller, Listing $listing): Listing
    {
        if ($listing->seller_id !== $seller->id || $listing->status !== Listing::STATUS_ACTIVE) {
            throw new OrderConflictException('Листинг нельзя снять');
        }

        $listing->update(['status' => Listing::STATUS_CANCELLED]);
        InventoryItem::query()->whereKey($listing->inventory_item_id)->update(['status' => 'in_inventory']);

        return $listing;
    }
}
