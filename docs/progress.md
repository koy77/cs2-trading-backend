# progress.md — журнал сборки

**Статус: готово (M0–M4).** Демо поднимается одной командой `make demo`.

## Что сделано

- **M0 — инфраструктура.** Laravel 13 скелет, FrankenPHP classic (без NGINX/PHP-FPM), docker compose
  (app/worker/scheduler/mysql/redis/rabbitmq/mock-psp/monitoring), Makefile, .env.example, PHPStan L8
  (0 ошибок), Pint, PHPCS, PHPUnit; GitHub Actions (pint/phpstan/phpcs/tests + отдельный job SDK).
- **M1 — Steam + Identity + Inventory.** Пакет `packages/steam-sdk` (OpenID, профиль, инвентарь, цены,
  троттл-гейт); вход Steam OpenID + демо-входы; синк инвентаря через очередь (`real|fixture`);
  фикстуры реальных публичных профилей; панель со статусами (mysql/redis/rabbit/psp/steam).
- **M2 — Trading + Payments.** Листинги/заказы; 3 слоя защиты от гонок (atomic claim, unique-индекс,
  транзакция+ledger); гонка ×30 одной кнопкой и в тестах; mock-PSP (ok/timeout/http_500);
  HMAC-вебхуки + окно timestamp + дедуп; `Idempotency-Key`; двойная запись (`make ledger-check`).
- **M3 — Сделка + очереди + доки.** TradeProvider/Fake (created→sent→accepted|declined|expired),
  accept/decline/expire, возвраты, авто-протухание резервов; 5 очередей RabbitMQ с retry/backoff,
  failed_jobs + replay, демо «отравить очередь»; README, spec.md, docs/*, demo-script.
- **M4 — плюшки.** A/B комиссии (Pennant a=3%/b=4%) + `make report`; аналитика (events);
  Prometheus `/metrics` + Grafana-дашборд (профиль monitoring); `make load-light` (p95/rps);
  `make perf` (100k батч-сид + EXPLAIN до/после индекса); AI-воркфлоу (CLAUDE.md, slash-команды,
  хук авто-Pint, .mcp.json, ai-review в CI).

## Как проверено

- `php artisan test` — **28 тестов, 136 ассертов, всё зелёное** (включая гонку и идемпотентность).
- `pint --test` PASS (128 файлов) · `phpstan` L8 — **0 ошибок** · `phpcs` — **0 errors**.
- Живые прогоны: панель, синк (live/fixture), гонка ×30 (1 победитель), dup-вебхуки ×10 (1 кредит),
  mock-PSP сценарии, очереди (retry→failed→replay), `make report`, `make ledger-check`, `make perf`.

Живые замеры (эта машина, docker): гонка ×30 → **1 победитель / 29 конфликтов за 1.7 c**;
dup-вебхук ×10 → **один кредит** (баланс изменился 1 раз); `make perf` 100k строк → **25.3 ms → 0.4 ms
(×63, EXPLAIN rows 100000 → 236)**; `make load-light` → **p95 145 ms, ~225 rps, 0 ошибок**;
`make ledger-check` → сходится.

## Хвосты / что дальше (не блокеры)

- [ ] Опционально: скринкаст 3–5 мин по docs/demo-script.md.
- [ ] Опционально: `gh repo create` и push (репо полностью локально-готов).
- [ ] Roadmap на будущее: реальный `RealTradeProvider` (сессия Steam), кабинет админа, DLQ-очеловечивание.

## Внешние точки

- Keyless-проверки Steam и живой probe-лог: `~/research/cs2-trading-demo/` (вне репо).
- Тестовое ТЗ у компании отсутствует — это свободная демка под вакансию (см. spec.md).
