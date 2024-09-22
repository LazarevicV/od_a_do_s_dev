<?php

namespace App\Providers;

use App\Models\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.public', function ($view) {
            $footer_parametri = Config::where('parametar_name', 'like', 'footer_%')->get();
            $view->with('footer_parametri', $footer_parametri);
        });
    }
}
