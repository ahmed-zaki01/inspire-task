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
    });
});
