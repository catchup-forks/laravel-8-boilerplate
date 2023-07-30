<?php

declare(strict_types=1);

namespace App\Models\Auth\Traits\Attribute;

use Illuminate\Support\Facades\Hash;

/**
 * Trait UserAttribute.
 */
trait UserAttribute
{
    /**
     * @param $password
     */
    public function setPasswordAttribute($password): void
    {
        // If password was accidentally passed in already hashed, try not to double hash it
        if (
            (\strlen($password) === 60 && preg_match('#^\$2y\$#', $password)) ||
            (\strlen($password) === 95 && preg_match('#^\$argon2i\$#', $password))
        ) {
            $hash = $password;
        } else {
            $hash = Hash::make($password);
        }

        // Note: Password Histories are logged from the \App\Observer\User\UserObserver class
        $this->attributes['password'] = $hash;
    }

    public function getStatusLabelAttribute(): string
    {
        if ($this->isActive()) {
            return "<span class='badge badge-success'>" . __('labels.general.active') . '</span>';
        }

        return "<span class='badge badge-danger'>" . __('labels.general.inactive') . '</span>';
    }

    public function getConfirmedLabelAttribute(): string
    {
        if ($this->isConfirmed()) {
            if ($this->id != 1 && $this->id != auth()->id()) {
                return '<a href="' . route(
                    'admin.auth.user.unconfirm',
                    $this
                ) . '" data-toggle="tooltip" data-placement="top" title="' . __('buttons.backend.access.users.unconfirm') . '" name="confirm_item"><span class="badge badge-success" style="cursor:pointer">' . __('labels.general.yes') . '</span></a>';
            }

            return '<span class="badge badge-success">' . __('labels.general.yes') . '</span>';
        }

        return '<a href="' . route('admin.auth.user.confirm', $this) . '" data-toggle="tooltip" data-placement="top" title="' . __('buttons.backend.access.users.confirm') . '" name="confirm_item"><span class="badge badge-danger" style="cursor:pointer">' . __('labels.general.no') . '</span></a>';
    }

    public function getRolesLabelAttribute(): string
    {
        $roles = $this->getRoleNames()->toArray();

        if (\count($roles) > 0) {
            return implode(', ', array_map(static function ($item) : string {
                return ucwords($item);
            }, $roles));
        }

        return 'N/A';
    }

    public function getPermissionsLabelAttribute(): string
    {
        $permissions = $this->getDirectPermissions()->toArray();

        if (\count($permissions) > 0) {
            return implode(', ', array_map(static function ($item) : string {
                return ucwords($item['name']);
            }, $permissions));
        }

        return 'N/A';
    }

    /**
     * @return string
     */
    public function getFullNameAttribute()
    {
        return $this->last_name
            ? $this->first_name . ' ' . $this->last_name
            : $this->first_name;
    }

    /**
     * @return string
     */
    public function getNameAttribute()
    {
        return $this->full_name;
    }

    /**
     * @return mixed
     */
    public function getPictureAttribute()
    {
        return $this->getPicture();
    }

    public function getLoginAsButtonAttribute(): string
    {
        // If the admin is currently NOT spoofing a user
        if (session()->has('admin_user_id') && session()->has('temp_user_id')) {
            return '';
        }

        //Won't break, but don't let them "Login As" themselves
        if ($this->id != auth()->id()) {
            return '<a href="' . route(
                'admin.auth.user.login-as',
                $this
            ) . '" class="dropdown-item">' . __('buttons.backend.access.users.login_as', ['user' => e($this->full_name)]) . '</a> ';
        }

        return '';
    }

    public function getClearSessionButtonAttribute(): string
    {
        if ($this->id == auth()->id()) {
            return '';
        }

        if (config('session.driver') != 'database') {
            return '';
        }

        return '<a href="' . route('admin.auth.user.clear-session', $this) . '"
			 	 data-trans-button-cancel="' . __('buttons.general.cancel') . '"
                 data-trans-button-confirm="' . __('buttons.general.continue') . '"
                 data-trans-title="' . __('strings.backend.general.are_you_sure') . '"
                 class="dropdown-item" name="confirm_item">' . __('buttons.backend.access.users.clear_session') . '</a> ';
    }

