# koy77/steam-sdk

Кейлесс-интеграция со Steam (без API-ключей): OpenID-логин, профили, инвентарь CS2,
рыночные цены и публичный Web API. Все запросы идут через общий
`RateLimitedHttpClient`: троттлинг, ретраи с backoff и браузерные заголовки.

## Установка

```bash
composer require koy77/steam-sdk
```

Локально (path repository) — в корневом `composer.json` приложения:

```json
{
    "repositories": [{ "type": "path", "url": "packages/steam-sdk" }],
    "require": { "koy77/steam-sdk": "*" }
}
```

## Быстрый старт

```php
use SteamSdk\Support\RateLimitedHttpClient;
use SteamSdk\OpenId\SteamOpenId;
use SteamSdk\Profile\ProfileClient;
use SteamSdk\Inventory\InventoryClient;
use SteamSdk\Market\PriceClient;
use SteamSdk\WebApi\PublicClient;

$http = new RateLimitedHttpClient(
    minIntervalSeconds: 1.0,                                  // пауза между запросами
    maxRetries: 2,                                            // ретраи 429/5xx/сеть: backoff 1с, 2с
    beforeRequest: function (): void { /* ваш троттлинг-хук */ },
);
```

### OpenID-логин

```php
$openId = new SteamOpenId($http);

// 1. Редирект пользователя в Steam:
$url = $openId->url('https://app.local/auth/steam/callback', 'https://app.local');

// 2. В callback-роуте:
$steamId64 = $openId->validate($request->query()); // SteamID64 или null
```

### Профиль, инвентарь, цена, онлайн

```php
$profile = (new ProfileClient($http))->byVanity('robinwalker');   // ?ProfileData
$profile = (new ProfileClient($http))->bySteamId('76561197960287930');

$inventory = (new InventoryClient($http))->fetch('76561197960287930', 730, 2, 5000);
if ($inventory->isSuccess()) {
    foreach ($inventory->getItems() as $item) {
        echo $item->getMarketHashName(), ' tradable=', (int) $item->isTradable(), PHP_EOL;
    }
}

$price = (new PriceClient($http))->price('AWP | Asiimov (Field-Tested)'); // ?PriceData
echo $price?->getLowest(); // "$31.42"

$count = (new PublicClient($http))->playerCount(730);   // ?int
$news  = (new PublicClient($http))->news(730, 3);       // list<array>
```

## Поведение

- `RateLimitedHttpClient` перед каждой попыткой вызывает `beforeRequest()`, держит паузу
  `minIntervalSeconds` между запросами, ретраит 429/5xx и сетевые ошибки (backoff 1с, 2с)
  и бросает `SteamSdk\Exceptions\SteamRequestException`, когда попытки исчерпаны.
- Клиенты верхнего уровня fail-soft: приватные/недоступные данные возвращаются как
  `null` (`ProfileClient`, `PriceClient`, `SteamOpenId::validate`) или invalid-снапшот
  (`InventorySnapshot` с `isSuccess() === false`), без исключений.
- Цены и объёмы сохраняются строками, как их отдаёт Steam (`"$31.42"`, `"1,234"`);
  исходный ответ доступен в `PriceData::getRaw()`.

## Тесты

Полностью офлайн (Guzzle `MockHandler` + фикстуры в `tests/fixtures/`):

```bash
composer install
vendor/bin/phpunit
```
