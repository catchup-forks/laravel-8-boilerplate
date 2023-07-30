<?php

declare(strict_types=1);

namespace App\Http\Controllers\Frontend\Auth;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\UpdatePasswordRequest;
use App\Repositories\Frontend\Auth\UserRepository;

/**
 * Class PasswordExpiredController.
 */
class PasswordExpiredController extends Controller
{
    /**
     * @return Factory|View
     */
    public function expired()
    {
        return view('frontend.auth.passwords.expired');
    }

    /**
     *
     * @return mixed
     *
     * @throws GeneralException
     */
    public function update(UpdatePasswordRequest $request, UserRepository $userRepository)
    {
        $userRepository->updatePassword($request->only('old_password', 'password'), true);

        return redirect()->route('frontend.user.account')->withFlashSuccess(__('strings.frontend.user.password_updated'));
    }
}
