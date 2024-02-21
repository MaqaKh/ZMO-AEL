<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
class CategoriesComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // View::composer('main-header', function ($view) {

        //     $view
        //         ->with('categories', Category::all());
        // });

         View::composer('main_header', function ( $view) {
            $categories=Category::all();
            $view->with('categories', $categories);
        });
    }
}
