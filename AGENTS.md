# AGENTS.md — краткая версия для любых агентов (Codex, OpenCode, Cursor, Hermes…)

Полные правила и карта файлов: **[`CLAUDE.md`](CLAUDE.md)** (читай первым).
Архитектура и фичи: `README.md` (+ `assets/` — диаграммы).

TL;DR:

- Репо — демо CS2 trading backend (Laravel 13, MySQL, Redis, RabbitMQ, FrankenPHP, Docker).
- **Все команды — через `make`** (см. `make help`); ничего не запускать на хосте напрямую.
- После правок обязательны гейты: `make lint && make stan && make phpcs && make test`.
- Не коммитить `.env` и любые секреты; env — только через `config/`, для тестов есть `cs2_test`.
- Не ломать инварианты: один активный заказ на листинг, сходящийся ledger, идемпотентные вебхуки/синки.
- Ключевые файлы: `app/Services/Trading/OrderService.php`, `app/Services/Psp/PspWebhookService.php`,
  `app/Services/Steam/SteamGateway.php`, `packages/steam-sdk/`, `resources/views/panel.blade.php`.
- Фичи: согласованный план (в описании PR/issue) → TDD (RED→GREEN) → гейты → ветка/PR по шаблону.
