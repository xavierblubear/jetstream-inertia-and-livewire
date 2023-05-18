<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoadAdminViewTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_view_admin_guest(): void
    {
        $response = $this->get('/admin/home');
        $response->assertRedirect('login');
    }
    /**
     * A basic feature test example.
     */
    public function test_view_admin_auth(): void
    {
        $user = User::factory()->create();
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/admin/home');
        $response->assertStatus(200);
    }
}
