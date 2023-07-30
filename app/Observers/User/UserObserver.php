<?php

declare(strict_types=1);

namespace App\Observers\User;

use App\Models\Auth\User;

/**
 * Class UserObserver.
 */
class UserObserver
{
    /**
     * Listen to the User created event.
     *
     *
     */
    public function created(User $user): void
    {
        //$this->logPasswordHistory($user);
    }

    /**
     * Listen to the User updated event.
     *
     *
     */
    public function updated(User $user): void
    {
        // Only log password history on update if the password actually changed
        /*if ($user->isDirty('password')) {
            $this->logPasswordHistory($user);
        }*/
    }
}
