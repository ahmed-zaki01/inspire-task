<?php

use App\Http\Middleware\MenuFilter;
use Illuminate\Support\Facades\Route;

// routes of front namespace
Route::namespace('Front')->name('front.')->group(function () {


    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/posts/{id}', 'PostController@show')->name('show_post');

    Route::get('/custom/{slug}', 'PageController@getPage')->name('get_page')->middleware('menu_filter');
});
