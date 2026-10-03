<?php

namespace App\Http\Middleware;

use App\Models\IdempotencyKey as IdempotencyKeyModel;
use Closure;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Idempotency-Key: повторный запрос с тем же ключом возвращает сохранённый ответ.
 * Уникальность (user_id, route, key) гарантирует корректность и при гонке.
 */
class IdempotencyKey
{
    public function handle(Request $request, Closure $next): Response
    {
        $key = $request->header('Idempotency-Key');
        $user = $request->user();

        if ($key === null || $key === '' || $user === null) {
            return $next($request);
        }

        $route = $request->path();

        $existing = IdempotencyKeyModel::query()
            ->where('user_id', $user->id)
            ->where('route', $route)
            ->where('key', $key)
            ->first();

        if ($existing !== null) {
            return $this->replay($existing->response_status, $existing->response_body);
        }

        $response = $next($request);

        if ($response->getStatusCode() < 500) {
            try {
                IdempotencyKeyModel::query()->create([
                    'key' => $key,
                    'user_id' => $user->id,
                    'route' => $route,
                    'request_hash' => hash('sha256', $request->getContent()),
                    'response_status' => $response->getStatusCode(),
                    'response_body' => $response->getContent() ?: null,
                ]);
            } catch (UniqueConstraintViolationException) {
                // Параллельный запрос с тем же ключом уже сохранил ответ — воспроизводим его.
                $stored = IdempotencyKeyModel::query()
                    ->where('user_id', $user->id)
                    ->where('route', $route)
                    ->where('key', $key)
                    ->first();

                if ($stored !== null) {
                    return $this->replay($stored->response_status, $stored->response_body);
                }
            }
        }

        $response->headers->set('Idempotency-Key', (string) $key);

        return $response;
    }

    private function replay(int $status, ?string $body): Response
    {
        return response($body ?? '', $status, ['Idempotent-Replay' => 'true']);
    }
}
