<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Foundation\AliasLoader;
use Barryvdh\Debugbar\Facade;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

/**
 * Class AppServiceProvider.
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /*
         * Application locale defaults for various components
         *
         * These will be overridden by LocaleMiddleware if the session local is set
         */

        // setLocale for php. Enables ->formatLocalized() with localized values for dates
        setlocale(LC_TIME, config('app.locale_php'));

        // setLocale to use Carbon source locales. Enables diffForHumans() localized
        Carbon::setLocale(config('app.locale'));

        /*
         * Set the session variable for whether or not the app is using RTL support
         * For use in the blade directive in BladeServiceProvider
         */
        if (! app()->runningInConsole()) {
            if (config('locale.languages')[config('app.locale')][2]) {
                session(['lang-rtl' => true]);
            } else {
                session()->forget('lang-rtl');
            }
        }

        // Force SSL in production
        if ($this->app->environment() == 'production') {
            //URL::forceScheme('https');
        }

        // Set the default string length for Laravel5.4
        // https://laravel-news.com/laravel-5-4-key-too-long-error
        Schema::defaultStringLength(191);

        // Set the default template for Pagination to use the included Bootstrap 4 template
        AbstractPaginator::defaultView('pagination::bootstrap-4');
        AbstractPaginator::defaultSimpleView('pagination::simple-bootstrap-4');
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Sets third party service providers that are only needed on local/testing environments
        if ($this->app->environment() != 'production') {
            /**
             * Loader for registering facades.
             */
            $loader = AliasLoader::getInstance();

            // Load third party local aliases
            $loader->alias('Debugbar', Facade::class);
        }
    }
}
