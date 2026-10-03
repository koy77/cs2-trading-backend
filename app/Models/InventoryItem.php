<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InventoryItem extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'tradable' => 'boolean',
            'marketable' => 'boolean',
        ];
    }

    /** @return BelongsTo<SteamAccount, $this> */
    public function steamAccount(): BelongsTo
    {
        return $this->belongsTo(SteamAccount::class);
    }

    /** Можно выставить на продажу: лежит в инвентаре и tradable. */
    public function isListable(): bool
    {
        return $this->tradable && $this->status === 'in_inventory';
    }
}
