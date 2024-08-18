<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Product\Service;
use App\Models\Product\Category;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            'products' => Product::paginate(15),
            'services' => Service::all(),
            'categories' => Category::all(),
        ];

        return view('frontend.product.index', $data);
    }
}
