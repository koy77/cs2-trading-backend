<?php

namespace App\Console\Commands;

use App\Models\Payment;
use App\Models\User;
use App\Models\WebhookEvent;
use App\Services\Money\LedgerService;
use App\Services\Money\PspSigner;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

/**
 * Демо вебхуков PSP — через реальный HTTP на собственный /webhooks/psp.
 * Режимы: valid | dup (×10 одинаковых) | bad_sig | stale.
 */
class DemoWebhook extends Command
{
    protected $signature = 'demo:webhook {--mode=valid} {--user= : slug получателя} {--times=10}';

    protected $description = 'Отправить вебхуки PSP (valid|dup|bad_sig|stale) и показать эффект';

    public function handle(PspSigner $signer, LedgerService $ledger): int
    {
        $mode = (string) $this->option('mode');
        $user = $this->resolveUser();

        if ($user === null) {
            $this->error('Пользователь не найден (сиды не запущены?)');

            return self::FAILURE;
        }

        $self = rtrim((string) config('services.psp.self_url'), '/');
        $payment = null;

        if (in_array($mode, ['valid', 'dup'], true)) {
            $payment = Payment::query()->create([
                'user_id' => $user->id,
                'provider' => 'psp',
                'amount_cents' => 1000,
                'currency' => 'USD',
                'status' => Payment::STATUS_PENDING,
            ]);
        }

        $eventId = 'evt_demo_'.substr(md5((string) microtime(true)), 0, 10);
        $times = $mode === 'dup' ? max(2, (int) $this->option('times')) : 1;
        $rows = [];
        $balanceBefore = $ledger->userBalance($user->id);

        for ($attempt = 1; $attempt <= $times; $attempt++) {
            $payload = [
                'event' => 'payment.paid',
                'event_id' => $eventId,
                'payment_id' => $payment?->id,
                'status' => 'paid',
                'amount_cents' => 1000,
                'currency' => 'USD',
            ];

            $body = json_encode($payload, JSON_UNESCAPED_SLASHES) ?: '{}';
            $timestamp = (string) now()->getTimestamp();
            $signature = $signer->sign($body);

            if ($mode === 'bad_sig') {
                $signature = 'sha256='.str_repeat('0', 64);
            }

            if ($mode === 'stale') {
                $timestamp = (string) (now()->getTimestamp() - 3600);
            }

            try {
                $response = Http::timeout(15)
                    ->withHeaders([
                        'X-PSP-Signature' => $signature,
                        'X-PSP-Timestamp' => $timestamp,
                    ])
                    ->withBody($body, 'application/json')
                    ->post($self.'/webhooks/psp');

                $rows[] = [$attempt, $response->status(), mb_substr($response->body(), 0, 100)];
            } catch (\Throwable $e) {
                $this->error('HTTP-запрос не удался (приложение запущено? make up): '.$e->getMessage());

                return self::FAILURE;
            }
        }

        $this->table(['попытка', 'HTTP', 'ответ'], $rows);

        if ($payment !== null) {
            $this->info('Статус платежа: '.$payment->refresh()->status
                .'; записей webhook_events по event_id: '.WebhookEvent::query()->where('event_id', $eventId)->count());
        }

        $balanceAfter = $ledger->userBalance($user->id);

        $this->info('Баланс '.$user->slug.': '.number_format($balanceBefore / 100, 2).' $ → '.number_format($balanceAfter / 100, 2).' $');

        return self::SUCCESS;
    }

    private function resolveUser(): ?User
    {
        $slug = (string) ($this->option('user') ?: 'buyer');

        return User::query()->firstWhere('slug', $slug) ?? User::query()->first();
    }
}
