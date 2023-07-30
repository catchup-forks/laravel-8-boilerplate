<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Auth\User;

use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Auth\User\ManageUserRequest;
use App\Http\Requests\Backend\Auth\User\UpdateUserPasswordRequest;
use App\Models\Auth\User;
use App\Repositories\Backend\Auth\UserRepository;

/**
 * Class UserPasswordController.
 */
class UserPasswordController extends Controller
{
    public function __construct(protected UserRepository $userRepository)
    {
    }

    /**
     *
     * @return mixed
     */
    public function edit(ManageUserRequest $request, User $user)
    {
        return view('backend.auth.user.change-password')
            ->withUser($user);
    }

    /**
     *
     * @return mixed
     *
     * @throws GeneralException
     */
    public function update(UpdateUserPasswordRequest $request, User $user)
    {
        $this->userRepository->updatePassword($user, $request->only('password'));

        return redirect()->route('admin.auth.user.index')->withFlashSuccess(__('alerts.backend.users.updated_password'));
    }
}
