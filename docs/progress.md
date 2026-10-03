# progress.md — журнал сборки (в т.ч. для AI-агентов)

Обновляется по ходу. **Текущий объём: v0.4 — ПОЛНЫЙ (M0–M4)**, по решению пользователя:
всё вырезанное возвращается + FrankenPHP в classic-режиме + perf-тест на 100k (лёгкий, опциональный).

## Решения (кратко)
- **FrankenPHP classic mode** (`php_server`, без worker): правки PHP применяются сразу, без рестарта контейнера.
- **mock-psp** — отдельный контейнер-сервис (эмулятор внешнего PSP, HMAC-колбэки, режимы ok/timeout/http_500).
- **Фикстуры Steam** — слепки публичных профилей (Kyle 82 предмета, outsoseewhoya 11, crazy2 0);
  режимы `real | fixture` переключаются в панели и в конфиге.
- **Перф** (`make perf`): батч-сид PERF_ROWS=100000 в отдельную таблицу + EXPLAIN до/после индекса. Не в основном сценарии, ноут не страдает.
- Стек: Laravel 13 (PHP 8.4), MySQL 8.4, Redis 7, RabbitMQ 4 (5 очередей + failed/DLQ-подход), Pennant (A/B), Prometheus+Grafana (профиль monitoring).

## Статус
- [x] Репо + Laravel 13 скелет (composer create-project)
- [ ] M0 — инфраструктура: FrankenPHP-контейнер, compose, make, CI, статанализ, первый зелёный test
- [ ] M1 — steam-sdk + Identity (OpenID/demo-вход) + Inventory (синк live/fixture) + панель (сцена 1)
- [ ] M2 — Trading + Payments: листинги/заказы, atomic claim + лок, Idempotency-Key, mock-PSP, ledger, гонка, seed
- [ ] M3 — Сделка (accept/decline/возвраты) + очереди (DLQ/replay) + доки + demo-script
- [ ] M4 — A/B комиссии, аналитика, Grafana-дашборд, load-light, ai-review, perf-витрина

## Быстрые команды
`make help` · `make up` · `make demo` (up + fresh + открыть панель) · `make test` · `make race` ·
`make demo-webhook MODE=dup` · `make perf` · `make report`

## Панель
http://localhost:8090 — кнопки: вход (Steam/Demo), синк инвентаря (live/fixture), листинги, покупка,
гонка ×50, пополнение, вебхуки, сделка, очереди, живой журнал событий.

## Внешние точки
- RabbitMQ UI: http://localhost:15674 (cs2/secret)
- Adminer (профиль tools): http://localhost:8097
- Grafana (профиль monitoring): http://localhost:3001 (admin/admin)
- mock-psp: http://localhost:8091/api/health
