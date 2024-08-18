<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['services'] = Service::all();

        return view('backend.service.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.service.add');
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
            $data['image'] = basename($request->file('image')->store('public/service'));
        }

        $data['slug'] = Str::slug($data['title']);

        Service::create($data);

        return redirect('services')->with('message', 'Berhasil ditambahkan!');
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
        $data['service'] = Service::find($id);

        return view('backend.service.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::find($id);

        $data = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        if ($request->hasFile('image')) {
            if ($service->image && Storage::exists('public/service/' . $service->image)) {
                Storage::delete('public/service/' . $service->image);
            }

            $data['image'] = basename($request->file('image')->store('public/service'));
        }

        $data['slug'] = Str::slug($data['title']);

        $service->update($data);

        return redirect('services')->with('message', 'Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);

        if ($service->image) {
            Storage::delete('public/service/' . $service->image);

            $service->delete();

            return response()->json(['message' => 'Berhasil dihapus!']);
        }
    }
}
