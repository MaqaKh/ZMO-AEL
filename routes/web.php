<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();


Route::get('/', function () {
    return view('index');
})->name('/');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');




Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/service', function () {
    return view('service');
});
Route::get('/landing-single', function () {
    return view('landing_single');
});
Route::get('/product-detail', function () {
    return view('product_detail');
});

Route::get('/error', function () {
    return view('error');
});

Route::get('/services', function () {
    return view('services');
});




Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/{category}', [ProductController::class, 'filter'])->name('product.filter');

//Route::get('/category{key}', [CategoryController::class, 'filter'])->name('category.filter');
Route::get('/', [IndexController::class, 'index']);
Route::get('/product-details/{id}', [ProductController::class, 'show'])->name('product-details');
Route::get('lang/{locale}', [LanguageController::class, 'switch'])->name('lang.switch');

//ADMIN---------------------------------------------------------------------------------------------------------


Route::prefix('admin')->group(function () {
    // Define middleware if needed
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
        Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

        Route::get('/products', [AdminProductController::class, 'index'])->name('admin.products.index');
        Route::get('/products/create', [AdminProductController::class, 'create'])->name('products.create');

        Route::get('/products/edit/{id}', [AdminProductController::class, 'edit'])->name('products.edit');
        Route::post('/products/update/{id}', [AdminProductController::class, 'update'])->name('products.update');

        Route::post('/products/store', [AdminProductController::class, 'store'])->name('products.store');
        Route::delete('/products/{id}', [AdminProductController::class, 'destroy'])->name('products.destroy');


        //Update User Details
        Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
        Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');
        // Add more admin routes as needed
    });
});

//Language Translation


//Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

// Route::get('/lang/{locale}', function ($locale) {
//     if (! in_array($locale, ['en', 'ru'])) {
//         abort(400);
//     }

//     App::setLocale($locale);

//     //
// });



// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
