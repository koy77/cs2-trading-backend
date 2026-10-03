# architecture.md — карта модулей, потоков и инвариантов

Стек: Laravel 13 (PHP 8.4) · FrankenPHP classic (Caddy+PHP в одном контейнере, без NGINX/PHP-FPM) ·
MySQL 8.4 · Redis 7 · RabbitMQ 4 · mock-PSP · Prometheus/Grafana (профиль `monitoring`).

## Контейнеры

| Сервис | Роль |
|---|---|
| `app` | FrankenPHP, http://localhost:18090 (классический режим: правки PHP применяются сразу) |
| `worker` | `queue:work rabbitmq --queue=orders.fulfill,webhooks.out,trades.poll,prices.refresh,inventory.sync` |
| `scheduler` | `schedule:work` (поллинг сделок, протухание резервов, отчёты) |
| `mysql` / `redis` / `rabbitmq` | данные и брокер; host-порт MySQL 33061 |
| `mock-psp` | эмулятор внешнего PSP: charges, режимы ok/timeout/http_500, HMAC-колбэки |
| `prometheus`/`grafana` | профиль monitoring (дашборд провижионится из `monitoring/`) |

## Модули (по каталогам)

- **Identity** — Steam OpenID вход + демо-входы: `SteamAuthController`, `packages/steam-sdk/src/OpenId`.
- **Inventory** — синк инвентаря: `SyncSteamInventoryJob` (upsert по `(steam_account_id, asset_id)`),
  `SteamGateway` (real|fixture), фикстуры реальных публичных профилей в `database/fixtures/steam/`.
- **Market** — цены: `MarketService` (Redis-кэш TTL, источник live|fixture|fallback), `PriceParser`.
- **Trading** — ядро: `OrderService` (покупка/принятие/возврат), `ListingService`, `TradeProvider`
  (интерфейс) + `FakeTradeProvider` (жизненный цикл оффера: created→sent→accepted|declined|expired).
- **Payments** — `PspClient` (исходящие charge), `PspWebhookService` (приём колбэков),
  `PspSigner` (HMAC), `LedgerService` (двойная запись), `SendPostbackJob` (исходящие постбэки).
- **Ops/Demo** — панель (`panel.blade.php`), demo-команды (`app/Console/Commands/*`), метрики
  (`/metrics`), A/B комиссии (Pennant: `FeeVariant` a=3%, b=4%).

## Поток покупки (ключевой)

```
buyer ── POST /api/orders (+Idempotency-Key)
  │        IdempotencyKey middleware ──► повтор с тем же ключом отдаёт сохранённый ответ
  ▼
OrderService::buy()   [DB::transaction]
  1) atomic claim: UPDATE listings SET status='reserved', buyer_id=? WHERE id=? AND status='active'
                   affected ≠ 1 → 409 «уже зарезервирован» (гонку выигрывает ровно один)
  2) баланс покупателя (ledger) проверка в той же транзакции → недостаточно → 422
  3) order(paid) + проводки: user:-price → platform:escrow
  4) UPDATE inventory_items.status='listed'
  ▼ (после коммита)
OrderPaid event ─► QueueFulfillOrder ─► FulfillOrderJob (очередь orders.fulfill)
                                        └─ TradeProvider::createOffer (fake) → trade_offers(sent)
  ▼
seller: accept  → escrow:-price → seller:+proceeds, fees:+fee;  listing=sold; offer=accepted
        decline → escrow:-price → buyer:+price;                 listing=active; offer=declined
        expired → то же, что decline (авто-протухание: orders:expire-reservations)
```

Три слоя защиты «не продать дважды»: atomic claim → unique-индекс (`orders.active_listing_id`,
виртуальная колонка `if(status='paid', listing_id, null)`) → проверки в транзакции. Плюс отдельный
командный прогон `make race` (N процессов) и `RaceTest` с DatabaseTruncation (без транзакции теста).

## Поток вебхука PSP (ключевой)

```
mock-psp ── POST /webhooks/psp  (raw body, X-PSP-Signature: sha256=HMAC(body, secret), X-PSP-Timestamp)
  │  1) подпись (hash_equals) + окно timestamp (PSP_WEBHOOK_WINDOW) → иначе 401
  │  2) дедуп: insert в webhook_events(provider,event_id) UNIQUE → повтор = 200 {duplicate:true}
  │  3) payment.paid → payment=paid + проводки psp:clearing:-amount → user:+amount (один раз)
  ▼
идемпотентность на всех уровнях: подпись, event_id, статус платежа, идемпотентные проводки ledger
```

Исходящие постбэки (`SendPostbackJob`, очередь webhooks.out) подписаны тем же HMAC и ретраятся.

## Очереди (RabbitMQ)

| Очередь | Продюсер → потребитель | Ретраи |
|---|---|---|
| `inventory.sync` | кнопка/команда → SyncSteamInventoryJob | 5 tries, backoff |
| `prices.refresh` | prices:refresh/scheduler → RefreshPricesJob | 3 |
| `orders.fulfill` | OrderPaid listener → FulfillOrderJob | 5, backoff [5,15,45,120,300] |
| `trades.poll` | trades:poll/scheduler → PollTradesJob | 2 |
| `webhooks.out` | OrderFulfilled listener → SendPostbackJob | 5, backoff |

Провал после ретраев → `failed_jobs` (`make queue-fail` / `make queue-replay` — демо, видно в UI).

## Инварианты (не ломать)

1. На листинг — максимум один активный (paid) заказ; гонку выигрывает ровно один.
2. Ledger сходится: сумма каждой группы проводок = 0, сумма по всем = 0 (`make ledger-check`).
3. Вебхуки идемпотентны: повтор event_id не меняет баланс второй раз.
4. Синк инвентаря идемпотентен (upsert, без дублей).
5. Ни панель, ни API не требуют Steam-ключей: `real|fixture`, фикстуры в репо.
6. Секреты — только в `.env`; в коде — `config('services.*')`.

## Данные (основные таблицы)

`users` · `steam_accounts` · `inventory_items`(+uniques/индексы) · `listings`(индексы status+price) ·
`orders`(unique active_listing_id, fee_variant A/B) · `trade_offers`(unique order_id) ·
`payments` · `webhook_events`(unique provider+event_id) · `idempotency_keys`(unique user+route+key) ·
`ledger_entries`(двойная запись) · `events`(аналитика) · `features`(Pennant) · `perf_listings`(перф-лаборатория).

## Тестирование

- `tests/Unit` — PriceParser, PspSigner (HMAC/окно/подмена body).
- `tests/Feature` — Panel (контракт /api/state), OrderFlow (ledger, 409, идемпотентный replay, funds),
  Webhook (валид/дубль/подпись/окно/пayload), Race (ровно один победитель, ledger), SteamFixtureSync
  (идемпотентность синка).
- Окружение тестов фиксируется в `tests/TestCase.php` (см. CLAUDE.md §правила, п.4).

## Перф-лаборатория

`make explain` — EXPLAIN горячего запроса листингов. `make perf` — батч-сид `PERF_ROWS` (по умолчанию
100k) в `perf_listings` + замер «до/после» композитного индекса (`status, price_cents`). Ноутбук не
страдает: всё батчами, изолированная таблица.
