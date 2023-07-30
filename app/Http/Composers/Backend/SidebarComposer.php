<?php

declare(strict_types=1);

namespace App\Http\Composers\Backend;

use App\Repositories\Backend\Auth\UserRepository;
use Illuminate\View\View;

/**
 * Class SidebarComposer.
 */
class SidebarComposer
{
    /**
     * SidebarComposer constructor.
     */
    public function __construct(protected UserRepository $userRepository)
    {
    }

    /**
     * @return bool|mixed
     */
    public function compose(View $view): void
    {
        if (config('access.users.requires_approval')) {
            $view->with('pending_approval', $this->userRepository->getUnconfirmedCount());
        } else {
            $view->with('pending_approval', 0);
        }
    }
}
