<?php

namespace App\Jobs;

use App\Models\Order;
use App\Services\Money\PspSigner;
use App\Support\EventLogger;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Http;

/**
 * Исходящий postback (очередь webhooks.out): уведомляем PSP/партнёра о завершении сделки.
 * Подписывается HMAC; ретраи с backoff (очередь), после — failed_jobs.
 */
class SendPostbackJob implements ShouldQueue
{
    use Queueable;

    public int $tries = 5;

    public function __construct(public readonly int $orderId) {}

    /** @return array<int, int> */
    public function backoff(): array
    {
        return [5, 15, 45, 120, 300];
    }

    public function handle(PspSigner $signer, EventLogger $events): void
    {
        $order = Order::query()->findOrFail($this->orderId);

        $payload = [
            'event' => 'order.fulfilled',
            'order_id' => $order->id,
            'price_cents' => $order->price_cents,
            'fee_cents' => $order->fee_cents,
            'seller_id' => $order->seller_id,
            'buyer_id' => $order->buyer_id,
        ];

        $body = json_encode($payload, JSON_UNESCAPED_SLASHES) ?: '{}';
        $url = rtrim((string) config('services.psp.base_url'), '/').'/api/postback';

        $response = Http::timeout(10)
            ->withHeaders([
                'X-PSP-Timestamp' => (string) now()->getTimestamp(),
                'X-PSP-Signature' => $signer->sign($body),
            ])
            ->withBody($body, 'application/json')
            ->post($url);

        if (! $response->successful()) {
            throw new \RuntimeException("Postback failed: HTTP {$response->status()}");
        }

        $events->log('postback.sent', null, 'order', $order->id, ['url' => $url]);
    }
}
