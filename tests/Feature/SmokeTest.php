<?php

namespace Tests\Feature;

use Tests\TestCase;

class SmokeTest extends TestCase
{
    public function test_health_endpoint_ok(): void
    {
        $this->get('/up')->assertOk();
    }
}
