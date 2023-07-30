<?php

declare(strict_types=1);

namespace App\Events\Backend\Auth\User;

use Illuminate\Queue\SerializesModels;

/**
 * Class UserUnconfirmed.
 */
class UserUnconfirmed
{
    use SerializesModels;

    /**
     * @param $user
     */
    public function __construct(
        /**
         * @var
         */
        public $user
    )
    {
    }
}
