<?php

namespace App\Http\Controllers;

use App\Services\Psp\PspWebhookService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PspWebhookController extends Controller
{
    /**
     * Вебхук PSP: подпись HMAC по raw body + окно timestamp + дедуп.
     * Без сессии/CSRF; аутентификация — подпись.
     */
    public function handle(Request $request, PspWebhookService $service): Response
    {
        $result = $service->handle(
            $request->getContent(),
            $request->header('X-PSP-Signature'),
            $request->header('X-PSP-Timestamp'),
        );

        return response()->json($result['body'], $result['status']);
    }
}
