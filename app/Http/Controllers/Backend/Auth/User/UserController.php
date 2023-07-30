<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Auth\User;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Throwable;
use App\Exceptions\GeneralException;
use Exception;
use App\Events\Backend\Auth\User\UserDeleted;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Auth\User\ManageUserRequest;
use App\Http\Requests\Backend\Auth\User\StoreUserRequest;
use App\Http\Requests\Backend\Auth\User\UpdateUserRequest;
use App\Models\Auth\User;
use App\Repositories\Backend\Auth\PermissionRepository;
use App\Repositories\Backend\Auth\RoleRepository;
use App\Repositories\Backend\Auth\UserRepository;

/**
 * Class UserController.
 */
class UserController extends Controller
{
    /**
     * UserController constructor.
     */
    public function __construct(protected UserRepository $userRepository)
    {
    }

    /**
     * @return Factory|View
     */
    public function index(ManageUserRequest $request)
    {
        return view('backend.auth.user.index')
            ->withUsers($this->userRepository->getActivePaginated(25, 'id', 'asc'));
    }

    /**
     *
     * @return mixed
     */
    public function create(ManageUserRequest $request, RoleRepository $roleRepository, PermissionRepository $permissionRepository)
    {
        return view('backend.auth.user.create')
            ->withRoles($roleRepository->with('permissions')->get(['id', 'name']))
            ->withPermissions($permissionRepository->get(['id', 'name']));
    }

    /**
     *
     * @return mixed
     * @throws Throwable
     */
    public function store(StoreUserRequest $request)
    {
        $this->userRepository->create($request->only(
            'first_name',
            'last_name',
            'email',
            'password',
            'active',
            'confirmed',
            'confirmation_email',
            'roles',
            'permissions'
        ));

        return redirect()->route('admin.auth.user.index')->withFlashSuccess(__('alerts.backend.users.created'));
    }

    /**
     *
     * @return mixed
     */
    public function show(ManageUserRequest $request, User $user)
    {
        return view('backend.auth.user.show')
            ->withUser($user);
    }

    /**
     *
     * @return mixed
     */
    public function edit(ManageUserRequest $request, RoleRepository $roleRepository, PermissionRepository $permissionRepository, User $user)
    {
        return view('backend.auth.user.edit')
            ->withUser($user)
            ->withRoles($roleRepository->get())
            ->withUserRoles($user->roles->pluck('name')->all())
            ->withPermissions($permissionRepository->get(['id', 'name']))
            ->withUserPermissions($user->permissions->pluck('name')->all());
    }

    /**
     *
     * @return mixed
     * @throws GeneralException
     * @throws Throwable
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $this->userRepository->update($user, $request->only(
            'first_name',
            'last_name',
            'email',
            'roles',
            'permissions'
        ));

        return redirect()->route('admin.auth.user.index')->withFlashSuccess(__('alerts.backend.users.updated'));
    }

    /**
     *
     * @return mixed
     *
     * @throws Exception
     */
    public function destroy(ManageUserRequest $request, User $user)
    {
        $this->userRepository->deleteById($user->id);

        event(new UserDeleted($user));

        return redirect()->route('admin.auth.user.deleted')->withFlashSuccess(__('alerts.backend.users.deleted'));
    }
}
