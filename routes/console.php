<?php

use Illuminate\Support\Facades\Schedule;

// Обновление цен (пачками, из кэша рыночных данных) — каждые 15 минут
Schedule::command('prices:refresh')->everyFifteenMinutes()->withoutOverlapping();

// Поллинг состояний трейд-офферов у провайдера — каждую минуту
Schedule::command('trades:poll')->everyMinute()->withoutOverlapping();

// Снятие протухших резервов листингов — каждые 5 минут
Schedule::command('orders:expire-reservations')->everyFiveMinutes()->withoutOverlapping();

// Разбор накопившихся событий аналитики (агрегаты) — ежедневно
Schedule::command('report:daily --rollup')->dailyAt('03:30');
