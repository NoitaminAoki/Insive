<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::share('adminAccount', User::where('role', 'admin')->firstOrFail());
        Blade::include('partial.input', 'input');
        Blade::include('partial.invalid_feedback', 'invalidFeedback');
    }
}
