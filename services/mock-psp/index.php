<?php

/**
 * mock-psp — эмулятор внешнего платёжного провайдера (PSP).
 *
 * Часть демо CS2-трейдинг-платформы: Laravel-приложение обращается к сервису
 * как к «внешнему PSP». Режим отказа переключается из UI через POST /api/config
 * для демонстрации отказоустойчивости (ok / timeout / http_500).
 *
 * Режимы (хранятся в файле <STATE_DIR>/mock_psp_mode, по умолчанию /tmp/mock_psp_mode):
 *   ok       — колбэк payment.paid уходит на callback_url сразу и синхронно;
 *   timeout  — запрос «висит» PSP_TIMEOUT_SECONDS секунд, колбэк не отправляется;
 *   http_500 — провайдер недоступен: HTTP 500 {"error":"provider_unavailable"}.
 *
 * Колбэк (POST на callback_url, Content-Type: application/json):
 *   тело:      {"event":"payment.paid","event_id":"evt_...","payment_id":...,
 *               "status":"paid","amount_cents":...,"currency":"USD"}
 *   заголовки: X-PSP-Timestamp: <unixtime>
 *              X-PSP-Signature: sha256=<hex(hmac_sha256(raw_body, PSP_WEBHOOK_SECRET))>
 *
 * Переменные окружения:
 *   PSP_WEBHOOK_SECRET — секрет подписи (по умолчанию dev-secret);
 *   STATE_DIR          — каталог файла состояния (по умолчанию /tmp).
 *
 * Зависимости: только стандартные расширения PHP (json/standard; hash входит в ядро).
 * Запуск: php -S 0.0.0.0:8081 index.php
 */

declare(strict_types=1);

const PSP_MODES = ['ok', 'timeout', 'http_500'];
const PSP_DEFAULT_MODE = 'ok';
const PSP_TIMEOUT_SECONDS = 8;
const PSP_CALLBACK_TIMEOUT_SECONDS = 5;

/* ------------------------------- ответы ------------------------------- */

function encodeJson(array $payload): string
{
    $json = json_encode(
        $payload,
        JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_INVALID_UTF8_SUBSTITUTE
    );

    return $json === false ? '{}' : $json;
}

/** Отправляет JSON-ответ и завершает скрипт. */
function respond(int $status, array $payload): void
{
    http_response_code($status);
    header('Content-Type: application/json; charset=utf-8');
    echo encodeJson($payload);
    exit;
}

/** Отправляет JSON-ошибку и завершает скрипт. */
function fail(int $status, string $error, array $extra = []): void
{
    respond($status, array_merge(['error' => $error], $extra));
}

function methodNotAllowed(array $allowed): void
{
    header('Allow: '.implode(', ', $allowed));
    fail(405, 'method_not_allowed', ['allowed' => $allowed]);
}

/* --------------------------- состояние (режим) --------------------------- */

function stateDir(): string
{
    $dir = getenv('STATE_DIR');
    if (! is_string($dir) || $dir === '') {
        return '/tmp';
    }

    return rtrim($dir, '/') ?: '/';
}

function modeFile(): string
{
    return stateDir().'/mock_psp_mode';
}

function currentMode(): string
{
    $raw = @file_get_contents(modeFile());
    if ($raw === false) {
        return PSP_DEFAULT_MODE;
    }
    $mode = trim($raw);

    return in_array($mode, PSP_MODES, true) ? $mode : PSP_DEFAULT_MODE;
}

function storeMode(string $mode): bool
{
    return @file_put_contents(modeFile(), $mode, LOCK_EX) !== false;
}

function webhookSecret(): string
{
    $secret = getenv('PSP_WEBHOOK_SECRET');

    return (is_string($secret) && $secret !== '') ? $secret : 'dev-secret';
}

/* -------------------------------- вход -------------------------------- */

/** @return array|null null — тело не является JSON-объектом/массивом. */
function jsonInput(): ?array
{
    $raw = file_get_contents('php://input');
    if ($raw === false || trim($raw) === '') {
        return [];
    }
    $data = json_decode($raw, true);

    return is_array($data) ? $data : null;
}

function isValidHttpUrl(string $url): bool
{
    if (filter_var($url, FILTER_VALIDATE_URL) === false) {
        return false;
    }
    $scheme = strtolower((string) parse_url($url, PHP_URL_SCHEME));
    $host = parse_url($url, PHP_URL_HOST);

    return in_array($scheme, ['http', 'https'], true) && is_string($host) && $host !== '';
}

/**
 * Базовая валидация тела POST /api/charges.
 *
 * @return array{0: string[], 1: array} [список невалидных полей, нормализованные поля]
 */
function validateCharge(array $data): array
{
    $errors = [];

    $paymentId = $data['payment_id'] ?? null;
    if ((! is_string($paymentId) && ! is_int($paymentId)) || (string) $paymentId === '') {
        $errors[] = 'payment_id';
    }

    $amountCents = $data['amount_cents'] ?? null;
    if (is_string($amountCents) && ctype_digit($amountCents)) {
        $amountCents = (int) $amountCents;
    }
    if (! is_int($amountCents) || $amountCents < 0) {
        $errors[] = 'amount_cents';
        $amountCents = null;
    }

    $callbackUrl = $data['callback_url'] ?? null;
    if (! is_string($callbackUrl) || ! isValidHttpUrl($callbackUrl)) {
        $errors[] = 'callback_url';
    }

    $currency = $data['currency'] ?? 'USD';
    if (! is_string($currency) || $currency === '') {
        $errors[] = 'currency';
    }

    $eventId = $data['event_id'] ?? null;
    if ($eventId !== null && (! is_string($eventId) || $eventId === '')) {
        $errors[] = 'event_id';
    }

    return [$errors, [
        'payment_id' => $paymentId,
        'amount_cents' => $amountCents,
        'callback_url' => $callbackUrl,
        'currency' => $currency,
        'event_id' => $eventId,
    ]];
}

