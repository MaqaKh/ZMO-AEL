<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\HomeController;
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




Route::get('/product', [ProductController::class,'index'])->name('product');
Route::get('/', [IndexController::class,'index']);
Route::get('/product-details/{id}', [ProductController::class,'show'])->name('product-details');
Route::get('lang/{locale}', [LanguageController::class, 'switch'])->name('lang.switch');

//ADMIN---------------------------------------------------------------------------------------------------------




//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

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
