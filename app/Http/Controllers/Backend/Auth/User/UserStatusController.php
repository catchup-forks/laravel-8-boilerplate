<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Auth\User;

use App\Exceptions\GeneralException;
use Throwable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Auth\User\ManageUserRequest;
use App\Models\Auth\User;
use App\Repositories\Backend\Auth\UserRepository;

/**
 * Class UserStatusController.
 */
class UserStatusController extends Controller
{
    public function __construct(protected UserRepository $userRepository)
    {
    }

    /**
     * @return mixed
     */
    public function getDeactivated(ManageUserRequest $request)
    {
        return view('backend.auth.user.deactivated')
            ->withUsers($this->userRepository->getInactivePaginated(25, 'id', 'asc'));
    }

    /**
     * @return mixed
     */
    public function getDeleted(ManageUserRequest $request)
    {
        return view('backend.auth.user.deleted')
            ->withUsers($this->userRepository->getDeletedPaginated(25, 'id', 'asc'));
    }

    /**
     * @param                   $status
     *
     * @return mixed
     *
     * @throws GeneralException
     */
    public function mark(ManageUserRequest $request, User $user, $status)
    {
        $this->userRepository->mark($user, $status);

        return redirect()->route(
            $status == 1 ?
            'admin.auth.user.index' :
            'admin.auth.user.deactivated'
        )->withFlashSuccess(__('alerts.backend.users.updated'));
    }

    /**
     *
     * @return mixed
     * @throws GeneralException
     * @throws Throwable
     */
    public function delete(ManageUserRequest $request, User $deletedUser)
    {
        $this->userRepository->forceDelete($deletedUser);

        return redirect()->route('admin.auth.user.deleted')->withFlashSuccess(__('alerts.backend.users.deleted_permanently'));
    }

    /**
     *
     * @return mixed
     *
     * @throws GeneralException
     */
    public function restore(ManageUserRequest $request, User $deletedUser)
    {
        $this->userRepository->restore($deletedUser);

        return redirect()->route('admin.auth.user.index')->withFlashSuccess(__('alerts.backend.users.restored'));
    }
}
