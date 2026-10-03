<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Событие аналитики (таблица events). Пишется через App\Support\EventLogger.
 *
 * @property Carbon|null $created_at
 */
class TrackedEvent extends Model
{
    protected $table = 'events';

    public $timestamps = false;

    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'meta' => 'array',
            'created_at' => 'datetime',
        ];
    }
}
