<?php

namespace App\Http\Controllers;

use App\Http\Requests\TopupRequest;
use App\Models\Payment;
use App\Services\Money\LedgerService;
use App\Services\Psp\PspClient;
use Illuminate\Http\JsonResponse;
use Throwable;

class PaymentController extends Controller
{
    /** Пополнение баланса: создаём платёж и просим PSP провести списание. */
    public function topup(TopupRequest $request, PspClient $psp, LedgerService $ledger): JsonResponse
    {
        $user = $request->user();

        if ($user === null) {
            abort(401, 'Требуется вход');
        }

        $amount = (int) $request->validated('amount_cents');

        $payment = Payment::query()->create([
            'user_id' => $user->id,
            'provider' => 'psp',
            'amount_cents' => $amount,
            'currency' => 'USD',
            'status' => Payment::STATUS_PENDING,
            'idempotency_key' => $request->header('Idempotency-Key'),
        ]);

        try {
            $result = $psp->createCharge($payment, $this->callbackUrl());
        } catch (Throwable $e) {
            $payment->update(['status' => Payment::STATUS_FAILED]);

            return response()->json([
                'error' => 'psp_unreachable',
                'details' => $e->getMessage(),
                'payment_id' => $payment->id,
            ], 502);
        }

        if (($result['sent'] ?? false) !== true) {
            // timeout: платёж остаётся pending, колбэк не придёт (демо отказа PSP)
            return response()->json([
                'paid' => false,
                'reason' => $result['reason'] ?? 'unknown',
                'payment_id' => $payment->id,
            ], 202);
        }

        return response()->json([
            'paid' => true,
            'payment_id' => $payment->id,
            'payment_status' => $payment->refresh()->status,
            'balance_cents' => $ledger->userBalance($user->id),
        ]);
    }

    private function callbackUrl(): string
    {
        return (string) config('services.psp.callback_url', 'http://app:8080/webhooks/psp');
    }
}
