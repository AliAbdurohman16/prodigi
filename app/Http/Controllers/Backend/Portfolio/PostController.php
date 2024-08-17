<?php

namespace App\Http\Controllers\Backend\Portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio\Post;
use App\Models\Portfolio\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['posts'] = Post::all();

        return view('backend.portfolio.post.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['categories'] = Category::all();

        return view('backend.portfolio.post.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|max:255',
            'portfolio_category_id' => 'required',
            'description' => 'required',
        ], [
            'portfolio_category_id.required' => 'The category field is required.',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = basename($request->file('image')->store('public/portfolio'));
        }

        $data['slug'] = Str::slug($data['title']);

        Post::create($data);

        return redirect('portfolio-posts')->with('message', 'Berhasil ditambahkan!');
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
            'categories' => Category::all(),
            'post' => Post::find($id),
        ];

        return view('backend.portfolio.post.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);

        $data = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|max:255',
            'portfolio_category_id' => 'required',
            'description' => 'required',
        ], [
            'portfolio_category_id.required' => 'The category field is required.',
        ]);

        if ($request->hasFile('image')) {
            if ($post->image && Storage::exists('public/portfolio/' . $post->image)) {
                Storage::delete('public/portfolio/' . $post->image);
            }

            $data['image'] = basename($request->file('image')->store('public/portfolio'));
        }

        $data['slug'] = Str::slug($data['title']);

        $post->update($data);

        return redirect('portfolio-posts')->with('message', 'Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);

        if ($post->image) {
            Storage::delete('public/portfolio/' . $post->image);

            $post->delete();

            return response()->json(['message' => 'Berhasil dihapus!']);
        }
    }
}
