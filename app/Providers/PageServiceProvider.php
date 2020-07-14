<?php

namespace App\Providers;

use App\Page;
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
            $view->with('pages', Page::select('title', 'slug')->get());
            //$view->with('settings', Setting::select('favicon', 'logo', 'alt_logo', 'name')->first());
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
