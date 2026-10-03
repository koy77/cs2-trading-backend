<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['slug', 'name', 'email', 'email_verified_at', 'password', 'is_demo'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory;

    use Notifiable;

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_demo' => 'boolean',
        ];
    }

    /** @return HasOne<SteamAccount, $this> */
    public function steamAccount(): HasOne
    {
        return $this->hasOne(SteamAccount::class);
    }

    /** @return HasManyThrough<InventoryItem, SteamAccount, $this> */
    public function inventoryItems(): HasManyThrough
    {
        return $this->hasManyThrough(InventoryItem::class, SteamAccount::class);
    }

    /** @return HasMany<Listing, $this> */
    public function listings(): HasMany
    {
        return $this->hasMany(Listing::class, 'seller_id');
    }

    /** @return HasMany<Order, $this> */
    public function purchases(): HasMany
    {
        return $this->hasMany(Order::class, 'buyer_id');
    }

    /** @return HasMany<Order, $this> */
    public function sales(): HasMany
    {
        return $this->hasMany(Order::class, 'seller_id');
    }
}
