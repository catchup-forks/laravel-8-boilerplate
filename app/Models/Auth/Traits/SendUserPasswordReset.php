<?php

declare(strict_types=1);

namespace App\Models\Auth\Traits;

use App\Notifications\Frontend\Auth\UserNeedsPasswordReset;

/**
 * Class SendUserPasswordReset.
 */
trait SendUserPasswordReset
{
    /**
     * Send the password reset notification.
     *
     * @param string $token
     */
    public function sendPasswordResetNotification($token): void
    {
        $this->notify(new UserNeedsPasswordReset($token));
    }
}
