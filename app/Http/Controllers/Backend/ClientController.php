<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['clients'] = Client::all();

        return view('backend.client.index', $data);
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
            $data['image'] = basename($request->file('image')->store('public/client'));
        }

        Client::create($data);

        return redirect('clients')->with('message', 'Berhasil ditambahkan!');
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
        $client = Client::find($id);

        $data = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($client->image && Storage::exists('public/client/' . $client->image)) {
                Storage::delete('public/client/' . $client->image);
            }

            $data['image'] = basename($request->file('image')->store('public/client'));
        }

        $client->update($data);

        return redirect('clients')->with('message', 'Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::find($id);

        if ($client->image) {
            Storage::delete('public/client/' . $client->image);

            $client->delete();

            return response()->json(['message' => 'Berhasil dihapus!']);
        }
    }
}
