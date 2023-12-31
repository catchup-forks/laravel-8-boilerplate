<?php

declare(strict_types=1);

namespace App\Models\Auth\Traits\Attribute;

/**
 * Trait RoleAttribute.
 */
trait RoleAttribute
{
    public function getEditButtonAttribute(): string
    {
        return '<a href="' . route('admin.auth.role.edit', $this) . '" class="btn btn-primary"><i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="' . __('buttons.general.crud.edit') . '"></i></a>';
    }

    public function getDeleteButtonAttribute(): string
    {
        return '<a href="' . route('admin.auth.role.destroy', $this) . '"
			 data-method="delete"
			 data-trans-button-cancel="' . __('buttons.general.cancel') . '"
			 data-trans-button-confirm="' . __('buttons.general.crud.delete') . '"
			 data-trans-title="' . __('strings.backend.general.are_you_sure') . '"
			 class="btn btn-danger"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="' . __('buttons.general.crud.delete') . '"></i></a> ';
    }

    public function getActionButtonsAttribute(): string
    {
        if ($this->id == 1) {
            return 'N/A';
        }

        return '<div class="btn-group btn-group-sm" role="group" aria-label="User Actions">
			  ' . $this->edit_button . '
			  ' . $this->delete_button . '
			</div>';
    }
}
