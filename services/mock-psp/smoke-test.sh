#!/usr/bin/env bash
#
# Smoke-тест mock-psp.
#
# Поднимает сам сервис (php -S, по умолчанию 8099) и sink-сервер (по умолчанию 8100),
# который записывает полученные запросы в файлы. Проверяет:
#   * GET /api/health, GET /api/mode;
#   * смену режимов через POST /api/config (включая отклонение невалидного режима);
#   * charges в режиме ok  -> sink получил колбэк, HMAC-подпись пересчитана и сверена;
#   * charges в режиме timeout -> sent:false, ~8 c, колбэк не отправлен;
#   * charges в режиме http_500 -> 500 provider_unavailable;
#   * переиспользование event_id (демо повторов);
#   * кастомный PSP_WEBHOOK_SECRET (подпись сверяется с ним).
#
# Требуется: php (>= 8.0), curl. Docker не нужен.
#
# Запуск:   bash smoke-test.sh
# Опции:    MOCK_PORT=8099 SINK_PORT=8100  — порты
#           PSP_WEBHOOK_SECRET не читается из окружения: в фазе 1 секрет по умолчанию
#           (dev-secret), в фазе 2 задаётся явно (custom-secret-42)
#           KEEP=1                        — не удалять рабочий каталог (логи, колбэки)
#
set -u

DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
HOST="127.0.0.1"
MOCK_PORT="${MOCK_PORT:-8099}"
SINK_PORT="${SINK_PORT:-8100}"
BASE="http://${HOST}:${MOCK_PORT}"
SINK_URL="http://${HOST}:${SINK_PORT}/psp/webhook"

WORK="$(mktemp -d /tmp/mock-psp-smoke.XXXXXX)"
STATE_DIR="${WORK}/state"
SINK_DIR="${WORK}/sink"
mkdir -p "${STATE_DIR}" "${SINK_DIR}"

PASS=0
FAIL=0
pass() { PASS=$((PASS + 1)); printf 'PASS  %s\n' "$1"; }
fail() { FAIL=$((FAIL + 1)); printf 'FAIL  %s%s\n' "$1" "${2:+ — $2}"; }
check_eq() { if [ "$2" = "$3" ]; then pass "$1"; else fail "$1" "ожидалось [$3], получено [$2]"; fi; }

# ----------------------------- sink-сервер -----------------------------