/* ------------------------------- колбэк ------------------------------- */

function buildCallbackEvent(array $charge): array
{
    return [
        'event' => 'payment.paid',
        'event_id' => $charge['event_id'] ?? ('evt_'.uniqid()),
        'payment_id' => $charge['payment_id'],
        'status' => 'paid',
        'amount_cents' => $charge['amount_cents'],
        'currency' => $charge['currency'],
    ];
}

/**
 * Синхронный POST колбэка с HMAC-подписью.
 * Транспорт — stream_context_create (без curl-расширения).
 *
 * @return int HTTP-статус ответа получателя (0 — сетевая/транспортная ошибка)
 */
function sendCallback(string $url, array $event): int
{
    $rawBody = encodeJson($event);
    $timestamp = (string) time();
    $signature = 'sha256='.hash_hmac('sha256', $rawBody, webhookSecret());

    $context = stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => [
                'Content-Type: application/json',
                'X-PSP-Timestamp: '.$timestamp,
                'X-PSP-Signature: '.$signature,
                'User-Agent: mock-psp/1.0',
            ],
            'content' => $rawBody,
            'timeout' => PSP_CALLBACK_TIMEOUT_SECONDS,
            'ignore_errors' => true,
            'follow_location' => 0,
        ],
    ]);

    // $http_response_header заполняется в локальной области вызова.
    $response = @file_get_contents($url, false, $context);

    $status = 0;
    if (isset($http_response_header[0])
        && preg_match('~^HTTP/\S+\s+(\d{3})~', $http_response_header[0], $m) === 1
    ) {
        $status = (int) $m[1];
    }

    error_log(sprintf(
        '[mock-psp] callback event=%s -> %s status=%s',
        (string) ($event['event_id'] ?? '?'),
        $url,
        $response === false ? 'transport-error' : (string) $status
    ));

    return $status;
}

/* ---------------------------- маршрутизация ---------------------------- */

$method = strtoupper((string) ($_SERVER['REQUEST_METHOD'] ?? 'GET'));
$path = parse_url((string) ($_SERVER['REQUEST_URI'] ?? '/'), PHP_URL_PATH);
$path = is_string($path) ? rtrim($path, '/') : '';
if ($path === '') {
    $path = '/';
}

// CORS — на случай, если демо-панель дергает сервис прямо из браузера.
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
if ($method === 'OPTIONS') {
    http_response_code(204);
    exit;
}

if ($path === '/api/health') {
    if ($method !== 'GET') {
        methodNotAllowed(['GET']);
    }
    respond(200, ['ok' => true, 'mode' => currentMode()]);
}

if ($path === '/api/mode') {
    if ($method !== 'GET') {
        methodNotAllowed(['GET']);
    }
    respond(200, ['mode' => currentMode()]);
}

if ($path === '/api/config') {
    if ($method !== 'POST') {
        methodNotAllowed(['POST']);
    }
    $data = jsonInput();
    if ($data === null) {
        fail(400, 'invalid_json');
    }
    $mode = $data['mode'] ?? null;
    $mode = is_string($mode) ? strtolower(trim($mode)) : null;
    if ($mode === null || ! in_array($mode, PSP_MODES, true)) {
        fail(400, 'invalid_mode', ['allowed' => PSP_MODES]);
    }
    if (! storeMode($mode)) {
        fail(500, 'state_write_failed', ['state_dir' => stateDir()]);
    }
    respond(200, ['ok' => true, 'mode' => $mode]);
}

if ($path === '/api/charges') {
    if ($method !== 'POST') {
        methodNotAllowed(['POST']);
    }
    $data = jsonInput();
    if ($data === null) {
        fail(400, 'invalid_json');
    }
    [$errors, $charge] = validateCharge($data);
    if ($errors !== []) {
        fail(400, 'validation_failed', ['fields' => $errors]);
    }

    $mode = currentMode();

    if ($mode === 'http_500') {
        fail(500, 'provider_unavailable');
    }

    if ($mode === 'timeout') {
        sleep(PSP_TIMEOUT_SECONDS);
        respond(200, ['sent' => false, 'reason' => 'timeout']);
    }

    sendCallback((string) $charge['callback_url'], buildCallbackEvent($charge));
    respond(200, ['sent' => true]);
}

if ($path === '/api/postback') {
    if ($method !== 'POST') {
        methodNotAllowed(['POST']);
    }
    $data = jsonInput();
    if ($data === null) {
        fail(400, 'invalid_json');
    }
    error_log('[mock-psp] postback received: '.encodeJson($data));
    @file_put_contents(stateDir().'/mock_psp_postbacks.log', encodeJson($data).PHP_EOL, FILE_APPEND | LOCK_EX);
    respond(200, ['ok' => true]);
}

fail(404, 'not_found', ['path' => $path, 'method' => $method]);
