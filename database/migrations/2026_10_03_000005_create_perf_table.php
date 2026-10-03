<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Витрина для perf-теста (make perf): изолированная таблица, чтобы
     * демонстрировать EXPLAIN и эффект индексов, не трогая демо-данные.
     * Сид — лёгкий батч-инсерт (100k строк за секунды).
     */
    public function up(): void
    {
        Schema::create('perf_listings', function (Blueprint $table) {
            $table->id();
            $table->string('status', 16);
            $table->unsignedBigInteger('price_cents');
            $table->string('market_hash_name');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('perf_listings');
    }
};
