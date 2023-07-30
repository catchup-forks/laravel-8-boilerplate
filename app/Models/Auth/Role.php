<?php

declare(strict_types=1);

namespace App\Models\Auth;

use App\Models\Auth\Traits\Attribute\RoleAttribute;
use App\Models\Auth\Traits\Method\RoleMethod;

/**
 * Class Role.
 */
class Role extends \Spatie\Permission\Models\Role
{
    use RoleAttribute;
    use RoleMethod;
}
