<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('steam_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained()->cascadeOnDelete();
            $table->string('steam_id64', 17)->unique();
            $table->string('persona_name')->nullable();
            $table->string('avatar_url')->nullable();
            $table->timestamp('last_sync_at')->nullable();
            $table->timestamps();
        });

        Schema::create('inventory_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('steam_account_id')->constrained()->cascadeOnDelete();
            $table->string('asset_id', 32);
            $table->string('class_id', 32)->nullable();
            $table->string('instance_id', 32)->nullable();
            $table->unsignedInteger('amount')->default(1);
            $table->string('market_hash_name')->index();
            $table->string('item_type')->nullable();
            $table->string('name')->nullable();
            $table->string('icon_url', 512)->nullable();
            $table->boolean('tradable')->default(false);
            $table->boolean('marketable')->default(false);
            $table->string('status', 16)->default('in_inventory')->index(); // in_inventory|listed|sold
            $table->timestamps();

            $table->unique(['steam_account_id', 'asset_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventory_items');
        Schema::dropIfExists('steam_accounts');
    }
};
