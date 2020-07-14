<?php

use Illuminate\Support\Facades\Route;

// routes of front namespace
Route::namespace('Front')->name('front.')->group(function () {


    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/posts/{id}', 'PostController@show')->name('show_post');
});
