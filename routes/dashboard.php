<?php

use Illuminate\Support\Facades\Route;

// dashboard routes

Route::prefix('dashboard')->name('dashboard.')->group(function () {

    // login routes
    Route::get('/login', 'AuthController@login')->name('login');
    Route::post('/attempt', 'AuthController@attempt')->name('attempt');

    Route::middleware('admin_auth')->group(function () {
        Route::get('/', 'HomeController@index')->name('index');
        Route::get('/logout', 'HomeController@logout')->name('logout');

        // routes of users
        Route::resource('users', 'UserController')->except(['show']);

        // routes of posts
        Route::resource('posts', 'PostController')->except(['show']);

        // routes of pages
        Route::resource('pages', 'PageController')->except(['show']);

        // routes of settings

        Route::prefix('settings')->name('settings.')->group(function () {
            Route::get('/edit', 'SettingController@edit')->name('edit');
            Route::put('/update/{id}', 'SettingController@update')->name('update');
        });
    });
});
