<?php

namespace Test\Feature\Users;

use Tests\TestCase;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_page_can_be_render()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/users')
        ->assertSee('asdasdas')
        ->assertSee('gbelot2003@hotmail.com')
        ->assertOk();
    }
}
