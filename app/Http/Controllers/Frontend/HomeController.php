<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Partner;
use App\Models\Client;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'products' => Product::orderBy('created_at', 'desc')->limit(3)->get(),
            'partners' => Partner::all(),
            'clients' => Client::all(),
        ];

        return view('frontend.home', $data);
    }
}
