<?php

declare(strict_types=1);

namespace App\Listeners\Frontend\Auth;

use Log;
use Illuminate\Events\Dispatcher;
use App\Events\Frontend\Auth\UserLoggedIn;
use App\Events\Frontend\Auth\UserLoggedOut;
use App\Events\Frontend\Auth\UserRegistered;
use App\Events\Frontend\Auth\UserProviderRegistered;
use App\Events\Frontend\Auth\UserConfirmed;
use Carbon\Carbon;

/**
 * Class UserEventListener.
 */
class UserEventListener
{
    /**
     * @param $event
     */
    public function onLoggedIn($event): void
    {
        $ip_address = request()->getClientIp();

        // Update the logging in users time & IP
        $event->user->fill([
            'last_login_at' => Carbon::now()->toDateTimeString(),
            'last_login_ip' => $ip_address,
        ]);

        // Update the timezone via IP address
        $geoip = geoip($ip_address);

        if ($event->user->timezone !== $geoip['timezone']) {
            // Update the users timezone
            $event->user->fill([
                'timezone' => $geoip['timezone'],
            ]);
        }

        $event->user->save();

        Log::info('User Logged In: ' . $event->user->full_name);
    }

    /**
     * @param $event
     */
    public function onLoggedOut($event): void
    {
        Log::info('User Logged Out: ' . $event->user->full_name);
    }

    /**
     * @param $event
     */
    public function onRegistered($event): void
    {
        Log::info('User Registered: ' . $event->user->full_name);
    }

    /**
     * @param $event
     */
    public function onProviderRegistered($event): void
    {
        Log::info('User Provider Registered: ' . $event->user->full_name);
    }

    /**
     * @param $event
     */
    public function onConfirmed($event): void
    {
        Log::info('User Confirmed: ' . $event->user->full_name);
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param Dispatcher $events
     */
    public function subscribe($events): void
    {
        $events->listen(
            UserLoggedIn::class,
            'App\Listeners\Frontend\Auth\UserEventListener@onLoggedIn'
        );

        $events->listen(
            UserLoggedOut::class,
            'App\Listeners\Frontend\Auth\UserEventListener@onLoggedOut'
        );

        $events->listen(
            UserRegistered::class,
            'App\Listeners\Frontend\Auth\UserEventListener@onRegistered'
        );

        $events->listen(
            UserProviderRegistered::class,
            'App\Listeners\Frontend\Auth\UserEventListener@onProviderRegistered'
        );

        $events->listen(
            UserConfirmed::class,
            'App\Listeners\Frontend\Auth\UserEventListener@onConfirmed'
        );
    }
}
