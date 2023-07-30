<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Auth\User;

use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Auth\User\ManageUserRequest;
use App\Models\Auth\User;
use App\Repositories\Backend\Auth\SessionRepository;

/**
 * Class UserSessionController.
 */
class UserSessionController extends Controller
{
    /**
     * @return mixed
     *
     * @throws GeneralException
     */
    public function clearSession(ManageUserRequest $request, SessionRepository $sessionRepository, User $user)
    {
        $sessionRepository->clearSession($user);

        return redirect()->back()->withFlashSuccess(__('alerts.backend.users.session_cleared'));
    }
}
