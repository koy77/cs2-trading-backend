<?php

namespace Tests\Feature;

use App\Jobs\SyncSteamInventoryJob;
use App\Models\User;
use Database\Seeders\DemoSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SteamFixtureSyncTest extends TestCase
{
    use RefreshDatabase;

    public function test_fixture_sync_populates_inventory_and_is_idempotent(): void
    {
        $this->seed(DemoSeeder::class);

        $kyle = User::query()->firstWhere('slug', 'kyle');
        $count = $kyle->inventoryItems()->count();

        $this->assertGreaterThan(50, $count, 'в фикстуре Kyle должно быть много предметов');

        // Повторный синк не должен плодить дубликаты (updateOrCreate + unique).
        dispatch_sync(new SyncSteamInventoryJob($kyle->steamAccount->id, 'fixture'));

        $this->assertSame($count, $kyle->inventoryItems()->count());
        $this->assertNotNull($kyle->steamAccount->refresh()->last_sync_at);
    }

    public function test_every_seeded_user_has_steam_account(): void
    {
        $this->seed(DemoSeeder::class);

        foreach (User::query()->get() as $user) {
            $this->assertNotNull($user->steamAccount, "у {$user->slug} должен быть Steam-аккаунт");
        }

        $this->assertGreaterThan(0, User::query()->firstWhere('slug', 'kyle')->inventoryItems()->count());
        $this->assertSame(0, User::query()->firstWhere('slug', 'buyer')->inventoryItems()->count());
    }

    public function test_inventory_sync_endpoint_queues_job(): void
    {
        $this->seed(DemoSeeder::class);

        $kyle = User::query()->firstWhere('slug', 'kyle');

        $this->actingAs($kyle)
            ->postJson('/api/inventory/sync', ['mode' => 'fixture'])
            ->assertStatus(202)
            ->assertJsonPath('mode', 'fixture');
    }
}
