<?php

namespace App\Http\Controllers;

use App\Models\InventoryItem;
use App\Models\Listing;
use App\Models\Order;
use App\Models\User;
use App\Support\SystemStatus;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class MetricsController extends Controller
{
    /** Prometheus-метрики (profiles: monitoring). */
    public function __invoke(SystemStatus $status): Response
    {
        $lines = Cache::remember('metrics:main', 5, function () {
            $out = [];

            foreach (DB::table('orders')->selectRaw('status, count(*) as c')->groupBy('status')->get() as $row) {
                $out[] = sprintf('cs2_orders_total{status="%s"} %d', $row->status, $row->c);
            }

            $out[] = 'cs2_listings_active '.Listing::query()->where('status', Listing::STATUS_ACTIVE)->count();
            $out[] = 'cs2_users_total '.User::query()->count();
            $out[] = 'cs2_inventory_items_total '.InventoryItem::query()->where('status', 'in_inventory')->count();
            $out[] = 'cs2_gmv_cents_total '.(int) Order::query()->where('status', Order::STATUS_FULFILLED)->sum('price_cents');
            $out[] = 'cs2_fees_cents_total '.(int) Order::query()->where('status', Order::STATUS_FULFILLED)->sum('fee_cents');

            return $out;
        });

        $body = implode("\n", $lines)."\n";

        foreach ($status->queues() as $name => $depth) {
            $body .= "cs2_queue_messages{queue=\"{$name}\"} {$depth}\n";
        }

        return response($body, 200, ['Content-Type' => 'text/plain; version=0.0.4']);
    }
}
