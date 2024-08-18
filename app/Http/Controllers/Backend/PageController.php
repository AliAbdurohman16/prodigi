<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pages'] = Page::all();

        return view('backend.page.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.page.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = basename($request->file('image')->store('public/page'));
        }

        $data['slug'] = Str::slug($data['title']);

        Page::create($data);

        return redirect('pages')->with('message', 'Berhasil ditambahkan!');
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
        $data['page'] = Page::find($id);

        return view('backend.page.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $page = Page::find($id);

        $data = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        if ($request->hasFile('image')) {
            if ($page->image && Storage::exists('public/page/' . $page->image)) {
                Storage::delete('public/page/' . $page->image);
            }

            $data['image'] = basename($request->file('image')->store('public/page'));
        }

        $data['slug'] = Str::slug($data['title']);

        $page->update($data);

        return redirect('pages')->with('message', 'Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $page = Page::find($id);

        if ($page->image) {
            Storage::delete('public/page/' . $page->image);

            $page->delete();

            return response()->json(['message' => 'Berhasil dihapus!']);
        }
    }
}
