# CLAUDE.md — правила и контекст для AI-агентов (Claude Code и аналоги)

Этот файл — «операционка» репозитория для агентов. Читать перед любой правкой.
Детали архитектуры: `docs/architecture.md`. Полное ТЗ: `spec.md`. Журнал: `docs/progress.md`.

## Что это

Демо backend'а трейдинговой платформы CS2: Laravel 13 (PHP 8.4), MySQL 8.4, Redis 7, RabbitMQ 4,
FrankenPHP in classic mode. Steam-интеграция **без API-ключей** (OpenID + public community endpoints)
за внутренним пакетом `packages/steam-sdk`. Живой PSP эмулирует сервис `services/mock-psp`.

## Железные правила

1. **Всё только через Docker/Make.** Не запускать `composer`/`php` на хосте. Все команды — из `Makefile`
   (`make up`, `make test`, `make fresh`, `make shell`, `make artisan CMD="..."`).
2. **Не трогать секреты.** `.env` не коммитить, не выводить значения; секреты — только в `.env`
   (см. `.env.example`). В коде — только `config(...)`, читающий env в `config/*.php` (Larastan это проверяет).
3. **Зелёные гейты — обязательны.** После правок: `make lint` (Pint), `make stan` (PHPStan L8),
   `make phpcs`, `make test`. Красное не оставлять.
4. **Тесты — на `cs2_test`.** `tests/TestCase.php` жёстко фиксирует тестовое окружение
   (env phpunit.xml не доходит до Laravel в FrankenPHP-образе — не «оптимизировать» это обратно).
5. **Инварианты не ломать** (см. `docs/architecture.md`): ровно один активный заказ на листинг;
   ledger сходится; вебхуки идемпотентны; синк инвентаря идемпотентен; панель/API не требуют ключей.

## Карта: куда идти с задачей

| Задача | Файлы (tracer bullets) |
|---|---|
| Покупка/гонки/возвраты | `app/Services/Trading/OrderService.php`, `tests/Feature/RaceTest.php` |
| Вебхуки/подписи/идемпотентность | `app/Services/Psp/PspWebhookService.php`, `app/Services/Money/PspSigner.php`, `app/Http/Middleware/IdempotencyKey.php` |
| Steam (вход/инвентарь/цены) | `packages/steam-sdk/src/**`, `app/Services/Steam/SteamGateway.php`, `app/Jobs/SyncSteamInventoryJob.php` |
| Очереди/воркеры | `config/queue.php`, `app/Jobs/*`, `docker-compose.yml` (worker/scheduler) |
| Панель/демо-кнопки | `resources/views/panel.blade.php`, `app/Http/Controllers/PanelController.php`, `app/Console/Commands/*` |
| Схема БД | `database/migrations/*`, `database/seeders/DemoSeeder.php` |
| mock-PSP | `services/mock-psp/index.php` |

## Slash-команды (`.claude/commands/`)

- `/feature <описание>` — план в `docs/plans/` → TDD → гейты → итог. План сначала, код после подтверждения.
- `/review [ветка|PR]` — прогон гейтов + чеклист (гонки, идемпотентность, N+1, безопасность, тесты).
- `/sync [steamID64|vanity]` — проверка Steam-интеграции (fixture-синк, идемпотентность, лимиты).

## Хуки и MCP

- `.claude/settings.json`: PostToolUse(Edit|Write) → `pint --dirty` (автоформат после правок).
- `.mcp.json`: `mysql-readonly` (только чтение, host-порт 33061) + `fetch` — для разведки данных/доков.
- CI: `.github/workflows/ci.yml` (обязательные гейты), `ai-review.yml` (опциональный AI-ревью PR).

## Соглашения

- Ветки `feature/*`, PR по шаблону `.github/PULL_REQUEST_TEMPLATE.md`, коммиты — Conventional Commits.
- Ответственность за смёрженный код — на человеке: диффы агента читать, тестам не верить на слово,
  конкурентные сценарии проверять запуском (`make race`).
- Числа/лимиты Steam — не хардкодить в контроллерах, всё через `config/services.php`.
