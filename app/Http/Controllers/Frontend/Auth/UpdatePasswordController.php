<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend\Auth;

use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\UpdatePasswordRequest;
use App\Repositories\Frontend\Auth\UserRepository;

/**
 * Class UpdatePasswordController.
 */
class UpdatePasswordController extends Controller
{
    /**
     * ChangePasswordController constructor.
     */
    public function __construct(protected UserRepository $userRepository)
    {
    }

    /**
     *
     * @return mixed
     * @throws GeneralException
     */
    public function update(UpdatePasswordRequest $request)
    {
        $this->userRepository->updatePassword($request->only('old_password', 'password'));

        return redirect()->route('frontend.user.account')->withFlashSuccess(__('strings.frontend.user.password_updated'));
    }
}
