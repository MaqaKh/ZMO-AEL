<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class ConstructionController extends Controller
{
    //

    public function index()
    {
        $filePath = public_path('construction/index-slider-burn.html');

        if (file_exists($filePath)) {
            return response(file_get_contents($filePath), 200)
                    ->header('Content-Type', 'text/html');
        } else {
            abort(404);
        }
    }
}
