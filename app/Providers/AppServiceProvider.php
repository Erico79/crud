<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\AnimalKingdom;

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
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('welcome', function($view) {
            $animal_kingdoms = AnimalKingdom::all();

            $view->with([
                'animal_kingdoms' => $animal_kingdoms
            ]);
        });
    }
}
