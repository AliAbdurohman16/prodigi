<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Product\Type;
use App\Models\Product\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['products'] = Product::all();

        return view('backend.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'types' => Type::all(),
            'categories' => Category::all()
        ];

        return view('backend.product.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|max:255',
            'product_type_id' => 'required',
            'product_category_id' => 'required',
            'price' => 'required',
            'short_description' => 'required',
            'description' => 'required',
        ], [
            'product_type_id.required' => 'The type field is required.',
            'product_category_id.required' => 'The category field is required.',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = basename($request->file('image')->store('public/product'));
        }

        $data['slug'] = Str::slug($data['name']);

        Product::create($data);

        return redirect('products')->with('message', 'Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            'product' => Product::find($id),
            'types' => Type::all(),
            'categories' => Category::all(),
        ];

        return view('backend.product.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);

        $data = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|max:255',
            'product_type_id' => 'required',
            'product_category_id' => 'required',
            'price' => 'required',
            'short_description' => 'required',
            'description' => 'required',
        ], [
            'product_type_id.required' => 'The type field is required.',
            'product_category_id.required' => 'The category field is required.',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image && Storage::exists('public/product/' . $product->image)) {
                Storage::delete('public/product/' . $product->image);
            }

            $data['image'] = basename($request->file('image')->store('public/product'));
        }

        $data['slug'] = Str::slug($data['name']);

        $product->update($data);

        return redirect('products')->with('message', 'Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);

        if ($product->image) {
            Storage::delete('public/product/' . $product->image);

            $product->delete();

            return response()->json(['message' => 'Berhasil dihapus!']);
        }
    }
}
