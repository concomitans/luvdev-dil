<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
public function boot()
{
    View::composer('frontend.*.index', function ($view) {
        $view->with([
            'cssPath' => asset('frontend/_css/style.css'),
            'jsPath' => asset('frontend/_js/app.js')
        ]);
    });
}
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
