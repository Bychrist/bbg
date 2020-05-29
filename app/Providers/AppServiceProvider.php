<?php

namespace App\Providers;

use App\News;
use App\User;
use App\Event;
use App\Profile;
use Illuminate\Support\Facades\Auth;
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
        view()->composer('*', function ($view) {
            $view->with('userProfile',  Auth::User());
        });


        view()->composer('*',function($view){
            $view->with('events', Event::all());

        });

        view()->composer('*',function($view){
            $view->with('news', News::orderBy('created_at','desc')->get());

        });

        view()->composer('*',function($view){
            $view->with('r_members', User::all());
            
        });

        view()->composer('*',function($view){
            $view->with('v_members', User::where('activated',1)->get());
            
        });

    }
}

