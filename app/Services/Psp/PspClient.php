<?php

namespace App\Services\Psp;

use App\Models\Payment;
use Illuminate\Support\Facades\Http;

/**
 * Клиент к внешнему PSP (в демо — сервис mock-psp).
 */
class PspClient
{
    private function baseUrl(): string
    {
        return (string) config('services.psp.base_url');
    }

    /**
     * @return array<string, mixed>
     */
    public function createCharge(Payment $payment, string $callbackUrl, ?string $eventId = null): array
    {
        $response = Http::timeout(15)
            ->acceptJson()
            ->post($this->baseUrl().'/api/charges', array_filter([
                'payment_id' => $payment->id,
                'amount_cents' => $payment->amount_cents,
                'currency' => $payment->currency,
                'callback_url' => $callbackUrl,
                'event_id' => $eventId,
            ]));

        return $response->json() ?? [];
    }

    /**
     * @return array<string, mixed>
     */
    public function setMode(string $mode): array
    {
        $response = Http::timeout(10)
            ->acceptJson()
            ->post($this->baseUrl().'/api/config', ['mode' => $mode]);

        return $response->json() ?? [];
    }

    /**
     * @return array<string, mixed>|null
     */
    public function health(): ?array
    {
        try {
            $response = Http::timeout(3)->acceptJson()->get($this->baseUrl().'/api/health');

            return $response->successful() ? ($response->json() ?? []) : null;
        } catch (\Throwable) {
            return null;
        }
    }
}
