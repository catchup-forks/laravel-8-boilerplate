<?php

declare(strict_types=1);

namespace App\Listeners\Backend\Auth\Role;

use Log;
use Illuminate\Events\Dispatcher;
use App\Events\Backend\Auth\Role\RoleCreated;
use App\Events\Backend\Auth\Role\RoleUpdated;
use App\Events\Backend\Auth\Role\RoleDeleted;
/**
 * Class RoleEventListener.
 */
class RoleEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event): void
    {
        Log::info('Role Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event): void
    {
        Log::info('Role Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event): void
    {
        Log::info('Role Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param Dispatcher $events
     */
    public function subscribe($events): void
    {
        $events->listen(
            RoleCreated::class,
            'App\Listeners\Backend\Auth\Role\RoleEventListener@onCreated'
        );

        $events->listen(
            RoleUpdated::class,
            'App\Listeners\Backend\Auth\Role\RoleEventListener@onUpdated'
        );

        $events->listen(
            RoleDeleted::class,
            'App\Listeners\Backend\Auth\Role\RoleEventListener@onDeleted'
        );
    }
}
