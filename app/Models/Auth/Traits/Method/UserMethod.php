<?php

declare(strict_types=1);

namespace App\Models\Auth\Traits\Method;

use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Container\EntryNotFoundException;
/**
 * Trait UserMethod.
 */
trait UserMethod
{
    /**
     * @return mixed
     */
    public function canChangeEmail()
    {
        return config('access.users.change_email');
    }

    /**
     * @return bool
     */
    public function canChangePassword()
    {
        return ! app('session')->has(config('access.socialite_session_name'));
    }

    /**
     * @param bool $size
     *
     * @return bool|UrlGenerator|mixed|string
     *
     * @throws EntryNotFoundException
     */
    public function getPicture($size = false)
    {
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'gravatar') {
            if (! $size) {
                $size = config('gravatar.default.size');
            }
            return gravatar()->get($this->email, ['size' => $size]);
        }
        if ($this->avatar_type == 'storage') {
            return url('storage/' . $this->avatar_location);
        }
        $social_avatar = $this->providers()->where('provider', $this->avatar_type)->first();
        if (!$social_avatar) {
            return false;
        }

        if (!strlen($social_avatar->avatar)) {
            return false;
        }

        return $social_avatar->avatar;
    }

    /**
     * @param $provider
     *
     * @return bool
     */
    public function hasProvider($provider): bool
    {
        foreach ($this->providers as $p) {
            if ($p->provider == $provider) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return mixed
     */
    public function isAdmin()
    {
        return $this->hasRole(config('access.users.admin_role'));
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @return bool
     */
    public function isConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * @return bool
     */
    public function isPending(): bool
    {
        return config('access.users.requires_approval') && ! $this->confirmed;
    }
}
