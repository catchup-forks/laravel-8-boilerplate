<?php

declare(strict_types=1);

namespace App\Events\Backend\Auth\User;

use Illuminate\Queue\SerializesModels;

/**
 * Class UserSocialDeleted.
 */
class UserSocialDeleted
{
    use SerializesModels;

    /**
     * UserSocialDeleted constructor.
     *
     * @param $user
     * @param $social
     */
    public function __construct(
        /**
         * @var
         */
        public $user,
        /**
         * @var
         */
        public $social
    )
    {
    }
}
