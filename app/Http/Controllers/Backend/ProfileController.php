<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['profile'] = Auth::user();

        return view('backend.profile.index', $data);
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
        $profile = Auth::user();

        $data = $request->validate([
            'image' => 'mimes:jpg,png,jpeg|image|max:2048',
            'name' => 'required',
            'email' => $profile->email === $request->email ? 'required|email' : 'required|email|unique:users,email',
        ]);

        if ($request->hasFile('image')) {
            if ($profile->image && Storage::exists('public/profile/' . $profile->image)) {
                Storage::delete('public/profile/' . $profile->image);
            }

            $data['image'] = basename($request->file('image')->store('public/profile'));
        }

        $profile->update($data);

        return redirect('profile')->with('message', 'Berhasil diubah!');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profile = Auth::user();

        if ($profile->image) {
            Storage::delete('public/profile/' . $profile->image);

            $profile->update(['image' => 'default/user.png']);

            return redirect('profile')->with('message', 'Berhasil dihapus!');
        }
    }
}
