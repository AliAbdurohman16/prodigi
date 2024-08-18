<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Product\Type;
use App\Models\Product\Category;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            'products' => Product::paginate(15),
            'types' => Type::all(),
            'categories' => Category::all(),
        ];

        return view('frontend.product.index', $data);
    }

    public function show($slug)
    {
        $data['product'] = Product::where('slug', $slug)->first();

        return view('frontend.product.detail', $data);
    }

    public function type($slug)
    {
        $type = Type::where('slug', $slug)->first();
        
        $data = [
            'type' => $type,
            'products' => $type->Product()->paginate(15),
            'types' => Type::all(),
            'categories' => Category::all(),
        ];

        return view('frontend.product.type', $data);
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        
        $data = [
            'category' => $category,
            'products' => $category->Product()->paginate(15),
            'types' => Type::all(),
            'categories' => Category::all(),
        ];

        return view('frontend.product.category', $data);
    }
}
