<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Витрина для perf-теста (make perf). В домене не используется.
 */
class PerfListing extends Model
{
    protected $table = 'perf_listings';

    public $timestamps = false;

    protected $guarded = [];
}
