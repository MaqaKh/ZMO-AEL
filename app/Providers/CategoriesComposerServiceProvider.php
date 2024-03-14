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

        View::composer('main_header', function ($view) {



            // $categories = Category::where('is_active', 1)->paginate(10);


            // $view->with('categories', $categories);


            $categories = Category::where('is_active', 1)
                ->get();

            // Initialize arrays for main categories and Antifreeze category
            $mainCategories = [];
           $antifreezeCategory = null;

            // Separate categories into main and Antifreeze
            foreach ($categories as $category) {
                if ($category->name_en === 'Antifreeze') {
                    $antifreezeCategory = $category;
                } else {
                    $mainCategories[] = $category;
                }
            }
           // return dd($antifreezeCategory);


            $view->with('categories', ['mainCategories' => $mainCategories, 'antifreezeCategory' => $antifreezeCategory]);



        });
    }
}