    public function getShowButtonAttribute(): string
    {
        return '<a href="' . route('admin.auth.user.show', $this) . '" data-toggle="tooltip" data-placement="top" title="' . __('buttons.general.crud.view') . '" class="btn btn-info"><i class="fas fa-eye"></i></a>';
    }

    public function getEditButtonAttribute(): string
    {
        return '<a href="' . route('admin.auth.user.edit', $this) . '" data-toggle="tooltip" data-placement="top" title="' . __('buttons.general.crud.edit') . '" class="btn btn-primary"><i class="fas fa-edit"></i></a>';
    }

    public function getChangePasswordButtonAttribute(): string
    {
        return '<a href="' . route('admin.auth.user.change-password', $this) . '" class="dropdown-item">' . __('buttons.backend.access.users.change_password') . '</a> ';
    }

    public function getStatusButtonAttribute(): string
    {
        if ($this->id != auth()->id()) {
            switch ($this->active) {
                case 0:
                    return '<a href="' . route('admin.auth.user.mark', [
                            $this,
                            1,
                        ]) . '" class="dropdown-item">' . __('buttons.backend.access.users.activate') . '</a> ';

                case 1:
                    return '<a href="' . route('admin.auth.user.mark', [
                            $this,
                            0,
                        ]) . '" class="dropdown-item">' . __('buttons.backend.access.users.deactivate') . '</a> ';

                default:
                    return '';
            }
        }

        return '';
    }

    public function getConfirmedButtonAttribute(): string
    {
        if ($this->isConfirmed()) {
            return '';
        }

        if (config('access.users.requires_approval')) {
            return '';
        }

        return '<a href="' . route('admin.auth.user.account.confirm.resend', $this) . '" class="dropdown-item">' . __('buttons.backend.access.users.resend_email') . '</a> ';
    }

    public function getDeleteButtonAttribute(): string
    {
        if ($this->id == auth()->id()) {
            return '';
        }

        if ($this->id == 1) {
            return '';
        }

        return '<a href="' . route('admin.auth.user.destroy', $this) . '"
                 data-method="delete"
                 data-trans-button-cancel="' . __('buttons.general.cancel') . '"
                 data-trans-button-confirm="' . __('buttons.general.crud.delete') . '"
                 data-trans-title="' . __('strings.backend.general.are_you_sure') . '"
                 class="dropdown-item">' . __('buttons.general.crud.delete') . '</a> ';
    }

    public function getDeletePermanentlyButtonAttribute(): string
    {
        return '<a href="' . route('admin.auth.user.delete-permanently', $this) . '" name="confirm_item" class="btn btn-danger"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="' . __('buttons.backend.access.users.delete_permanently') . '"></i></a> ';
    }

    public function getRestoreButtonAttribute(): string
    {
        return '<a href="' . route('admin.auth.user.restore', $this) . '" name="confirm_item" class="btn btn-info"><i class="fas fa-refresh" data-toggle="tooltip" data-placement="top" title="' . __('buttons.backend.access.users.restore_user') . '"></i></a> ';
    }

    public function getActionButtonsAttribute(): string
    {
        if ($this->trashed()) {
            return '
				<div class="btn-group" role="group" aria-label="User Actions">
				  ' . $this->restore_button . '
				  ' . $this->delete_permanently_button . '
				</div>';
        }

        return '
    	<div class="btn-group" role="group" aria-label="User Actions">
		  ' . $this->show_button . '
		  ' . $this->edit_button . '

		  <div class="btn-group btn-group-sm" role="group">
			<button id="userActions" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  More
			</button>
			<div class="dropdown-menu" aria-labelledby="userActions">
			  ' . $this->clear_session_button . '
			  ' . $this->login_as_button . '
			  ' . $this->change_password_button . '
			  ' . $this->status_button . '
			  ' . $this->confirmed_button . '
			  ' . $this->delete_button . '
			</div>
		  </div>
		</div>';
    }
}
