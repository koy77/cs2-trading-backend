<?php

namespace App\Services\Psp;

use App\Models\Payment;
use App\Models\WebhookEvent;
use App\Services\Money\LedgerService;
use App\Services\Money\PspSigner;
use App\Support\EventLogger;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Support\Facades\DB;

/**
 * Обработка вебхуков PSP: HMAC-подпись, окно timestamp, дедуп по (provider, event_id).
 * Повторная доставка безопасна (идемпотентно).
 */
class PspWebhookService
{
    public const PROVIDER = 'psp';

    public function __construct(
        private readonly PspSigner $signer,
        private readonly LedgerService $ledger,
        private readonly EventLogger $events,
    ) {}

    /**
     * @return array{status: int, body: array<string, mixed>}
     */
    public function handle(string $rawBody, ?string $signature, ?string $timestamp): array
    {
        $check = $this->signer->verify($rawBody, $signature, $timestamp);

        if (! $check['ok']) {
            $this->events->log('webhook.rejected', null, null, null, ['error' => $check['error']]);

            return ['status' => 401, 'body' => ['error' => $check['error']]];
        }

        $payload = json_decode($rawBody, true);

        if (! is_array($payload) || empty($payload['event_id'])) {
            return ['status' => 422, 'body' => ['error' => 'invalid_payload']];
        }

        try {
            $event = WebhookEvent::query()->create([
                'provider' => self::PROVIDER,
                'event_id' => (string) $payload['event_id'],
                'payload' => $payload,
                'status' => 'processed',
            ]);
        } catch (UniqueConstraintViolationException) {
            // Дедуп: этот event_id уже обработан (или обрабатывается прямо сейчас).
            $this->events->log('webhook.duplicate', null, null, null, ['event_id' => $payload['event_id']]);

            return ['status' => 200, 'body' => ['ok' => true, 'duplicate' => true]];
        }

        if (($payload['event'] ?? '') === 'payment.paid') {
            $this->applyPaidPayment($payload);
        }

        $event->update(['processed_at' => now()]);

        return ['status' => 200, 'body' => ['ok' => true]];
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    private function applyPaidPayment(array $payload): void
    {
        $payment = Payment::query()->find((int) ($payload['payment_id'] ?? 0));

        if ($payment === null || $payment->status === Payment::STATUS_PAID) {
            return;
        }

        DB::transaction(function () use ($payment, $payload) {
            $payment->update([
                'status' => Payment::STATUS_PAID,
                'paid_at' => now(),
                'external_id' => $payload['external_id'] ?? $payment->external_id,
            ]);

            $this->ledger->post([
                'psp:clearing' => -$payment->amount_cents,
                "user:{$payment->user_id}" => $payment->amount_cents,
            ], 'payment', $payment->id, 'Пополнение баланса через PSP');
        });
    }
}
