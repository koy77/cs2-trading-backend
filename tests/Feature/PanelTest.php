<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\DemoSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PanelTest extends TestCase
{
    use RefreshDatabase;

    public function test_panel_page_renders(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('CS2 Trading');
        $response->assertSee('/api/state');
    }

    public function test_state_endpoint_returns_contract(): void
    {
        $this->seed(DemoSeeder::class);

        $user = User::query()->firstWhere('slug', 'kyle');

        $response = $this->actingAs($user)->getJson('/api/state');

        $response->assertOk()->assertJsonStructure([
            'user' => ['id', 'slug', 'name'],
            'users',
            'status' => ['mysql', 'redis', 'rabbitmq', 'queues', 'queue_failed', 'steam', 'psp'],
            'steam' => ['steam_id64', 'persona_name', 'last_sync_at'],
            'balances' => ['self', 'escrow', 'fees', 'psp_clearing'],
            'inventory' => [['id', 'market_hash_name', 'tradable', 'status', 'listable']],
            'listings' => [['id', 'market_hash_name', 'price_cents', 'status', 'seller', 'can_buy']],
            'orders' => ['purchases', 'sales'],
            'ledger',
            'events',
        ]);
    }

    public function test_state_without_login_is_anonymous(): void
    {
        $this->seed(DemoSeeder::class);

        $this->getJson('/api/state')
            ->assertOk()
            ->assertJsonPath('user', null);
    }

    public function test_price_endpoint_returns_fixture_price(): void
    {
        $this->seed(DemoSeeder::class);

        $user = User::query()->firstWhere('slug', 'kyle');

        $this->actingAs($user)
            ->getJson('/api/price?hash='.urlencode('AK-47 | Redline (Field-Tested)'))
            ->assertOk()
            ->assertJsonStructure(['lowest', 'median', 'volume', 'source', 'lowest_cents'])
            ->assertJsonPath('source', 'fixture');
    }
}
