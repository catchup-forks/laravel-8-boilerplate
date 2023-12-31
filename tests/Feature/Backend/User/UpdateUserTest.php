<?php

declare(strict_types=1);

namespace Tests\Feature\Backend\User;

use App\Events\Backend\Auth\User\UserUpdated;
use App\Models\Auth\User;
use App\Notifications\Frontend\Auth\UserNeedsConfirmation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class UpdateUserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_admin_can_access_the_edit_user_page(): void
    {
        $this->loginAsAdmin();
        $user = factory(User::class)->create();

        $response = $this->get('/admin/auth/user/' . $user->id . '/edit');

        $response->assertStatus(200);
    }

    /** @test  */
    public function an_admin_can_resend_users_confirmation_email(): void
    {
        $this->loginAsAdmin();
        $user = factory(User::class)->states('unconfirmed')->create();
        Notification::fake();

        $this->get("/admin/auth/user/{$user->id}/account/confirm/resend");

        Notification::assertSentTo($user, UserNeedsConfirmation::class);
    }

    /** @test */
    public function a_user_can_be_updated(): void
    {
        $this->loginAsAdmin();
        $user = factory(User::class)->create();
        Event::fake();

        $this->assertNotEquals('John', $user->first_name);
        $this->assertNotEquals('Doe', $user->last_name);
        $this->assertNotEquals('john@example.com', $user->email);

        $this->patch("/admin/auth/user/{$user->id}", [
            'first_name' => 'John',
            'last_name'  => 'Doe',
            'email'      => 'john@example.com',
            'timezone'   => 'UTC',
            'roles'      => ['administrator'],
        ]);

        $this->assertEquals('John', $user->fresh()->first_name);
        $this->assertEquals('Doe', $user->fresh()->last_name);
        $this->assertEquals('john@example.com', $user->fresh()->email);

        Event::assertDispatched(UserUpdated::class);
    }
}
