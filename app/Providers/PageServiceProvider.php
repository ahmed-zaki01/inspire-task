<?php

namespace App\Providers;

use App\Page;
use App\Setting;
use Illuminate\Support\ServiceProvider;

class PageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // get custom page from db
        view()->composer('front.inc._header', function ($view) {
            $view->with('pages', Page::select('title', 'slug', 'show')->get());
            $view->with('settings', Setting::select('site_name')->first());
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
