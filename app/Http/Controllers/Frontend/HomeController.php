<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'products' => Product::limit(3)->get(),
        ];

        return view('frontend.home', $data);
    }
}
