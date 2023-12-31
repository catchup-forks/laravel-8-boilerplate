<?php

declare(strict_types=1);

namespace App\Repositories\Backend\Auth;

use App\Exceptions\GeneralException;
use App\Models\Auth\User;

/**
 * Class SessionRepository.
 */
class SessionRepository
{
    /**
     *
     * @return mixed
     * @throws GeneralException
     */
    public function clearSession(User $user)
    {
        if ($user->id === auth()->id()) {
            throw new GeneralException(__('exceptions.backend.access.users.cant_delete_own_session'));
        }

        if (config('session.driver') != 'database') {
            throw new GeneralException(__('exceptions.backend.access.users.session_wrong_driver'));
        }

        return $user->sessions()->delete();
    }
}
