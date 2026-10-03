<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Аналитика: доменные события (order created/paid/fulfilled/refunded, webhook, sync ...)
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('type', 64);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('ref_type', 32)->nullable();
            $table->unsignedBigInteger('ref_id')->nullable();
            $table->json('meta')->nullable();
            $table->timestamp('created_at')->useCurrent();

            $table->index(['type', 'created_at']);
            $table->index(['ref_type', 'ref_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
