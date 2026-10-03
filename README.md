# CS2 Trading Backend — technical demo

Backend demo of a **CS2 skin trading platform** on **Laravel 13**: Steam sign-in and inventory sync
**without any Steam API keys**, marketplace orders that stay correct under **real concurrency**,
**HMAC-signed PSP webhooks with idempotency**, **RabbitMQ** queues, MySQL / Redis — everything in Docker.

The point of this repo: every requirement of the target vacancy is backed by a **runnable artifact**,
not by words. Clone → `make demo` → click through the panel (≈10 minutes).

> 🇷🇺 Полное ТЗ и сценарий показа на интервью: [`spec.md`](spec.md), [`docs/demo-script.md`](docs/demo-script.md).
> Agent-facing docs: [`CLAUDE.md`](CLAUDE.md), [`AGENTS.md`](AGENTS.md), [`docs/architecture.md`](docs/architecture.md).

---

## What's inside (and where it bites)

| Area | Artifact |
|---|---|
| **Keyless Steam** | Internal package [`koy77/steam-sdk`](packages/steam-sdk): Steam OpenID sign-in, public inventory feed, Steam Market prices, public Web API. `real ⇄ fixture` provider switch, shared Redis throttle gate, retries. No API key anywhere. |
| **Races** | `OrderService::buy()` — atomic claim (`UPDATE ... WHERE status='active'`, affected-rows check) + unique virtual-column index on active orders + ledger inside one transaction. `make race` fires N parallel processes: **exactly one winner**; `tests/Feature/RaceTest.php` proves it. |
| **Payments / webhooks** | `mock-psp` service emulates a PSP (modes `ok / timeout / http_500`). Inbound callbacks: HMAC-SHA256 over raw body + timestamp window + replay dedup → credit exactly once. Top-ups carry `Idempotency-Key` (replayed responses). Outbound postbacks: HMAC-signed, retried via queue. Double-entry ledger: `make ledger-check`. |
| **Queues** | RabbitMQ, 5 queues (`inventory.sync`, `prices.refresh`, `orders.fulfill`, `trades.poll`, `webhooks.out`), backoff retries, `failed_jobs` → `queue:retry all`. Poison-payload demo button. |
| **MySQL / Redis** | Indexed marketplace schema, `EXPLAIN` walkthrough (`make explain`), 100k-row perf lab (`make perf`: seed → measure → index → measure), Redis price cache with throttle, `Cache::lock`-style coordination. |
| **Quality gates** | Pint, **PHPStan (Larastan) level 8 — zero errors**, PHPCS (PSR-12), PHPUnit — 28 tests incl. concurrency + idempotency. All gates run in GitHub Actions. |
| **AI workflow** | `CLAUDE.md` / `AGENTS.md`, slash-commands (`.claude/commands/`), PostToolUse hook (auto-Pint), `.mcp.json` (read-only MySQL + fetch MCPs), optional AI PR review workflow. See [`docs/ai-workflow.md`](docs/ai-workflow.md). |
| **Ops** | FrankenPHP (classic mode, no NGINX/PHP-FPM — PHP edits apply instantly), Prometheus `/metrics` endpoint, Grafana dashboard (compose profile `monitoring`), light load smoke (`make load-light`). |

---

## Quickstart

