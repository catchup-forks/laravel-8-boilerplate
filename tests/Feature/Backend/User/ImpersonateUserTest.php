<?php

declare(strict_types=1);

namespace Tests\Feature\Backend\User;

use App\Models\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ImpersonateUserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_admin_can_impersonate_other_users(): void
    {
        $user = factory(User::class)->create();
        $admin = $this->loginAsAdmin();

        $this->assertAuthenticatedAs($admin);

        $this->get("/admin/auth/user/{$user->id}/login-as");

        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function an_admin_can_exit_an_impersonation(): void
    {
        $user = factory(User::class)->create();
        $admin = $this->loginAsAdmin();

        $this->assertAuthenticatedAs($admin);

        $this->get("/admin/auth/user/{$user->id}/login-as");

        $this->assertAuthenticatedAs($user);

        $this->get('/logout-as');

        $this->assertAuthenticatedAs($admin);
    }

    /** @test */
    public function impersonation_of_himself_does_not_work(): void
    {
        $admin = $this->loginAsAdmin();

        $response = $this->get("/admin/auth/user/{$admin->id}/login-as");

        $response->assertSessionHas(['flash_danger' => 'Do not try to login as yourself.']);
    }
}
