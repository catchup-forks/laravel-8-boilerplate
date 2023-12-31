<?php

declare(strict_types=1);

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'HomeController@index')->name('index');
Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact/send', 'ContactController@send')->name('contact.send');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], static function () : void {
    Route::group(['namespace' => 'User', 'as' => 'user.'], static function () : void {
        // User Dashboard Specific
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        // User Account Specific
        Route::get('account', 'AccountController@index')->name('account');
        // User Profile Specific
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');
    });
});
