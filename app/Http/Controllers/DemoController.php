<?php

namespace App\Http\Controllers;

use App\Jobs\PoisonJob;
use App\Services\Psp\PspClient;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class DemoController extends Controller
{
    /** Гонка: N параллельных покупок одного листинга (ровно один победитель). */
    public function race(Request $request): JsonResponse
    {
        set_time_limit(180);

        $attempts = min(100, max(1, (int) $request->input('attempts', 30)));

        $params = ['--attempts' => $attempts];

        if ($request->filled('listing_id')) {
            $params['--listing'] = (string) $request->input('listing_id');
        }

        Artisan::call('demo:race', $params);

        return response()->json(['output' => Artisan::output()]);
    }

    /** Вебхуки: valid | dup (×10) | bad_sig | stale. */
    public function webhook(Request $request): JsonResponse
    {
        $mode = (string) $request->input('mode', 'valid');

        if (! in_array($mode, ['valid', 'dup', 'bad_sig', 'stale'], true)) {
            return response()->json(['error' => 'Неизвестный режим'], 422);
        }

        Artisan::call('demo:webhook', ['--mode' => $mode]);

        return response()->json(['output' => Artisan::output()]);
    }

    /** Отравить очередь: первая доставка падает → failed_jobs («Разобрать failed» пройдёт успешно). */
    public function queuePoison(Request $request): JsonResponse
    {
        $jobs = min(10, max(1, (int) $request->input('jobs', 1)));

        for ($i = 0; $i < $jobs; $i++) {
            PoisonJob::dispatch((string) Str::uuid())->onQueue('orders.fulfill');
        }

        return response()->json(['queued' => $jobs]);
    }

    /** Вернуть failed-задачи в работу. */
    public function queueReplay(): JsonResponse
    {
        Artisan::call('queue:retry', ['id' => ['all']]);

        return response()->json(['output' => Artisan::output() ?: 'готово']);
    }

    /** Переключить режим mock-PSP: ok | timeout | http_500. */
    public function pspMode(Request $request, PspClient $psp): JsonResponse
    {
        $mode = (string) $request->input('mode', 'ok');

        if (! in_array($mode, ['ok', 'timeout', 'http_500'], true)) {
            return response()->json(['error' => 'Неизвестный режим'], 422);
        }

        return response()->json($psp->setMode($mode));
    }
}
