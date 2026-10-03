<?php

namespace App\Events;

use App\Models\SteamAccount;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class InventorySynced
{
    use Dispatchable;
    use SerializesModels;

    public function __construct(public SteamAccount $account) {}
}
