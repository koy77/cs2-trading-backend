<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inventory_item_id')->constrained()->cascadeOnDelete();
            $table->foreignId('seller_id')->constrained('users');
            $table->unsignedBigInteger('price_cents');
            $table->string('status', 16)->default('active'); // active|reserved|sold|cancelled
            $table->foreignId('buyer_id')->nullable()->constrained('users');
            $table->timestamp('reserved_at')->nullable();
            $table->timestamp('sold_at')->nullable();
            $table->timestamps();

            $table->index(['status', 'price_cents']);
            $table->index(['seller_id', 'status']);
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('listing_id')->constrained();
            $table->foreignId('buyer_id')->constrained('users');
            $table->foreignId('seller_id')->constrained('users');
            $table->unsignedBigInteger('price_cents');
            $table->unsignedBigInteger('fee_cents')->default(0);
            $table->string('fee_variant', 8)->nullable(); // A/B-эксперимент комиссии: a|b
            $table->string('status', 24)->default('paid'); // paid|fulfilled|refunded|cancelled
            $table->string('idempotency_key', 128)->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->timestamp('fulfilled_at')->nullable();
            $table->timestamp('refunded_at')->nullable();
            $table->timestamps();

            // «Не продать дважды»: на листинг может быть только один АКТИВНЫЙ (paid) заказ.
            // Виртуальная колонка + unique-индекс — последняя линия обороны на уровне БД.
            $table->unsignedBigInteger('active_listing_id')->nullable()->virtualAs("if(status in ('paid'), listing_id, null)");
            $table->unique('active_listing_id');

            $table->index('status');
            $table->index('buyer_id');
            $table->index('seller_id');
        });

        Schema::create('trade_offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->unique()->constrained();
            $table->string('provider', 32)->default('fake');
            $table->string('provider_offer_id', 64)->unique();
            $table->string('state', 16)->default('created'); // created|sent|accepted|declined|expired
            $table->timestamps();

            $table->index('state');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trade_offers');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('listings');
    }
};
