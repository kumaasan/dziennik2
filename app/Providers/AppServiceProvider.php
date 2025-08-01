<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

    /**
     * Register any application services.
     */
    public function register(): void{
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void{
        Model::preventLazyLoading();

        View::composer('*', function($view){
            if(Auth::check()){
                Auth::user()->loadMissing('favouriteSubjects');
            }
        });

        if(Auth::check()){
            Auth::setUser(
              Auth::user()->load('favouriteSubjects'),
            );
        }
    }
}
