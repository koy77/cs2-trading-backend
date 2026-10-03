# CS2 Trading Backend — все команды через make (как в rpg-liveops-backend).
# Полный список: make help

SHELL := /bin/sh
DC := docker compose

-include .env
export

.DEFAULT_GOAL := help

.PHONY: help ensure-env install up down build fresh demo demo-open test test-race lint stan phpcs \
	steam-sync race demo-webhook queue-fail queue-replay explain perf load-light report ledger-check \
	monitoring-up monitoring-down logs shell artisan mysql

help: ## помощь: список команд
	@grep -hE '^[a-zA-Z_-]+:.*?## ' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "  \033[36m%-16s\033[0m %s\n", $$1, $$2}'

ensure-env: ## .env из .env.example + APP_KEY
	@if [ ! -f .env ]; then cp .env.example .env; echo "✓ .env создан из .env.example"; fi
	@if ! grep -q '^APP_KEY=base64:' .env; then \
		key=$$(docker run --rm --entrypoint php dunglas/frankenphp:1-php8.4 -r "echo 'base64:'.base64_encode(random_bytes(32));"); \
		sed -i "s|^APP_KEY=.*|APP_KEY=$$key|" .env; \
		echo "✓ APP_KEY сгенерирован"; \
	fi

install: ensure-env ## composer update внутри app-образа
	$(DC) run --rm --no-deps --user "$$(id -u):$$(id -g)" -e COMPOSER_HOME=/tmp/composer app composer update --no-interaction --prefer-dist

up: ensure-env ## поднять стек (сборка при необходимости)
	$(DC) up -d --build

down: ## остановить стек
	$(DC) down

build: ## пересобрать образ app
	$(DC) build app

fresh: ## migrate:fresh --seed
	$(DC) exec app php artisan migrate:fresh --seed --force

demo: up fresh demo-open ## демо-старт: up + свежие данные + открыть панель
demo-open: ## открыть панель в браузере
	@(xdg-open "http://localhost:$${APP_PORT:-8090}" >/dev/null 2>&1 || true)

test: ## тесты Laravel (БД cs2_test)
	$(DC) exec app php artisan test
test-race: ## только concurrency-тесты (гонка за листинг)
	$(DC) exec app php artisan test --filter=RaceTest

lint: ## pint --dirty (формат изменённых)
	$(DC) exec app ./vendor/bin/pint --dirty
stan: ## phpstan (larastan, level 8)
	$(DC) exec app ./vendor/bin/phpstan analyse --no-progress --memory-limit=1G
phpcs: ## PHPCS PSR-12
	$(DC) exec app ./vendor/bin/phpcs --standard=phpcs.xml

steam-sync: ## синк инвентаря: make steam-sync [ID=76561...]
	$(DC) exec app php artisan steam:sync --mode=fixture $(if $(ID),--steam-id=$(ID),)

race: ## гонка за листинг: ATTEMPTS=50 (по умолчанию)
	$(DC) exec app php artisan demo:race --attempts=$${ATTEMPTS:-50}
demo-webhook: ## вебхук PSP: MODE=valid|dup|bad_sig|stale
	$(DC) exec app php artisan demo:webhook --mode=$${MODE:-valid}
queue-fail: ## отравить очередь (ретраи → failed)
	$(DC) exec app php artisan demo:queue-fail
queue-replay: ## вернуть failed-задачи в работу
	$(DC) exec app php artisan queue:retry all

explain: ## EXPLAIN горячего запроса (лента листингов)
	$(DC) exec app php artisan perf:explain
perf: ## perf-тест: сид PERF_ROWS (100k) + замеры индексов
	$(DC) exec app php artisan perf:run --rows=$${PERF_ROWS:-100000}
load-light: ## лёгкий load-smoke по /api/state
	$(DC) exec app php artisan load:light

report: ## отчёт: аналитика + A/B комиссии
	$(DC) exec app php artisan report:daily

ledger-check: ## проверить сходимость двойной записи (ledger)
	$(DC) exec app php artisan ledger:check

monitoring-up: ## поднять Prometheus + Grafana (профиль monitoring)
	$(DC) --profile monitoring up -d prometheus grafana
monitoring-down: ## остановить профиль monitoring
	$(DC) --profile monitoring down

logs: ## хвост логов всех сервисов
	$(DC) logs -f --tail=100
shell: ## shell в контейнере app
	$(DC) exec app sh
artisan: ## произвольный artisan: make artisan CMD="route:list"
	$(DC) exec app php artisan $(CMD)
mysql: ## mysql-cli в контейнере
	$(DC) exec mysql mysql -u$${DB_USERNAME:-cs2} -p$${DB_PASSWORD:-secret} $${DB_DATABASE:-cs2}
