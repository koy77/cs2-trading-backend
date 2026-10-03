<?php

namespace App\Http\Controllers;

use App\Exceptions\InsufficientFundsException;
use App\Exceptions\OrderConflictException;
use App\Http\Requests\BuyRequest;
use App\Models\Listing;
use App\Models\Order;
use App\Models\User;
use App\Services\Trading\OrderService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(BuyRequest $request, OrderService $orders): JsonResponse
    {
        $listing = Listing::query()->findOrFail((int) $request->validated('listing_id'));

        try {
            $order = $orders->buy($this->actor($request), $listing, $request->header('Idempotency-Key'));
        } catch (OrderConflictException $e) {
            return response()->json(['error' => $e->getMessage()], 409);
        } catch (InsufficientFundsException $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }

        return response()->json([
            'order' => [
                'id' => $order->id,
                'status' => $order->status,
                'price_cents' => $order->price_cents,
                'fee_cents' => $order->fee_cents,
                'fee_variant' => $order->fee_variant,
            ],
        ], 201);
    }

    public function accept(Request $request, Order $order, OrderService $orders): JsonResponse
    {
        return $this->transition(fn () => $orders->accept($this->actor($request), $order));
    }

    public function decline(Request $request, Order $order, OrderService $orders): JsonResponse
    {
        return $this->transition(fn () => $orders->refund($this->actor($request), $order, 'declined'));
    }

    public function expire(Request $request, Order $order, OrderService $orders): JsonResponse
    {
        return $this->transition(fn () => $orders->refund($this->actor($request), $order, 'expired'));
    }

    /**
     * @param  callable(): Order  $action
     */
    private function transition(callable $action): JsonResponse
    {
        try {
            $order = $action();
        } catch (OrderConflictException $e) {
            return response()->json(['error' => $e->getMessage()], 409);
        }

        return response()->json([
            'order' => ['id' => $order->id, 'status' => $order->status],
        ]);
    }

    /** Действующий пользователь сессии (иначе 401). */
    private function actor(Request $request): User
    {
        $user = $request->user();

        if ($user === null) {
            abort(401, 'Требуется вход');
        }

        return $user;
    }
}
