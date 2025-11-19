<?php

namespace Tests\Feature;

use App\Livewire\Auth\Login;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_page_renders()
    {
        $this->get(route('login'))
            ->assertSuccessful()
            ->assertSeeLivewire(Login::class);
    }

    public function test_user_can_login_with_username()
    {
        $user = User::factory()->create([
            'username' => '1234567890',
            'password' => bcrypt('password'),
        ]);

        Livewire::test(Login::class)
            ->set('username', '1234567890')
            ->set('password', 'password')
            ->call('login')
            ->assertRedirect(route('landingpage.profile'));

        $this->assertAuthenticatedAs($user);
    }

    public function test_user_cannot_login_with_invalid_password()
    {
        $user = User::factory()->create([
            'username' => '1234567890',
            'password' => bcrypt('password'),
        ]);

        Livewire::test(Login::class)
            ->set('username', '1234567890')
            ->set('password', 'wrong-password')
            ->call('login')
            ->assertHasErrors(['username']);

        $this->assertGuest();
    }
}