cat > "${WORK}/sink.php" <<'PHP'
<?php
$dir = getenv('SINK_DIR');
$raw = file_get_contents('php://input');
$headers = [];
foreach ($_SERVER as $k => $v) {
    if (strpos($k, 'HTTP_') === 0) {
        $headers[strtolower(str_replace('_', '-', substr($k, 5)))] = $v;
    } elseif (in_array($k, ['CONTENT_TYPE', 'CONTENT_LENGTH'], true)) {
        $headers[strtolower(str_replace('_', '-', $k))] = $v;
    }
}
$record = [
    'method' => $_SERVER['REQUEST_METHOD'] ?? '',
    'path' => $_SERVER['REQUEST_URI'] ?? '',
    'headers' => $headers,
    'body' => $raw === false ? '' : $raw,
];
$json = json_encode($record, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
file_put_contents($dir . '/last.json', $json, LOCK_EX);
file_put_contents($dir . '/requests.jsonl', $json . "\n", FILE_APPEND | LOCK_EX);
header('Content-Type: application/json');
echo '{"ok":true}';
PHP

cleanup() {
  [ -n "${MOCK_PID:-}" ] && kill "${MOCK_PID}" 2>/dev/null
  [ -n "${SINK_PID:-}" ] && kill "${SINK_PID}" 2>/dev/null
  wait 2>/dev/null
  if [ "${KEEP:-0}" = "1" ] || [ "${FAIL}" -gt 0 ]; then
    echo "workdir сохранён: ${WORK}"
  else
    rm -rf "${WORK}"
  fi
}
trap cleanup EXIT

# ------------------------------ утилиты ------------------------------

wait_ready() { # <url> — ждёт, пока URL начнёт отвечать 2xx/3xx
  for _ in $(seq 1 50); do
    curl -fsS -o /dev/null "$1" 2>/dev/null && return 0
    sleep 0.2
  done
  return 1
}

sink_count() { if [ -f "${SINK_DIR}/requests.jsonl" ]; then wc -l < "${SINK_DIR}/requests.jsonl"; else echo 0; fi; }

jget() { # <json-file> <key> — печатает значение ключа или __MISSING__
  php -r '
    $data = json_decode((string) file_get_contents($argv[1]), true);
    $key = $argv[2];
    if (!is_array($data) || !array_key_exists($key, $data)) { echo "__MISSING__"; exit(0); }
    $v = $data[$key];
    if (is_bool($v)) { echo $v ? "true" : "false"; }
    elseif ($v === null) { echo "null"; }
    elseif (is_scalar($v)) { echo $v; }
    else { echo json_encode($v); }
  ' "$1" "$2"
}

sink_body_field() { # <key> — поле внутри JSON-тела последнего колбэка
  php -r '
    $rec = json_decode((string) file_get_contents($argv[1] . "/last.json"), true);
    $body = json_decode(($rec["body"] ?? ""), true);
    $key = $argv[2];
    if (!is_array($body) || !array_key_exists($key, $body)) { echo "__MISSING__"; exit(0); }
    $v = $body[$key];
    if (is_bool($v)) { echo $v ? "true" : "false"; }
    elseif ($v === null) { echo "null"; }
    elseif (is_scalar($v)) { echo $v; }
    else { echo json_encode($v); }
  ' "${SINK_DIR}" "$1"
}

sink_header() { # <lowercase-header> — значение заголовка последнего колбэка
  php -r '
    $rec = json_decode((string) file_get_contents($argv[1] . "/last.json"), true);
    echo $rec["headers"][strtolower($argv[2])] ?? "__MISSING__";
  ' "${SINK_DIR}" "$1"
}

verify_signature() { # <secret> -> OK | SIGNATURE_FAIL | TIMESTAMP_FAIL  (пересчёт HMAC по raw body)
  php -r '
    $rec = json_decode((string) file_get_contents($argv[1] . "/last.json"), true);
    $sig = $rec["headers"]["x-psp-signature"] ?? "";
    $ts  = $rec["headers"]["x-psp-timestamp"] ?? "";
    $expected = "sha256=" . hash_hmac("sha256", $rec["body"] ?? "", $argv[2]);
    if (!hash_equals($expected, $sig)) { echo "SIGNATURE_FAIL"; exit(0); }
    if ($ts === "" || !ctype_digit($ts) || abs(time() - (int) $ts) > 60) { echo "TIMESTAMP_FAIL"; exit(0); }
    echo "OK";
  ' "${SINK_DIR}" "$1"
}

RESP_CODE=""
http() { # <method> <path> [json-body]
  local args=(-sS -m 40 -o "${WORK}/resp.json" -w '%{http_code}' -X "$1")
  if [ "$#" -ge 3 ]; then
    args+=(-H 'Content-Type: application/json' --data-binary "$3")
  fi
  RESP_CODE="$(curl "${args[@]}" "${BASE}$2" 2>/dev/null || true)"
}

start_mock() { # [secret] — запуск mock-psp; без аргумента секрет по умолчанию (dev-secret)
  if [ "$#" -ge 1 ] && [ -n "$1" ]; then
    env -u PSP_WEBHOOK_SECRET PSP_WEBHOOK_SECRET="$1" STATE_DIR="${STATE_DIR}" \
      php -S "${HOST}:${MOCK_PORT}" "${DIR}/index.php" > "${WORK}/mock.log" 2>&1 &
  else
    env -u PSP_WEBHOOK_SECRET STATE_DIR="${STATE_DIR}" \
      php -S "${HOST}:${MOCK_PORT}" "${DIR}/index.php" > "${WORK}/mock.log" 2>&1 &
  fi
  MOCK_PID=$!
  wait_ready "${BASE}/api/health"
}

# ------------------------------- старт -------------------------------

echo "== mock-psp smoke test =="
echo "workdir: ${WORK}"

SINK_DIR="${SINK_DIR}" php -S "${HOST}:${SINK_PORT}" "${WORK}/sink.php" > "${WORK}/sink.log" 2>&1 &
SINK_PID=$!
if ! wait_ready "http://${HOST}:${SINK_PORT}/ping"; then
  echo "sink не поднялся на порту ${SINK_PORT}, лог:"; sed -n '1,10p' "${WORK}/sink.log"
  exit 1
fi
pass "sink поднят на ${SINK_PORT}"

if ! start_mock; then
  echo "mock-psp не поднялся на порту ${MOCK_PORT}, лог:"; sed -n '1,10p' "${WORK}/mock.log"
  exit 1
fi
pass "mock-psp поднят на ${MOCK_PORT} (PSP_WEBHOOK_SECRET не задан → dev-secret)"

CHARGE_OK="{\"payment_id\":\"pay_smoke_001\",\"amount_cents\":1200,\"currency\":\"USD\",\"callback_url\":\"${SINK_URL}\"}"
CHARGE_REPLAY="{\"payment_id\":\"pay_smoke_002\",\"amount_cents\":4999,\"callback_url\":\"${SINK_URL}\",\"event_id\":\"evt_fixed_123\"}"

# --------------------------- 1. health / mode ---------------------------

http GET /api/health
check_eq "GET /api/health → 200" "${RESP_CODE}" "200"
check_eq "  health.ok=true" "$(jget "${WORK}/resp.json" ok)" "true"
check_eq "  health.mode=ok (по умолчанию)" "$(jget "${WORK}/resp.json" mode)" "ok"

http GET /api/mode
check_eq "GET /api/mode → 200" "${RESP_CODE}" "200"
check_eq "  mode=ok" "$(jget "${WORK}/resp.json" mode)" "ok"

# --------------------------- 2. смена режимов ---------------------------

http POST /api/config '{"mode":"timeout"}'
check_eq "POST /api/config {timeout} → 200" "${RESP_CODE}" "200"
http GET /api/mode
check_eq "  mode после переключения = timeout" "$(jget "${WORK}/resp.json" mode)" "timeout"
check_eq "  файл режима создан в STATE_DIR" "$(cat "${STATE_DIR}/mock_psp_mode" 2>/dev/null)" "timeout"

http POST /api/config '{"mode":"banana"}'
check_eq "невалидный режим → 400" "${RESP_CODE}" "400"
check_eq "  error=invalid_mode" "$(jget "${WORK}/resp.json" error)" "invalid_mode"
http GET /api/mode
check_eq "  режим не изменился (timeout)" "$(jget "${WORK}/resp.json" mode)" "timeout"

http POST /api/config '{"mode":"ok"}'
check_eq "POST /api/config {ok} → 200" "${RESP_CODE}" "200"

# ----------------------- 3. charges: ok + подпись -----------------------

COUNT_BEFORE="$(sink_count)"
http POST /api/charges "${CHARGE_OK}"
check_eq "charges (ok) → 200" "${RESP_CODE}" "200"
check_eq "  sent=true" "$(jget "${WORK}/resp.json" sent)" "true"
check_eq "  sink получил ровно 1 колбэк" "$(( $(sink_count) - COUNT_BEFORE ))" "1"
check_eq "  колбэк: event=payment.paid" "$(sink_body_field event)" "payment.paid"
check_eq "  колбэк: status=paid" "$(sink_body_field status)" "paid"
check_eq "  колбэк: payment_id" "$(sink_body_field payment_id)" "pay_smoke_001"
check_eq "  колбэк: amount_cents" "$(sink_body_field amount_cents)" "1200"
check_eq "  колбэк: currency=USD" "$(sink_body_field currency)" "USD"
EVENT_ID="$(sink_body_field event_id)"
case "${EVENT_ID}" in
  evt_*) pass "  колбэк: event_id сгенерирован (${EVENT_ID})" ;;
  *)     fail "  колбэк: event_id сгенерирован" "получено [${EVENT_ID}]" ;;
