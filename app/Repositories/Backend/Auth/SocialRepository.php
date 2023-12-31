<?php

declare(strict_types=1);

namespace App\Repositories\Backend\Access\User;

use App\Events\Backend\Auth\User\UserSocialDeleted;
use App\Exceptions\GeneralException;
use App\Models\Auth\SocialAccount;
use App\Models\Auth\User;

/**
 * Class SocialRepository.
 */
class SocialRepository
{
    /**
     *
     * @return bool
     *
     * @throws GeneralException
     */
    public function delete(User $user, SocialAccount $social)
    {
        if ($user->providers()->whereId($social->id)->delete()) {
            event(new UserSocialDeleted($user, $social));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.access.users.social_delete_error'));
    }
}
