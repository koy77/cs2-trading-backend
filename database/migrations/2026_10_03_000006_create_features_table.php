<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Таблица фич для Laravel Pennant (A/B-эксперимент комиссии, см. FeeVariant).
 * Схема совпадает с pennant-овской; guarded, чтобы не конфликтовать с пакетной миграцией.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('features')) {
            Schema::create('features', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('scope');
                $table->text('value');
                $table->timestamps();

                $table->unique(['name', 'scope']);
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('features');
    }
};
