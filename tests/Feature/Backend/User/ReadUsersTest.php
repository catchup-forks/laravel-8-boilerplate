<?php

declare(strict_types=1);

namespace Tests\Feature\Backend\User;

use App\Models\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReadUsersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_admin_can_access_active_users_page(): void
    {
        $this->loginAsAdmin();

        $response = $this->get('/admin/auth/user/create');

        $response->assertStatus(200);
    }

    /** @test */
    public function an_admin_can_view_single_user_page(): void
    {
        $this->loginAsAdmin();
        $user = factory(User::class)->create();

        $response = $this->get("/admin/auth/user/{$user->id}");

        $response->assertStatus(200);
    }
}
