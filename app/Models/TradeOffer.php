<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TradeOffer extends Model
{
    public const STATE_CREATED = 'created';

    public const STATE_SENT = 'sent';

    public const STATE_ACCEPTED = 'accepted';

    public const STATE_DECLINED = 'declined';

    public const STATE_EXPIRED = 'expired';

    public const FINAL_STATES = [self::STATE_ACCEPTED, self::STATE_DECLINED, self::STATE_EXPIRED];

    protected $guarded = [];

    /** @return BelongsTo<Order, $this> */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function isFinal(): bool
    {
        return in_array($this->state, self::FINAL_STATES, true);
    }
}