esac
check_eq "  подпись колбэка (HMAC, dev-secret)" "$(verify_signature dev-secret)" "OK"
BODY_LEN="$(php -r '$r=json_decode(file_get_contents($argv[1]."/last.json"),true); echo strlen($r["body"]);' "${SINK_DIR}")"
check_eq "  Content-Length соответствует телу" "$(sink_header content-length)" "${BODY_LEN}"

# ------------------- 4. повтор с присланным event_id -------------------

COUNT_BEFORE="$(sink_count)"
http POST /api/charges "${CHARGE_REPLAY}"
check_eq "charges (replay) → 200" "${RESP_CODE}" "200"
check_eq "  sink получил второй колбэк" "$(( $(sink_count) - COUNT_BEFORE ))" "1"
check_eq "  event_id использован из запроса" "$(sink_body_field event_id)" "evt_fixed_123"
check_eq "  подпись второго колбэка" "$(verify_signature dev-secret)" "OK"

# --------------------------- 5. режим timeout ---------------------------

http POST /api/config '{"mode":"timeout"}'
COUNT_BEFORE="$(sink_count)"
START_TS="$(date +%s)"
http POST /api/charges "${CHARGE_OK}"
ELAPSED="$(( $(date +%s) - START_TS ))"
check_eq "charges (timeout) → 200" "${RESP_CODE}" "200"
check_eq "  sent=false" "$(jget "${WORK}/resp.json" sent)" "false"
check_eq "  reason=timeout" "$(jget "${WORK}/resp.json" reason)" "timeout"
if [ "${ELAPSED}" -ge 7 ]; then pass "  задержка ~8 c (фактически ${ELAPSED} c)"; else fail "  задержка ${ELAPSED} c < 7 c"; fi
sleep 1
check_eq "  sink не получил колбэк в timeout-режиме" "$(sink_count)" "${COUNT_BEFORE}"

