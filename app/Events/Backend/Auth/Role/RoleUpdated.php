<?php

declare(strict_types=1);

namespace App\Events\Backend\Auth\Role;

use Illuminate\Queue\SerializesModels;

/**
 * Class RoleUpdated.
 */
class RoleUpdated
{
    use SerializesModels;

    /**
     * @param $role
     */
    public function __construct(
        /**
         * @var
         */
        public $role
    )
    {
    }
}
