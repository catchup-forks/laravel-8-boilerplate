<?php

declare(strict_types=1);

namespace App\Listeners\Backend\Auth\User;

use Log;
use Illuminate\Events\Dispatcher;
use App\Events\Backend\Auth\User\UserCreated;
use App\Events\Backend\Auth\User\UserUpdated;
use App\Events\Backend\Auth\User\UserDeleted;
use App\Events\Backend\Auth\User\UserConfirmed;
use App\Events\Backend\Auth\User\UserUnconfirmed;
use App\Events\Backend\Auth\User\UserPasswordChanged;
use App\Events\Backend\Auth\User\UserDeactivated;
use App\Events\Backend\Auth\User\UserReactivated;
use App\Events\Backend\Auth\User\UserSocialDeleted;
use App\Events\Backend\Auth\User\UserPermanentlyDeleted;
use App\Events\Backend\Auth\User\UserRestored;
/**
 * Class UserEventListener.
 */
class UserEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event): void
    {
        Log::info('User Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event): void
    {
        Log::info('User Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event): void
    {
        Log::info('User Deleted');
    }

    /**
     * @param $event
     */
    public function onConfirmed($event): void
    {
        Log::info('User Confirmed');
    }

    /**
     * @param $event
     */
    public function onUnconfirmed($event): void
    {
        Log::info('User Unconfirmed');
    }

    /**
     * @param $event
     */
    public function onPasswordChanged($event): void
    {
        Log::info('User Password Changed');
    }

    /**
     * @param $event
     */
    public function onDeactivated($event): void
    {
        Log::info('User Deactivated');
    }

    /**
     * @param $event
     */
    public function onReactivated($event): void
    {
        Log::info('User Reactivated');
    }

    /**
     * @param $event
     */
    public function onSocialDeleted($event): void
    {
        Log::info('User Social Deleted');
    }

    /**
     * @param $event
     */
    public function onPermanentlyDeleted($event): void
    {
        Log::info('User Permanently Deleted');
    }

    /**
     * @param $event
     */
    public function onRestored($event): void
    {
        Log::info('User Restored');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param Dispatcher $events
     */
    public function subscribe($events): void
    {
        $events->listen(
            UserCreated::class,
            'App\Listeners\Backend\Auth\User\UserEventListener@onCreated'
        );

        $events->listen(
            UserUpdated::class,
            'App\Listeners\Backend\Auth\User\UserEventListener@onUpdated'
        );

        $events->listen(
            UserDeleted::class,
            'App\Listeners\Backend\Auth\User\UserEventListener@onDeleted'
        );

        $events->listen(
            UserConfirmed::class,
            'App\Listeners\Backend\Auth\User\UserEventListener@onConfirmed'
        );

        $events->listen(
            UserUnconfirmed::class,
            'App\Listeners\Backend\Auth\User\UserEventListener@onUnconfirmed'
        );

        $events->listen(
            UserPasswordChanged::class,
            'App\Listeners\Backend\Auth\User\UserEventListener@onPasswordChanged'
        );

        $events->listen(
            UserDeactivated::class,
            'App\Listeners\Backend\Auth\User\UserEventListener@onDeactivated'
        );

        $events->listen(
            UserReactivated::class,
            'App\Listeners\Backend\Auth\User\UserEventListener@onReactivated'
        );

        $events->listen(
            UserSocialDeleted::class,
            'App\Listeners\Backend\Auth\User\UserEventListener@onSocialDeleted'
        );

        $events->listen(
            UserPermanentlyDeleted::class,
            'App\Listeners\Backend\Auth\User\UserEventListener@onPermanentlyDeleted'
        );

        $events->listen(
            UserRestored::class,
            'App\Listeners\Backend\Auth\User\UserEventListener@onRestored'
        );
    }
}