# --------------------------- 6. режим http_500 ---------------------------

http POST /api/config '{"mode":"http_500"}'
COUNT_BEFORE="$(sink_count)"
http POST /api/charges "${CHARGE_OK}"
check_eq "charges (http_500) → 500" "${RESP_CODE}" "500"
check_eq "  error=provider_unavailable" "$(jget "${WORK}/resp.json" error)" "provider_unavailable"
check_eq "  sink не получил колбэк в http_500-режиме" "$(sink_count)" "${COUNT_BEFORE}"

# --------------------- 7. прочие коды и валидация ---------------------

http GET /api/nope
check_eq "неизвестный путь → 404" "${RESP_CODE}" "404"
http GET /api/charges
check_eq "GET /api/charges → 405" "${RESP_CODE}" "405"
http POST /api/config '{oops'
check_eq "битый JSON → 400" "${RESP_CODE}" "400"
check_eq "  error=invalid_json" "$(jget "${WORK}/resp.json" error)" "invalid_json"
http POST /api/charges "{\"amount_cents\":100,\"callback_url\":\"${SINK_URL}\"}"
check_eq "charges без payment_id → 400" "${RESP_CODE}" "400"
check_eq "  error=validation_failed" "$(jget "${WORK}/resp.json" error)" "validation_failed"

# ------------------ 8. кастомный PSP_WEBHOOK_SECRET ------------------

http POST /api/config '{"mode":"ok"}'
kill "${MOCK_PID}" 2>/dev/null; wait "${MOCK_PID}" 2>/dev/null
for _ in $(seq 1 25); do curl -s -o /dev/null "${BASE}/api/health" || break; sleep 0.2; done
MOCK_PID=""
if start_mock "custom-secret-42"; then
  pass "mock перезапущен с PSP_WEBHOOK_SECRET=custom-secret-42"
  COUNT_BEFORE="$(sink_count)"
  http POST /api/charges "${CHARGE_OK}"
  check_eq "charges (custom secret) → 200" "${RESP_CODE}" "200"
  check_eq "  sink получил колбэк" "$(( $(sink_count) - COUNT_BEFORE ))" "1"
  check_eq "  подпись колбэка (HMAC, custom-secret-42)" "$(verify_signature custom-secret-42)" "OK"
else
  fail "перезапуск mock с PSP_WEBHOOK_SECRET=custom-secret-42"
fi

# -------------------------------- итог --------------------------------

echo
echo "== Итог: ${PASS} PASS, ${FAIL} FAIL =="
[ "${FAIL}" -eq 0 ] || exit 1
exit 0
