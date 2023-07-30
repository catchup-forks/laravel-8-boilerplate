<?php

declare(strict_types=1);

namespace App\Providers;

use App\Listeners\Frontend\Auth\UserEventListener;
use App\Listeners\Backend\Auth\Role\RoleEventListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

/**
 * Class EventServiceProvider.
 */
class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        //
    ];

    /**
     * Class event subscribers.
     *
     * @var array
     */
    protected $subscribe = [
        // Frontend Subscribers

        // Auth Subscribers
        UserEventListener::class,

        // Backend Subscribers

        // Auth Subscribers
        \App\Listeners\Backend\Auth\User\UserEventListener::class,
        RoleEventListener::class,
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot(): void
    {
        parent::boot();

        //
    }
}
