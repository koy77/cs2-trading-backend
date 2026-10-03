<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('provider', 32)->default('psp');
            $table->string('external_id', 64)->nullable();
            $table->unsignedBigInteger('amount_cents');
            $table->string('currency', 8)->default('USD');
            $table->string('status', 16)->default('created'); // created|pending|paid|failed|refunded
            $table->string('idempotency_key', 128)->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->timestamps();

            $table->unique(['provider', 'external_id']);
        });

        Schema::create('ledger_entries', function (Blueprint $table) {
            $table->id();
            $table->uuid('entry_group')->index();
            $table->string('account', 64)->index(); // user:{id} | platform:escrow | platform:fees | psp:clearing
            $table->bigInteger('amount_cents');     // знаковая сумма; в группе дебет = кредит
            $table->string('ref_type', 32)->nullable();
            $table->unsignedBigInteger('ref_id')->nullable();
            $table->string('description')->nullable();
            $table->timestamp('created_at')->useCurrent();

            $table->index(['ref_type', 'ref_id']);
        });

        Schema::create('webhook_events', function (Blueprint $table) {
            $table->id();
            $table->string('provider', 32);
            $table->string('event_id', 64);
            $table->json('payload');
            $table->string('status', 16)->default('processed'); // processed|ignored|rejected
            $table->timestamp('processed_at')->nullable();
            $table->timestamps();

            $table->unique(['provider', 'event_id']);
        });

        Schema::create('idempotency_keys', function (Blueprint $table) {
            $table->id();
            $table->string('key', 128);
            $table->foreignId('user_id')->constrained();
            $table->string('route', 128);
            $table->string('request_hash', 64);
            $table->unsignedSmallInteger('response_status');
            $table->mediumText('response_body')->nullable();
            $table->timestamp('created_at')->useCurrent();

            $table->unique(['user_id', 'route', 'key'], 'uniq_idem_user_route_key');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('idempotency_keys');
        Schema::dropIfExists('webhook_events');
        Schema::dropIfExists('ledger_entries');
        Schema::dropIfExists('payments');
    }
};
