<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoadHomeViewTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_load_home_view(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
