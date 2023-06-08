<?php

namespace App\Providers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Paginator::useBootstrap();

        // Gate::define('admin', function(User $user){
        //     return $user->level === '1';
        // });

        view()->composer('*', function (View $view) {
            if (Auth::check()) {
                $userLevel = Auth::user()->level;
                $view->with('userLevel', $userLevel);
            }
        });
    }
}
