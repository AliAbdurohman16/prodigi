<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['teams'] = Team::orderBy('sort', 'asc')->get();

        return view('backend.team.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.team.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:20048',
            'name' => 'required|max:255',
            'position' => 'required',
            'sort' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = basename($request->file('image')->store('public/team'));
        }

        Team::create($data);

        return redirect('teams')->with('message', 'Berhasil ditambahkan!');
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
        $data['team'] = Team::find($id);

        return view('backend.team.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $team = Team::find($id);

        $data = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:20048',
            'name' => 'required|max:255',
            'position' => 'required',
            'sort' => 'required',
        ]);

        if ($request->hasFile('image')) {
            if ($team->image && Storage::exists('public/team/' . $team->image)) {
                Storage::delete('public/team/' . $team->image);
            }

            $data['image'] = basename($request->file('image')->store('public/team'));
        }

        $team->update($data);

        return redirect('teams')->with('message', 'Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::find($id);

        if ($team->image) {
            Storage::delete('public/team/' . $team->image);

            $team->delete();

            return response()->json(['message' => 'Berhasil dihapus!']);
        }
    }
}