Requirements: Docker + Docker Compose (that's all — PHP/MySQL/Redis/RabbitMQ live in containers).

```bash
make demo        # .env + APP_KEY + build + up + migrate:fresh --seed + open panel
```

Panel: **http://localhost:18090** · RabbitMQ UI: http://localhost:25674 (cs2/secret) · Grafana: `make monitoring-up` → http://localhost:13001

Demo logins (no Steam account needed): **kyle** (82-item public inventory fixture), **outso**, **buyer** ($100 demo balance).
Live Steam: "Войти через Steam" button → real Steam OpenID flow (keyless).

### Cheat sheet

```bash
make help            # all commands
make up / down       # start/stop the stack
make fresh           # migrate:fresh + demo seed (idempotent)
make test            # PHPUnit (uses cs2_test DB)
make lint / stan / phpcs   # Pint / PHPStan L8 / PSR-12
make race            # ATTEMPTS=30 parallel buys → exactly one winner
make demo-webhook MODE=dup   # same webhook ×10 → credited once (valid|dup|bad_sig|stale)
make perf            # 100k rows: EXPLAIN before/after index
make explain         # hot-query EXPLAIN on the fresh schema
make load-light      # p95/rps smoke against /api/state
make report          # analytics + A/B commission split
make monitoring-up   # Prometheus + Grafana profile
```

---

## Keyless Steam — what is actually used

| Endpoint | Purpose | Key needed |
|---|---|---|
| `steamcommunity.com/openid/login` | "Sign in through Steam" → SteamID64 | no (official) |
| `steamcommunity.com/inventory/{steamid}/730/2` | public CS2 inventory (assets, classids, names, tradable flags) | no |
| `steamcommunity.com/market/priceoverview?appid=730&...` | lowest/median price + volume per item | no |
| `steamcommunity.com/id/{vanity}/?xml=1` | vanity → SteamID64, persona | no |
| `api.steampowered.com` public methods (e.g. `GetNumberOfCurrentPlayers`, `GetNewsForApp`) | stats/news vitrine | no |

Deliberate boundaries (honest by design):

- `GetPlayerSummaries`, `ResolveVanityURL`, `IEconItems_730` → **require a Web API key** (and are not needed here).
- **Creating/accepting Steam trade offers has no official public API at all** (needs account session + SteamGuard).
  That's why the trade lifecycle runs through a `TradeProvider` interface with a `FakeTradeProvider`
  (`created → sent → accepted/declined/expired`) — and why CI never needs Steam credentials.
- Steam community endpoints are rate-limited / picky about cloud IPs — hence throttling, fixtures,
  and the `real | fixture` switch (fixture snapshots of **real public profiles** are committed).

---

## Demo scenarios (interview, ~10 min)

Full script with button-by-button flow: [`docs/demo-script.md`](docs/demo-script.md).

1. **Steam & inventory** — login, live/fixture sync through `inventory.sync` queue; market price for an item.
2. **Race** — `⚡ Гонка ×30` over one listing → exactly one order, `409` for the rest; ledger consistent.
3. **Webhooks** — `dup ×10`: same `event_id` ten times → balance changes once; `bad_sig`/`stale` → 401.
4. **Queues** — poison payload ×5 → retries → `failed_jobs` → replay; depth visible in RabbitMQ UI.
5. **Trade lifecycle** — buyer pays → offer (fake) → seller accepts/declines/expires → escrow settles or refunds; Grafana shows orders/GMV/queues.

---

## Architecture at a glance

```
Steam (keyless)          Browser panel (/, blade, no build step)
  OpenID / community ──► Laravel 13 (FrankenPHP, classic) ──► RabbitMQ worker ×1 (+scheduler)
  real | fixture            │  Identity · Inventory · Market · Trading · Payments
                            ▼
                    MySQL 8.4 (orders, ledger, inventory)   Redis 7 (cache, throttle, locks)
                            │
                    mock-PSP ◄──► HMAC webhooks / postbacks        Prometheus ◄─ /metrics ◄─ Grafana
```

Details: [`docs/architecture.md`](docs/architecture.md).

---

## Vacancy → artifact map

| Vacancy requirement | Where to look |
|---|---|
| Laravel: events/listeners, queues, DI, service providers, FormRequest | `AppServiceProvider`, `*ServiceProvider`, `app/Events·Listeners·Jobs`, `app/Http/Requests` |
| SOLID in practice | `TradeProvider` / `SteamGateway` interfaces, thin controllers, services + DI everywhere |
| MySQL indexes, EXPLAIN, heavy queries | `make explain`, `make perf`, migrations with composite indexes |
| Redis | market price cache, shared throttle gate, queue of demo actions |
| RabbitMQ + async | 5 queues, retries/backoff, failed_jobs replay (`docs/architecture.md` §queues) |
| Race conditions, locks, atomics | `OrderService::buy()`, `RaceTest`, `make race`, unique virtual index |
| REST + payments + HMAC + webhook idempotency | `PspWebhookService`, `PspSigner`, `IdempotencyKey` middleware, `WebhookTest` |
| Git / PR flow | 6+ focused commits, `.github/PULL_REQUEST_TEMPLATE.md` |
| Docker for local dev | `docker-compose.yml`, `Dockerfile`, `Makefile` (only `make` needed) |
| AI agents as daily tool | `CLAUDE.md`, `.claude/*`, `.mcp.json`, AI review workflow, `docs/ai-workflow.md` |
| PHPStan / PHPCS / tests | all gates green in `ci.yml` |
| Ubuntu / no NGINX | FrankenPHP classic mode (Caddy + PHP in one container) |
| Grafana / monitoring | `monitoring/` + compose profile |
| Antifraud / analytics / A/B | events table + `make report`, Pennant fee A/B (`FeeVariant`) |

## Docs

- [`spec.md`](spec.md) — full RU spec (scenarios, modules, interview Q&A appendix)
- [`docs/architecture.md`](docs/architecture.md) — module map, flows, invariants
- [`docs/demo-script.md`](docs/demo-script.md) — 10-minute live demo script (RU)
- [`docs/ai-workflow.md`](docs/ai-workflow.md) — how AI agents are wired into this repo (RU)
- [`docs/progress.md`](docs/progress.md) — build journal / current state

## License

MIT. Steam and CS2 are trademarks of Valve Corporation; this is a non-commercial technical demo using publicly available data only.
