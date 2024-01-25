<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index_page');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/product-detail', function () {
    return view('product-detail');
});

Route::get('/error', function () {
    return view('error');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/landing-single', function () {
    return view('landing-single');
});
