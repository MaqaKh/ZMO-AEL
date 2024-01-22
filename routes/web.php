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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog-single', function () {
    return view('blog-single');
});
Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/error', function () {
    return view('error');
});
Route::get('/blog', function () {
    return view('blog');
});
