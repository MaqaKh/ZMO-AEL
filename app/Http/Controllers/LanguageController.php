<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Config;
class LanguageController extends Controller
{
    //

    public function switch($locale)
    {
        // Validate supported locales or handle any other logic

        // Set the application locale
        App::setLocale($locale);
       // Config::set('app.locale', $locale);
        // Store the locale in session
        session()->put('locale', $locale);
        //return dd(app()->getLocale());
        // Redirect back to the previous page or a specific route
        return redirect()->back();
    }
}
