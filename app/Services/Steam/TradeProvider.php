<?php

namespace App\Services\Steam;

use App\Models\Order;
use App\Models\TradeOffer;

/**
 * Провайдер исполнения сделки (трейд-офферы).
 *
 * В публичном Steam Web API создание/принятие трейд-офферов ОТСУТСТВУЕТ —
 * в проде это делается сессией аккаунта (SteamGuard/mobile confirm, trade-ферма).
 * В демо используется Fake; интерфейс позволяет подменить реализацию на реальную.
 */
interface TradeProvider
{
    public function createOffer(Order $order): TradeOffer;

    public function accept(TradeOffer $offer): void;

    public function decline(TradeOffer $offer): void;

    public function expire(TradeOffer $offer): void;
}
