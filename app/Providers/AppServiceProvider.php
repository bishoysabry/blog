<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use Auth;
use App\Post;
use App\Comment;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        //View::share('auth',Auth::user());
        View::composer('*',function($view){
          $view->with('auth',Auth::user());
        });
        View::composer('*',function($view){
          $view->with('comments',Comment::all());
        });
        View::composer('*',function($view){
          $view->with('posts',Post::all());
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
