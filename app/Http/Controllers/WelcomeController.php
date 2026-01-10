<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $data = [
            'title' => env('APP_NAME'),
            'products' => Product::latest()->take(3)->get(),
        ];

        return view('welcome', $data);
    }
}
