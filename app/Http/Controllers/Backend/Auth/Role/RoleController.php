<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Auth\Role;

use App\Exceptions\GeneralException;
use Exception;
use App\Events\Backend\Auth\Role\RoleDeleted;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Auth\Role\ManageRoleRequest;
use App\Http\Requests\Backend\Auth\Role\StoreRoleRequest;
use App\Http\Requests\Backend\Auth\Role\UpdateRoleRequest;
use App\Models\Auth\Role;
use App\Repositories\Backend\Auth\PermissionRepository;
use App\Repositories\Backend\Auth\RoleRepository;

/**
 * Class RoleController.
 */
class RoleController extends Controller
{
    /**
     * @param RoleRepository       $roleRepository
     * @param PermissionRepository $permissionRepository
     */
    public function __construct(protected RoleRepository $roleRepository, protected PermissionRepository $permissionRepository)
    {
    }

    /**
     * @param ManageRoleRequest $request
     *
     * @return mixed
     */
    public function index(ManageRoleRequest $request)
    {
        return view('backend.auth.role.index')
            ->withRoles($this->roleRepository
                ->with('users', 'permissions')
                ->orderBy('id', 'asc')
                ->paginate(25));
    }

    /**
     * @param ManageRoleRequest $request
     *
     * @return mixed
     */
    public function create(ManageRoleRequest $request)
    {
        return view('backend.auth.role.create')
            ->withPermissions($this->permissionRepository->get());
    }

    /**
     * @param StoreRoleRequest $request
     *
     * @return mixed
     *
     * @throws GeneralException
     */
    public function store(StoreRoleRequest $request)
    {
        $this->roleRepository->create($request->only('name', 'associated-permissions', 'permissions', 'sort'));

        return redirect()->route('admin.auth.role.index')->withFlashSuccess(__('alerts.backend.roles.created'));
    }

    /**
     * @param ManageRoleRequest $request
     * @param Role              $role
     *
     * @return mixed
     */
    public function edit(ManageRoleRequest $request, Role $role)
    {
        if ($role->isAdmin()) {
            return redirect()->route('admin.auth.role.index')->withFlashDanger('You can not edit the administrator role.');
        }

        return view('backend.auth.role.edit')
            ->withRole($role)
            ->withRolePermissions($role->permissions->pluck('name')->all())
            ->withPermissions($this->permissionRepository->get());
    }

    /**
     * @param UpdateRoleRequest $request
     * @param Role              $role
     *
     * @return mixed
     *
     * @throws GeneralException
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        $this->roleRepository->update($role, $request->only('name', 'permissions'));

        return redirect()->route('admin.auth.role.index')->withFlashSuccess(__('alerts.backend.roles.updated'));
    }

    /**
     * @param ManageRoleRequest $request
     * @param Role              $role
     *
     * @return mixed
     *
     * @throws Exception
     */
    public function destroy(ManageRoleRequest $request, Role $role)
    {
        if ($role->isAdmin()) {
            return redirect()->route('admin.auth.role.index')->withFlashDanger(__('exceptions.backend.access.roles.cant_delete_admin'));
        }

        $this->roleRepository->deleteById($role->id);

        event(new RoleDeleted($role));

        return redirect()->route('admin.auth.role.index')->withFlashSuccess(__('alerts.backend.roles.deleted'));
    }
}
