# mock-psp — эмулятор внешнего платёжного провайдера

Мини-сервис без фреймворков: играет роль «внешнего PSP» для демо CS2-трейдинг-платформы.
Laravel-приложение инициирует платёж (`POST /api/charges`), а сервис синхронно отправляет
HMAC-подписанный колбэк `payment.paid` на `callback_url`. Режим отказа переключается из UI
(`POST /api/config`) — так демонстрируется отказоустойчивость платформы: таймаут провайдера,
500-я ошибка, повторный вебхук с тем же `event_id`.

Зависимости: только `php` (8.1+, проверено на 8.5) и стандартные расширения, включая `hash`
(входит в ядро). Curl-расширение не требуется — колбэк отправляется через `stream_context_create`.

## Запуск

Локально:

```sh
cd services/mock-psp
PSP_WEBHOOK_SECRET=dev-secret php -S 0.0.0.0:8081 index.php
```

Docker:

```sh
docker build -t mock-psp services/mock-psp
docker run --rm -p 8081:8081 -e PSP_WEBHOOK_SECRET=dev-secret mock-psp
```

Из Laravel-контейнера в docker-сети сервис доступен как `http://mock-psp:8081`.

## Переменные окружения

| Переменная | По умолчанию | Назначение |
|---|---|---|
| `PSP_WEBHOOK_SECRET` | `dev-secret` | Секрет для `X-PSP-Signature`. Читается на каждом запросе. |
| `STATE_DIR` | `/tmp` | Каталог файла состояния `<STATE_DIR>/mock_psp_mode`. |

## Эндпоинты

| Метод и путь | Вход | Ответ |
|---|---|---|
| `GET /api/health` | — | `200 {"ok":true,"mode":"<текущий>"}` |
| `GET /api/mode` | — | `200 {"mode":"ok\|timeout\|http_500"}` |
| `POST /api/config` | `{"mode":"ok\|timeout\|http_500"}` | `200 {"ok":true,"mode":"..."}`; `400 invalid_mode` |
| `POST /api/charges` | `{payment_id, amount_cents, currency?, callback_url, event_id?}` | см. режимы ниже |

Режимы `POST /api/charges`:

- **ok** — сразу (синхронно) отправляет подписанный колбэк на `callback_url`, отвечает `200 {"sent":true}`;
- **timeout** — ждёт 8 секунд, колбэк не отправляет, отвечает `200 {"sent":false,"reason":"timeout"}`;
- **http_500** — отвечает `500 {"error":"provider_unavailable"}`.

Базовая валидация: без `payment_id` / `amount_cents` / корректного `callback_url` (http/https) —
`400 {"error":"validation_failed","fields":[...]}`. Все ответы — `Content-Type: application/json`.

## Контракт колбэка

`POST` на `callback_url`, тело:

```json
{
  "event": "payment.paid",
  "event_id": "evt_...",
  "payment_id": "pay_123",
  "status": "paid",
  "amount_cents": 4999,
  "currency": "USD"
}
```

Заголовки:

- `X-PSP-Timestamp: <unixtime>`
- `X-PSP-Signature: sha256=<hex(hmac_sha256(raw_body, PSP_WEBHOOK_SECRET))>`

`event_id` — присланный в `/api/charges` или сгенерированный (`evt_<uniqid>`); повторная отправка
с тем же `event_id` эмулирует реплей вебхука.

Проверка подписи на стороне получателя:

```php
$rawBody  = file_get_contents('php://input');
$expected = 'sha256=' . hash_hmac('sha256', $rawBody, getenv('PSP_WEBHOOK_SECRET') ?: 'dev-secret');
$ok = hash_equals($expected, $_SERVER['HTTP_X_PSP_SIGNATURE'] ?? '');
```

## Примеры curl

```sh
# health / текущий режим
curl -s http://127.0.0.1:8081/api/health
# {"ok":true,"mode":"ok"}

# переключить режим отказа (так это делает UI)
curl -s -X POST http://127.0.0.1:8081/api/config \
  -H 'Content-Type: application/json' -d '{"mode":"timeout"}'
# {"ok":true,"mode":"timeout"}

# инициировать платёж; в режиме ok колбэк уйдёт на callback_url
curl -s -X POST http://127.0.0.1:8081/api/charges \
  -H 'Content-Type: application/json' \
  -d '{
        "payment_id": "pay_123",
        "amount_cents": 4999,
        "currency": "USD",
        "callback_url": "http://laravel-app:8090/webhooks/psp",
        "event_id": "evt_demo_replay_1"
      }'
# ok:       {"sent":true}
# timeout:  {"sent":false,"reason":"timeout"}  (ответ через ~8 c)
# http_500: 500 {"error":"provider_unavailable"}
```

## Smoke-тест

```sh
bash services/mock-psp/smoke-test.sh
```

Поднимает сам сервис (`php -S`, порт 8099) и sink-сервер (порт 8100), прогоняет сценарии
health / смена режимов / ok+подпись / timeout / http_500 и проверяет HMAC пересчётом.
Порты переопределяются: `MOCK_PORT=8099 SINK_PORT=8100 bash smoke-test.sh`; `KEEP=1` сохраняет
рабочий каталог с логами и записанными колбэками. Docker не нужен.
