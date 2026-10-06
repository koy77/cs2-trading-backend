# CS2 Trading Backend — technical demo

[![CI](https://github.com/koy77/cs2-trading-backend/actions/workflows/ci.yml/badge.svg)](https://github.com/koy77/cs2-trading-backend/actions/workflows/ci.yml)
![PHP](https://img.shields.io/badge/PHP-8.4-777bb4)
![Laravel](https://img.shields.io/badge/Laravel-13-ff2d20)
![Docker](https://img.shields.io/badge/Docker-compose-2496ed)

[🇷🇺 Русский](README.md) · **🇬🇧 English**

Backend demo of a **CS2 skin trading platform** on **Laravel 13**: Steam sign-in and inventory sync
**without any Steam API keys**, marketplace orders that stay correct under **real concurrency**,
**HMAC-signed PSP webhooks with idempotency**, **RabbitMQ** queues, MySQL / Redis — everything in Docker.

Clone → `make demo` → click through the panel. Every item below is a runnable artifact, not a promise.

![Architecture: Steam, Laravel app, mock-PSP, MySQL / Redis / RabbitMQ](assets/overview.svg)

---

## What's inside (and where it bites)

| Area | Artifact |
|---|---|
| **Keyless Steam** | Internal package [`koy77/steam-sdk`](packages/steam-sdk): Steam OpenID sign-in, public inventory feed, Steam Market prices, public Web API. `real ⇄ fixture` provider switch, shared Redis throttle gate, retries. No API key anywhere. |
| **Races** | `OrderService::buy()` — atomic claim (`UPDATE ... WHERE status='active'`, affected-rows check) + unique virtual-column index on active orders + ledger inside one transaction. `make race` fires N parallel processes: **exactly one winner**; `tests/Feature/RaceTest.php` proves it. |
| **Payments / webhooks** | `mock-psp` service emulates a PSP (modes `ok / timeout / http_500`). Inbound callbacks: HMAC-SHA256 over raw body + timestamp window + replay dedup → credit exactly once. Top-ups carry `Idempotency-Key` (replayed responses). Outbound postbacks: HMAC-signed, retried via queue. Double-entry ledger: `make ledger-check`. |
| **Queues** | RabbitMQ, 5 queues (`inventory.sync`, `prices.refresh`, `orders.fulfill`, `trades.poll`, `webhooks.out`), backoff retries, `failed_jobs` → `make queue-replay`. Poison-payload demo button in the panel. |
| **MySQL / Redis** | Indexed marketplace schema, `EXPLAIN` walkthrough (`make explain`), 100k-row perf lab (`make perf`: seed → measure → index → measure), Redis price cache with throttle. |
| **Quality gates** | Pint, **PHPStan (Larastan) level 8 — zero errors**, PHPCS (PSR-12), PHPUnit — 28 tests incl. concurrency + idempotency. All gates run in GitHub Actions. |
| **AI workflow** | `CLAUDE.md` / `AGENTS.md`, slash-commands (`.claude/commands/`), PostToolUse hook (auto-Pint), `.mcp.json` (read-only MySQL + fetch MCPs), optional AI PR review (`.github/workflows/ai-review.yml`). |
| **Ops** | FrankenPHP (classic mode, no NGINX/PHP-FPM — PHP edits apply instantly), Prometheus `/metrics` endpoint, Grafana dashboard (compose profile `monitoring`), light load smoke (`make load-light`). |

---

## Quickstart

Requirements: Docker + Docker Compose (that's all — PHP / MySQL / Redis / RabbitMQ live in containers).

```bash
make demo        # .env + APP_KEY + build + up + migrate:fresh --seed + open panel
```

Panel: **http://localhost:18090** · RabbitMQ UI: http://localhost:25674 (cs2/secret) · Grafana: `make monitoring-up` → http://localhost:13001

Demo logins (no Steam account needed): **kyle** (82-item public inventory fixture), **outso**, **buyer** ($100 demo balance).
Live Steam: "Sign in through Steam" button → real Steam OpenID flow (keyless).

### Cheat sheet

```bash
make help            # all commands
make up / down       # start/stop the stack
make fresh           # migrate:fresh + demo seed (idempotent)
make test            # PHPUnit (uses cs2_test DB)
make lint / stan / phpcs   # Pint / PHPStan L8 / PSR-12
make race            # ATTEMPTS=30 parallel buys → exactly one winner
make demo-webhook MODE=dup   # same webhook ×10 → credited once (valid|dup|bad_sig|stale)
make queue-fail / queue-replay / queue-flush  # poison demo: fail → failed_jobs → replay
make perf            # 100k rows: EXPLAIN before/after index
make explain         # hot-query EXPLAIN on the fresh schema
make load-light      # p95/rps smoke against /api/state
make report          # analytics + A/B commission split
make ledger-check    # double-entry consistency check
make monitoring-up   # Prometheus + Grafana profile
```

---

## Keyless Steam — what is actually used

![Steam without API keys: what is called directly, what the SDK wraps, what is impossible without a session and therefore mocked](assets/steam-keyless.svg)

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

## Reliability: races, webhooks, ledger

![Invariants under load: race winner, webhook replays, double-entry ledger](assets/safety.svg)

- **Races.** 30 parallel buys of one listing → exactly one order; the rest get `409`.
  Atomic claim + unique-index backstop + ledger write in a single transaction.
- **Webhooks.** HMAC over the raw body, timestamp window, dedup on `(provider, event_id)`: the same
  callback ×10 → one credit; `bad_sig` / `stale` → `401`. Outbound postbacks — retried via queue.
- **Money.** Double-entry: every entry group sums to zero (`make ledger-check`).
- **Speed.** 100k rows: 25.3 ms → 0.4 ms (×63) after the index (`make perf`).

## Queues and retries

![5 RabbitMQ queues: web and cron dispatch jobs, one worker with backoff retries, failures into failed_jobs and replay](assets/queues.svg)

- Five queues, including the idempotent `inventory.sync`, the caching `prices.refresh` and the signed
  outbound `webhooks.out`; a single worker — concurrency is not hand-waved.
- A job that keeps failing lands in `failed_jobs`; `make queue-replay` puts it back to work —
  the poison-message demo: first delivery fails, the retry succeeds.

## Deal lifecycle

![Buyer pays → escrow → trade offer → settle or refund; double-entry ledger at every step](assets/deal.svg)

- Buyer pays → funds are locked in **escrow**; the trade offer is created through the `TradeProvider`
  (`FakeTradeProvider`): `created → sent → accepted / declined / expired`.
- `accepted` → **settle**: seller receives the price minus the fee, the fee goes to the platform.
- `declined` / `expired` → **refund**: escrow returns to the buyer in full.
- The fee is A/B-tested via Pennant (`make report` aggregates the split).

---

## Demo scenarios (~10 minutes)

![Demo route: five scenes from Steam sync to green gates](assets/demo-route.svg)

1. **Steam & inventory** — login, live/fixture sync through `inventory.sync` queue; market price for an item.
2. **Race** — `⚡ Race ×30` over one listing → exactly one order, `409` for the rest; ledger consistent.
3. **Webhooks** — `dup ×10`: same `event_id` ten times → balance changes once; `bad_sig` / `stale` → 401.
4. **Queues** — poison payload ×5 → retries → `failed_jobs` → replay; depth visible in RabbitMQ UI.
5. **Deal** — buyer pays → offer (fake) → seller accepts/declines/expires → escrow settles or refunds; Grafana shows orders/GMV/queues.

---

## Stack & repo layout

**Stack:** PHP 8.4 · Laravel 13 · FrankenPHP (classic) · MySQL 8.4 · Redis 7 · RabbitMQ 4 · Docker Compose · PHPUnit / Pint / PHPStan L8 / PHPCS · Prometheus + Grafana.

```
app/                 Laravel code: services, jobs, panel & API controllers
packages/steam-sdk/  internal package: Steam OpenID / inventory / prices (keyless)
services/mock-psp/   payment provider emulator (ok / timeout / http_500)
database/            migrations + demo seeders
tests/               PHPUnit: races, webhooks, ledger, SDK
assets/              SVG diagrams for this README
docker/ monitoring/  FrankenPHP image, Prometheus / Grafana
Makefile             full lifecycle: make help
```

Agent-facing files also live in the repo: `CLAUDE.md` / `AGENTS.md` / `.claude/` / `.mcp.json`.

## License

MIT. Steam and CS2 are trademarks of Valve Corporation; this is a non-commercial technical demo using publicly available data only.
