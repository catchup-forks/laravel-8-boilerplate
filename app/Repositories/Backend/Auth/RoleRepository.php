<?php

declare(strict_types=1);

namespace App\Repositories\Backend\Auth;

use Illuminate\Database\Eloquent\Model;
use App\Events\Backend\Auth\Role\RoleCreated;
use App\Events\Backend\Auth\Role\RoleUpdated;
use App\Exceptions\GeneralException;
use App\Models\Auth\Role;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class RoleRepository.
 */
class RoleRepository extends BaseRepository
{
    public function model(): string
    {
        return Role::class;
    }

    /**
     *
     *
     * @throws GeneralException
     */
    public function create(array $data): Role
    {
        // Make sure it doesn't already exist
        if ($this->roleExists($data['name'])) {
            throw new GeneralException('A role already exists with the name ' . $data['name']);
        }

        if (! isset($data['permissions']) || ! \count($data['permissions'])) {
            $data['permissions'] = [];
        }

        //See if the role must contain a permission as per config
        if (!config('access.roles.role_must_contain_permission')) {
            return DB::transaction(function () use ($data): Model {
                $role = parent::create(['name' => strtolower($data['name'])]);

                if ($role) {
                    $role->givePermissionTo($data['permissions']);

                    event(new RoleCreated($role));

                    return $role;
                }

                throw new GeneralException(trans('exceptions.backend.access.roles.create_error'));
            });
        }

        if (\count($data['permissions']) !== 0) {
            return DB::transaction(function () use ($data): Model {
                $role = parent::create(['name' => strtolower($data['name'])]);

                if ($role) {
                    $role->givePermissionTo($data['permissions']);

                    event(new RoleCreated($role));

                    return $role;
                }

                throw new GeneralException(trans('exceptions.backend.access.roles.create_error'));
            });
        }

        throw new GeneralException(__('exceptions.backend.access.roles.needs_permission'));
    }

    /**
     *
     * @return mixed
     *
     * @throws GeneralException
     */
    public function update(Role $role, array $data)
    {
        if ($role->isAdmin()) {
            throw new GeneralException('You can not edit the administrator role.');
        }

        // If the name is changing make sure it doesn't already exist
        if ($role->name !== strtolower($data['name']) && $this->roleExists($data['name'])) {
            throw new GeneralException('A role already exists with the name ' . $data['name']);
        }

        if (! isset($data['permissions']) || ! \count($data['permissions'])) {
            $data['permissions'] = [];
        }

        //See if the role must contain a permission as per config
        if (!config('access.roles.role_must_contain_permission')) {
            return DB::transaction(static function () use ($role, $data) : Role {
                if ($role->update([
                    'name' => strtolower($data['name']),
                ])) {
                    $role->syncPermissions($data['permissions']);

                    event(new RoleUpdated($role));

                    return $role;
                }

                throw new GeneralException(trans('exceptions.backend.access.roles.update_error'));
            });
        }

        if (\count($data['permissions']) !== 0) {
            return DB::transaction(static function () use ($role, $data) : Role {
                if ($role->update([
                    'name' => strtolower($data['name']),
                ])) {
                    $role->syncPermissions($data['permissions']);

                    event(new RoleUpdated($role));

                    return $role;
                }

                throw new GeneralException(trans('exceptions.backend.access.roles.update_error'));
            });
        }

        throw new GeneralException(__('exceptions.backend.access.roles.needs_permission'));
    }

    /**
     * @param $name
     */
    protected function roleExists($name): bool
    {
        return $this->model
                ->where('name', strtolower($name))
                ->count() > 0;
    }
}
