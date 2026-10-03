# CS2 Trading Backend — spec.md (v0.3, lite)

Черновик для ревью. Демо для **технического интервью** на вакансию Middle PHP Backend Developer (CS2 trading platform).
Рабочие материалы: `~/research/cs2-trading-demo/`.

**Что сокращено vs v0.2 (по фидбеку «урежь в половину»):**
- ❌ `make seed-perf` (100k строк) — убран. Не грузим ноутбук. Вместо него — крошечный `make explain`
  (план горячего запроса на обычных демо-данных, секунды).
- ❌ Grafana/Prometheus-профиль — не в этой версии (мониторинг — рассказом + есть в другом моём проекте).
- ❌ mock-PSP как отдельный контейнер — теперь «эмуляция внешнего PSP»: кнопка/команда шлёт реальный
  HTTP-запрос с HMAC-подписью на наш `/webhooks/psp` (тот же смысл, минус сервис).
- ❌ velocity-антифрод, аналитика, A/B, load-smoke, legacy-кейс (весь M4) — выкинуты.
- ❌ scheduler-контейнер; очередей 5 → **3**; доков ~10 → **4**; ADR-папка, code-review.md, security.md — убраны
  (ключевое сжато в README).

**После урезки:** контейнеров **6**, очередей **3**, доков **4**, своего кода — десятки файлов (вдвое меньше).
Стенд лёгкий: mysql/redis/rabbit лёгкие образы, никаких тяжёлых сидов.

---

## 0. TL;DR

- **Что:** локальный стенд `docker compose` + **веб-панель с кнопками** + JSON API. Вертикальный срез
  CS2-трейдинг-платформы: Steam-вход → инвентарь → листинги → покупка → оплата → сделка.
- **Зачем:** на интервью за ~10 минут кнопками закрыть все темы вакансии и снять вопросы; в репо — код,
  тесты, доки, AI-воркфлоу.
- **Запуск:** `make up && make demo-open` → `http://localhost:8090`.
- **Живое (Steam):** OpenID-логин, инвентарь публичных профилей, рыночные цены.
  **Честный fake:** трейд-офферы (в публичном API Steam их нет — см. §8) и PSP.
- **Steam-аккаунт не обязателен:** «Demo-вход» (seller/buyer); live-логин показывается редиректом.
- **Покрытие вакансии:** обязательные требования — **9/9** (демонстрируются кнопками/кодом/тестами);
  плюсы: PCI/s2s — да (HMAC + s2s-вызовы), Nginx/PHP-FPM/CI — да; Grafana/AWS — рассказом (+ другой проект);
  антифрод — только «не купить свой листинг»; A/B — вне этой версии. Честный разбор — в конце §1 и §14.

## 1. Вакансия → что в демо → где показать

