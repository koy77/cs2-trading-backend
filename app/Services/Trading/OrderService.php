<?php

namespace App\Services\Trading;

use App\Events\OrderFulfilled;
use App\Events\OrderPaid;
use App\Events\OrderRefunded;
use App\Exceptions\InsufficientFundsException;
use App\Exceptions\OrderConflictException;
use App\Features\FeeVariant;
use App\Models\InventoryItem;
use App\Models\Listing;
use App\Models\Order;
use App\Models\User;
use App\Services\Money\LedgerService;
use App\Services\Steam\TradeProvider;
use Illuminate\Support\Facades\DB;
use Laravel\Pennant\Feature;

/**
 * Ядро трейдинга: покупка (гонки!), принятие/отклонение сделки, возвраты.
 *
 * Защита от гонок — три слоя:
 *  1) атомарный claim листинга (UPDATE ... WHERE status='active', affected=1);
 *  2) unique-индекс на активный заказ (orders.active_listing_id);
 *  3) баланс и проводки — в той же транзакции (инвариант: не уйти в минус).
 */
class OrderService
{
    public function __construct(
        private readonly LedgerService $ledger,
        private readonly TradeProvider $trades,
    ) {}

    public function buy(User $buyer, Listing $listing, ?string $idempotencyKey = null): Order
    {
        if ($buyer->id === $listing->seller_id) {
            throw new OrderConflictException('Нельзя купить собственный листинг');
        }

        $order = DB::transaction(function () use ($buyer, $listing, $idempotencyKey) {
            // 1) Атомарный claim: победитель — ровно один.
            $claimed = Listing::query()
                ->whereKey($listing->id)
                ->where('status', Listing::STATUS_ACTIVE)
                ->update([
                    'status' => Listing::STATUS_RESERVED,
                    'buyer_id' => $buyer->id,
                    'reserved_at' => now(),
                ]);

            if ($claimed !== 1) {
                throw new OrderConflictException('Листинг уже зарезервирован или продан');
            }

            // 2) Баланс покупателя (внутри той же транзакции).
            $price = (int) $listing->price_cents;

            if ($this->ledger->userBalance($buyer->id) < $price) {
                throw new InsufficientFundsException('Недостаточно средств: пополните баланс');
            }

            // 3) Комиссия (A/B-эксперимент через Pennant).
            $variant = Feature::for($buyer)->value(FeeVariant::class);
            $fee = intdiv($price * FeeVariant::feePercentFor((string) $variant), 10000);

            $order = Order::query()->create([
                'listing_id' => $listing->id,
                'buyer_id' => $buyer->id,
                'seller_id' => $listing->seller_id,
                'price_cents' => $price,
                'fee_cents' => $fee,
                'fee_variant' => (string) $variant,
                'status' => Order::STATUS_PAID,
                'idempotency_key' => $idempotencyKey,
                'paid_at' => now(),
            ]);

            // 4) Деньги: с баланса покупателя в escrow платформы.
            $this->ledger->post([
                "user:{$buyer->id}" => -$price,
                'platform:escrow' => $price,
            ], 'order', $order->id, "Покупка листинга #{$listing->id}");

            InventoryItem::query()->whereKey($listing->inventory_item_id)->update(['status' => 'listed']);

            return $order;
        });

        OrderPaid::dispatch($order);

        return $order;
    }

    /** Продавец принимает оффер: сделка завершена, деньги уходят продавцу. */
    public function accept(User $seller, Order $order): Order
    {
        $order = DB::transaction(function () use ($seller, $order) {
            $order = Order::query()->whereKey($order->id)->lockForUpdate()->firstOrFail();

            if ($order->seller_id !== $seller->id) {
                throw new OrderConflictException('Это не ваш заказ');
            }

            $offer = $order->offer;

            if ($order->status !== Order::STATUS_PAID || $offer === null || $offer->isFinal()) {
                throw new OrderConflictException('Сделка в неверном состоянии');
            }

            $this->trades->accept($offer);

            $order->update(['status' => Order::STATUS_FULFILLED, 'fulfilled_at' => now()]);

            $listing = $order->listing()->firstOrFail();
            $listing->update(['status' => Listing::STATUS_SOLD, 'sold_at' => now()]);
            InventoryItem::query()->whereKey($listing->inventory_item_id)->update(['status' => 'sold']);

            $this->ledger->post([
                'platform:escrow' => -$order->price_cents,
                "user:{$order->seller_id}" => $order->sellerProceedsCents(),
                'platform:fees' => $order->fee_cents,
            ], 'order', $order->id, "Завершение сделки #{$order->id}");

            return $order;
        });

        OrderFulfilled::dispatch($order);

        return $order;
    }

    /** Продавец отклоняет оффер (или оффер протух): деньги возвращаются покупателю. */
    public function refund(User $actor, Order $order, string $reason): Order
    {
        $order = DB::transaction(function () use ($actor, $order, $reason) {
            $order = Order::query()->whereKey($order->id)->lockForUpdate()->firstOrFail();

            if ($order->seller_id !== $actor->id) {
                throw new OrderConflictException('Это не ваш заказ');
            }

            if ($order->status !== Order::STATUS_PAID) {
                throw new OrderConflictException('Сделка в неверном состоянии');
            }

            $offer = $order->offer;

            if ($offer !== null && ! $offer->isFinal()) {
                $reason === 'expired'
                    ? $this->trades->expire($offer)
                    : $this->trades->decline($offer);
            }

            $order->update(['status' => Order::STATUS_REFUNDED, 'refunded_at' => now()]);

            $listing = $order->listing()->firstOrFail();
            $listing->update([
                'status' => Listing::STATUS_ACTIVE,
                'buyer_id' => null,
                'reserved_at' => null,
            ]);

            InventoryItem::query()->whereKey($listing->inventory_item_id)->update(['status' => 'in_inventory']);

            $this->ledger->post([
                'platform:escrow' => -$order->price_cents,
                "user:{$order->buyer_id}" => $order->price_cents,
            ], 'order', $order->id, "Возврат по заказу #{$order->id}");

            return $order;
        });

        OrderRefunded::dispatch($order, $reason);

        return $order;
    }
}
