<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Todo\TodoRepository;
use App\Repositories\Todo\EloquentTodo;

use Illuminate\Support\Facades\Schema;


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
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton( TodoRepository::class, EloquentTodo::class );
    }
}
