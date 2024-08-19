<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['partners'] = Partner::all();

        return view('backend.partner.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = basename($request->file('image')->store('public/partner'));
        }

        Partner::create($data);

        return redirect('partners')->with('message', 'Berhasil ditambahkan!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $partner = Partner::find($id);

        $data = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($partner->image && Storage::exists('public/partner/' . $partner->image)) {
                Storage::delete('public/partner/' . $partner->image);
            }

            $data['image'] = basename($request->file('image')->store('public/partner'));
        }

        $partner->update($data);

        return redirect('partners')->with('message', 'Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partner = Partner::find($id);

        if ($partner->image) {
            Storage::delete('public/partner/' . $partner->image);

            $partner->delete();

            return response()->json(['message' => 'Berhasil dihapus!']);
        }
    }
}
