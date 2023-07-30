<?php

declare(strict_types=1);

namespace Tests\Feature\Backend\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReadRolesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_admin_can_access_the_role_index_page(): void
    {
        $this->loginAsAdmin();

        $this->get('/admin/auth/role')->assertStatus(200);
    }
}