| Требование вакансии | Что в демо | Где показывается |
|---|---|---|
| Фичи в монолите, микросервисах, внутренних пакетах | Модульный монолит (5 модулей) + отдельный worker-процесс + внутренний пакет `packages/steam-sdk` (path-repo, свои тесты) | §4, `packages/`, сцены 1–5 |
| Laravel: события/листенеры, очереди, DI, сервис-провайдеры, FormRequest | События `InventorySynced`/`OrderPaid`/`OrderFulfilled` + лисенеры; `SteamServiceProvider` (bind real/fake); FormRequest на всех входах; очереди через RabbitMQ | код + сцены 1, 4 |
| SOLID на практике | Границы модулей (Identity/Inventory/Market/Trading/Payments) + интерфейсы провайдеров; решения — коротким разделом README | код, README |
| MySQL: индексы, план запроса, тяжёлые выборки | `make explain` — EXPLAIN горячего запроса; индексы в миграциях с комментариями; устранение N+1 (toBase-check в тесте) | `make explain` |
| Redis | Кэш цен (TTL + защита от stampede), лок-мьютекс на покупку, rate limiter для Steam | сцена 1, код |
| RabbitMQ и асинхронная обработка | 3 очереди + DLQ, приоритет, backoff-ретраи, идемпотентные консьюмеры, graceful shutdown | сцена 4, RabbitMQ UI |
| Race conditions «как реально закрывать» (локи, мьютексы, атомарные операции) | atomic claim + unique-индекс + Redis-лок (мьютекс); `make demo-race`: 100 параллельных покупок → 1 заказ | сцена 2, тесты |
| REST + платёжки + вебхуки/постбеки + HMAC + идемпотентность | эмуляция PSP: подпись по raw body, окно timestamp, дедуп, `Idempotency-Key`, исходящий postback через очередь | сцена 3 |
| **PHPStan / PHPCS и тесты; code review и техрешения** | larastan + Pint **+ PHPCS (PSR-12)** в CI; тесты: unit/feature/**concurrency**; PR-история + комментарии (в т.ч. к агентским диффам) + шаблон PR | `make lint/stan/test`, CI, репо |
| Git / GitHub Flow, PR, code review | История ~15–20 небольших PR с описаниями; шаблон PR | репо |
| Docker для локальной разработки | compose: nginx, app (php-fpm), worker, MySQL, Redis, RabbitMQ (6 контейнеров) | `make up` |
| AI-агенты (ежедневный инструмент) | Маппинг по блоку «Работа с Claude Code» — см. §11: CLAUDE.md/AGENTS.md, команды, хуки, MCP, plan-файлы, ai-review в CI, журнал «агент → поймал» | репо + рассказ |
| PCI DSS / server-to-server | README-раздел: карты сервер не касается (hosted PSP), HMAC, s2s-вызовы, секреты | README |
| Ubuntu/Nginx/PHP-FPM/cron; CI/CD | php-fpm + nginx, GitHub Actions (lint/stan/test); про cron — заметка в README | compose + CI |
| AWS / Grafana (плюс) | Рассказом: RDS/ElastiCache/AmazonMQ-маппинг (README) + полный мониторинг-стек в другом моём проекте | доклад |
| Антифрод / аналитика / A-B (плюс) | Только базовое: «нельзя купить свой листинг» (встроено в покупку) | код |

**Итог покрытия (честно).**
- *Обязательные требования — 9/9* закрываются демо: кнопки, код и тесты. Ни один обязательный пункт не «на словах».
- *Плюсы*: PCI/s2s и Nginx/PHP-FPM/CI — показываются; Grafana/AWS и объёмная нагрузка — рассказом
  (+ твои проекты payments-orchestration и rpg-liveops); A/B и глубокая аналитика — сознательно вне демо.
- *Что демо доказать не может в принципе*: прод-масштаб и годы опыта. Это — рассказ + Прил. D.

## 2. Показ на интервью — 10 минут (что жму и что видно)

**Сцена 1. Steam-данные живьём (2 мин)**
1. `make up && make demo-open` — панель: статусы зелёные (app, MySQL, Redis, RabbitMQ, worker, Steam).
2. **[Войти через Steam]** — живой редирект на steamcommunity.com (флоу настоящий). Затем **[Demo-вход: seller]**.
3. **[Синхронизировать инвентарь]** → задача уходит в RabbitMQ → таблица наполняется реальным инвентарём
   публичного профиля: **82 предмета**, включая ★ Driver Gloves.
4. Клик по предмету → цена из Steam Market (источник `live`, кэш: второй клик мгновенный).
   *Говорю:* «Интеграция без API-ключей: OpenID + публичные community-эндпоинты + public Web API;
   троттлинг, кэш, ретраи; для CI — фикстуры (сняты с реальных профилей)».

**Сцена 2. Гонка (2 мин)**
1. **[Выставить на продажу]** (предмет seller'а, цена с автоподсказкой).
2. **[Race: 100 параллельных покупок]** → панель: `1×успех, 99×409`, в БД ровно один заказ.
3. `make test-race` — тот же сценарий в CI.
   *Говорю:* atomic claim (`UPDATE … WHERE status='active'` + affected rows), unique-индекс на активный заказ,
   Redis-лок как мьютекс (снижает конкуренцию, не заменяет БД-инвариант), ретраи; инвариант закреплён тестом.

**Сцена 3. Деньги (2 мин)**
**[Пополнить баланс]** → ledger; **[Вебхук: валидный]** / **[×10 повтор]** / **[Битый HMAC]** / **[Старый timestamp]** →
эффекты в журнале: один платёж, один раз, 401 на подделку. Открываю ledger: дебет = кредит.
*Говорю:* HMAC-SHA256 по raw body, окно, дедуп по `(provider, event_id)`, идемпотентные ретраи, двойная запись.

**Сцена 4. Очереди (2 мин)**
RabbitMQ UI: depth по очередям. **[Отравить сообщение]** → ретраи → DLQ → **[Разобрать DLQ]**.
`docker kill` воркера посреди задачи → задача вернулась и завершилась (идемпотентный консьюмер).
*Говорю:* at-least-once + идемпотентность, backoff, DLQ+replay, graceful shutdown.

**Сцена 5. Сделка и честные границы (2 мин)**
На оплаченном заказе: **[Принять оффер]** → заказ завершён, начисление продавцу, комиссия платформы;
**[Отклонить]** → автовозврат средств покупателю.
*Говорю:* почему реальные трейд-офферы невозможны без сессии аккаунта (SteamGuard/mobile confirm), как это
делают в проде (trade-ферма), и как интерфейс `SteamTradeProvider` позволяет заменить Fake на реальную реализацию.

## 3. Веб-панель (одна страница, всё кнопками)

Blade + Tailwind (CDN, без сборки фронта) + vanilla JS (fetch-поллинг). Блоки:

- **Статусы:** app, MySQL, Redis, RabbitMQ, worker, Steam reachability (последний sync).
- **Аккаунты:** [Войти через Steam] [Demo-вход: seller] [Demo-вход: buyer] [Выйти].
- **Инвентарь (seller):** [Синхронизировать: live] [Синхронизировать: fixture] — прогресс задачи из RabbitMQ;
  таблица предметов. Клик по предмету → цена + [Выставить на продажу].
- **Маркет:** листинги, цена, статус; [Купить] (buyer); [Race: 100 параллельных покупок] → отчёт.
- **Платежи:** балансы; [Пополнить]; [Вебхук: валидный / ×10 / битый HMAC / просроченный ts]; ledger-проводки.
- **Сделка:** [Принять оффер] [Отклонить] (на оплаченном заказе).
- **Очереди:** depth по 3 очередям + DLQ; [Отравить сообщение] [Разобрать DLQ].
- **Живой журнал:** последние события (orders/webhooks/queue) — стримится поллингом.
- **Ссылки:** RabbitMQ UI, Adminer.

Те же действия — artisan-командами (`docs/demo-script.md` с curl-эквивалентами).

## 4. Архитектура и стек

Стек: **PHP 8.4 (php-fpm) + nginx, Laravel 13, MySQL 8.4, Redis 7, RabbitMQ 4 (management)**, всё в Docker
Compose (6 контейнеров); команды только через `make`. CI — GitHub Actions; larastan + Pint + PHPCS; PHPUnit.

```
                        ┌──────────────────── Steam (без ключей) ─────────────────────┐
                        │  OpenID · profile XML · market price · inventory · Web API  │
                        └───────────────────────────┬─────────────────────────────────┘
                                                    │
   nginx ──► Laravel 13 (app, php-fpm)              ▼
        │            ┌──────────── packages/steam-sdk (внутренний SDK) ────────────┐
        │            │ OpenID client · community clients · Web API client · DTO ·  │
        │            │ throttle (Redis) · retry/backoff · fixtures loader          │
        │            └───────────────┬─────────────────────────────────────────────┘
        │                            │
        │      Identity ── Inventory ── Market ── Trading ── Payments
        │                            │
        │              RabbitMQ: inventory.sync · orders.fulfill · webhooks.out (+DLQ)
        │                            │
        └── worker ──────────────────┘
              MySQL 8 (listings/orders/ledger) · Redis (кэш/лок/лимиты)
```

- `packages/steam-sdk` — внутренний composer-пакет (path-repo): клиенты, DTO, ретраи/троттлинг, фикстуры; тесты.
  Прямой ответ на пункт «внутренние пакеты (shared-библиотека, SDK)».
- Провайдеры: `STEAM_PROVIDER=real|fake` (инвентарь/цены), `STEAM_TRADE_PROVIDER=fake`. В CI — fake.
- Порты (настраиваются в `.env`): app/панель `:8090`, RabbitMQ UI `:15674`, Adminer `:8097`.

## 5. Домен: таблицы, статусы, инварианты

Таблицы: `users`, `steam_accounts`, `inventory_items`, `listings`, `orders`, `payments`, `ledger_entries`,
`webhook_events`, `trade_offers`, `idempotency_keys`.

Статусы: listing: `active → reserved → sold | cancelled`; order: `pending_payment → paid → fulfilled | refunded`;
offer: `created → accepted | declined`.

Инварианты (закрепляются тестами):
1. листинг резервируется не более одного раза (unique на активный заказ по листингу);
2. баланс ≥ 0; сумма проводок ledger — дебет = кредит;
3. финальные состояния заказа/оффера неизменяемы;
4. вебхук `(provider, event_id)` применяется ровно один раз;
5. повторный запрос с тем же `Idempotency-Key` возвращает тот же ответ.

## 6. Конкурентность: механики и доказательства

- **Атомарный claim:** `UPDATE listings SET status='reserved', … WHERE id=? AND status='active'` + проверка
  affected rows; проигравшие получают 409.
- **Unique-индекс** на активный заказ по листингу — последняя линия обороны.
- **Redis-лок** (`Cache::lock`, мьютекс) вокруг многошагового сценария.
- **Идемпотентность:** `Idempotency-Key` middleware + таблица; реплей → запомненный ответ.
- **Доказательства:** `make demo-race` (панель: 1×201, 99×409), `make test-race` (параллельные процессы в CI),
  юнит-тесты на реплей и двойной резерв.

## 7. Платежи (эмуляция PSP)

- **Эмуляция внешнего PSP:** кнопка/команда отправляет реальный HTTP POST с HMAC-подписью на наш
  `/webhooks/psp`; провал/таймаут провайдера воспроизводится из панели. (В проде тут был бы внешний сервис.)
- Контракт вебхука: `X-PSP-Signature: sha256=<hmac(raw_body, secret)>`, `X-PSP-Timestamp` (окно ±300 c),
  `event_id` (дедуп), тело: `{event, payment_id, status, amount, currency}`.
- **Ledger — двойная запись:** счета `user:{id}`, `platform:fees`, `psp:clearing`; каждая операция — пара
  проводок, сумма нулевая.
- **Исходящий postback** (при завершении заказа) — через очередь `webhooks.out` с ретраями и подписью.

## 8. Steam-интеграция: что реально, чего нет

Реально и проверено вживую (полный журнал — `~/research/cs2-trading-demo/evidence/probe-log.md`):
OpenID-логин; vanity→SteamID64 и профиль (XML); инвентарь публичных профилей (assets+descriptions);
рыночные цены (lowest/median/volume); онлайн игры/новости (public Web API — для витрины панели).

Чего нет без ключа / нет вообще: `GetPlayerSummaries`, `ResolveVanityURL` (нужен key) — закрыто community XML;
создание/принятие трейд-офферов в публичном API отсутствует — только сессия аккаунта.

Правила общения со Steam (в SDK): троттлинг ~1 rps (Redis-лимитер), кэш цен 60–300 c, backoff на 429/5xx,
свой UA/Referer; **фикстуры** — режим по умолчанию для CI: JSON-слепки реальных профилей уже сняты.

## 9. Очереди (RabbitMQ) — 3 штуки

| Очередь | Задачи | Retry | DLQ |
|---|---|---|---|
| `inventory.sync` | синк инвентаря (live/fixture) | 3× backoff | да |
| `orders.fulfill` | оплата → резерв → сделка | 5× | да |
| `webhooks.out` | исходящие postback'и | 5× backoff | да |

Consumer'ы идемпотентны; `make queue-fail`, `make queue-replay`.

## 10. Наблюдаемость (минимум)

`/up` healthcheck + структурированные логи с correlation_id. Grafana/Prometheus — не в этой версии
(мониторинг-стек есть в другом моём проекте, покажу/расскажу).

## 11. AI-воркфлоу — по ожиданиям вакансии («Работа с Claude Code»)

1. **Ведение агента по контексту** — `CLAUDE.md`/`AGENTS.md` (карта репо, правила, команды),
   `docs/progress.md` (память состояния для агента), правило «давай агенту ссылки на файлы и причины».
2. **Декомпозиция, plan mode** — планы фич коммитятся в `docs/plans/` (сабагенты — в рассказе).
3. **Свой тулинг** — slash-команды (`.claude/commands/`: `/feature`, `/review`), хуки (pint+phpstan по
   изменённым файлам), `.mcp.json` (read-only MySQL + docs MCP).
4. **Агенты в CI** — `ai-review.yml` (пример): агент ревьюит PR; статанализ и тесты — обязательные гейты.
5. **Критическое чтение результата** — `docs/ai-workflow.md`: журнал реальных кейсов «агент сгенерил → что
   поймал и как», PR-комментарии к агентским диффам, правило «ответственность на разработчике».
6. **Экономика контекста** — в `CLAUDE.md`: когда делегировать, когда руками, как держать контекст маленьким.

## 12. Качество

Тесты: unit (SDK, домен), feature (API, вебхуки), **concurrency** (гонка, реплей). larastan + Pint + PHPCS.
CI: `lint + stan + test` на PR (сервисы mysql/redis/rabbitmq). Шаблон PR; история маленькими PR.

## 13. Этапы сборки

- **M0 — скелет:** репо (git init готов), README (EN), CLAUDE.md/AGENTS.md, compose (6 контейнеров), Laravel 13,
  Pint/PHPCS/PHPStan/PHPUnit, CI, `make`-команды. *DoD: `make up && make test` зелёные.*
- **M1 — SteamSDK + Identity + Inventory:** пакет `steam-sdk` (OpenID, профиль, инвентарь, цены; троттлинг/ретраи),
  `steam:sync`, фикстуры (Кайл и др.), панель: сцена 1. *DoD: live-синк реального профиля + fixture-режим.*
- **M2 — Trading + Payments + гонки:** листинги/заказы, atomic claim, Idempotency-Key, эмуляция PSP,
  ledger, `demo-race`/`test-race`/`demo-webhook`, `make explain`, панель: сцены 2–3. *DoD: инварианты §5 в тестах.*
- **M3 — Сделка + очереди + доки:** кнопки accept/decline + возвраты, DLQ/replay, README-тур,
  `docs/demo-script.md` (10 минут + Прил. D полная версия), `docs/ai-workflow.md`. *DoD: сцены 4–5.*
- **Дальше — по желанию** (не обещаем): аналитика/A-B, Grafana, load-smoke, отдельный PSP-сервис.

## 14. Риски и митигации

1. **Нет Steam-аккаунта** → Demo-вход; реальный редирект показывается и без логина.
2. **Лимиты Steam** (429 на /inventory ловили при исследовании) → режим фикстур + кэш + троттлинг;
   на панели видно источник данных (`live`/`fixture`).
3. **Время** → M0–M2 дают показуемые сцены 1–3; M3 — закрепление.
4. **Вопросы «как в проде»** → заготовки: trade-ферма/сессии, прокси+кэш для инвентаря, RDS/ElastiCache/AmazonMQ.
5. **«Покажи высокую нагрузку»** → локально честно не воспроизводится: механизмы (гонки, индексы, очереди, кэш);
   масштаб — рассказ + другой мой проект.

## 15. Вне scope (сознательно)

Реальные деньги и PSP; реальная отправка трейд-офферов; авто-покупка на Steam Market; мобильные приложения;
прод-деплой. Плюс вырезанное по фидбеку: seed-perf/объёмы, Grafana/Prometheus, отдельный PSP-сервис,
velocity-антифрод, аналитика/A-B, scheduler, M4-плюшки. На интервью — «знаю, как это делается, и почему
здесь не делаю».

## Приложение A. Проверенные Steam-эндпоинты без ключа (2026-10-03)

| Endpoint | Статус |
|---|---|
| `api.steampowered.com/ISteamWebAPIUtil/GetSupportedAPIList/v1` | 200 — 27 интерфейсов / 63 public-метода |
| `api.steampowered.com/ISteamUserStats/GetNumberOfCurrentPlayers/v1?appid=730` | 200 (онлайн CS2) |
| `api.steampowered.com/ISteamNews/GetNewsForApp/v2?appid=730` | 200 |
| `api.steampowered.com/ISteamWebAPIUtil/GetServerInfo/v1` | 200 |
| `steamcommunity.com/id/{vanity}/?xml=1` | 200 (steamID64, persona) |
| `steamcommunity.com/market/priceoverview/?appid=730&currency=1&market_hash_name=…` | 200 (lowest/median/volume) |
| `steamcommunity.com/inventory/{steamid}/730/2` | 200; curl с этого IP — 429 (антибот) |
| `steamcommunity.com/openid/login` | 302 → форма логина (флоу живой) |
| Нужен ключ: `GetPlayerSummaries`, `ResolveVanityURL`, `IEconService`, `IEconItems_730` | 400/403 |
| `ISteamApps/GetAppList` | 404 — удалён из API |

## Приложение B. Публичные профили и фикстуры (снято 2026-10-03)

| SteamID64 | Персона | Предметов | Фикстура |
|---|---|---|---|
| 76561199104360494 | Kyle | 82 (вкл. ★ Driver Gloves) | `evidence/inventory-76561199104360494-full.json` (167 KB) |
| 76561198646937711 | outsoseewhoya | 11 | `evidence/inventory-76561198646937711-full.json` (10 KB) |
| 76561199036154513 | crazy2 | 0 | `evidence/inventory-76561199036154513-full.json` |

На M0 фикстуры переезжают в `database/fixtures/steam/` и используются сидерами; «Kyle» — главный продавец
(живой синк), остальные — вспомогательные.

## Приложение C. Где что лежит

- Спека (этот файл): `~/platform/apps/__GIT/cs2-trading-backend/spec.md` (v0.3 lite)
- План-исследование: `~/research/cs2-trading-demo/plan-v0.1.md`
- Журнал запросов: `~/research/cs2-trading-demo/evidence/probe-log.md`
- Скилл: `steam-keyless-integration`

## Приложение D. Шпаргалка ответов (черновик; полная версия — M3)

1. **«Покажи, что не продашь дважды»** → кнопка Race (100 покупок → 1 успех) + `make test-race` + код OrderService.
2. **«Идемпотентность вебхуков?»** → подпись raw body, окно timestamp, дедуп `(provider,event_id)`, реплей безопасен.
3. **«Воркер упал?»** → задача вернётся по таймауту, обработчик идемпотентен; «отрава» → DLQ.
4. **«Оптимизация MySQL?»** → `make explain` (план горячего запроса), индексы в миграциях, N+1-контроль; объёмы — в другом проекте.
5. **«Redis?»** → кэш цен (stampede-защита), лок-мьютекс, rate limiter Steam.
6. **«RabbitMQ vs БД-очередь?»** → приоритеты/задержки/DLQ/независимый воркер; и когда БД-очередь достаточна.
7. **«Тесты конкурентности?»** → реальные параллельные процессы против MySQL; `make test-race`.
8. **«AI-агенты?»** → §11 + журнал «агент → поймал»; «ответственность за смерженный код на мне».
9. **«Реальные трейд-офферы?»** → знаю как: сессии/SteamGuard/ферма; интерфейс готов к замене.
10. **«Нагрузка?»** → механизмы (гонки, индексы, очереди, кэш); масштаб — рассказ + другой проект.
11. **«AWS?»** → RDS / ElastiCache / AmazonMQ / S3 + Grafana Cloud (рассказом).
12. **«Код-ревью культура?»** → PR-история, комментарии к агентским диффам, шаблон PR, ai-review в CI.
