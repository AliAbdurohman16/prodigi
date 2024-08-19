<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['users'] = User::whereHas('roles', function ($query) {
            $query->where('name', '!=', 'user');
        })->get();

        return view('backend.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.user.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data)->assignRole($request->role);

        return redirect('users')->with('message', 'Berhasil ditambahkan!');
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
        $data['user'] = User::find($id);

        return view('backend.user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => $user->email === $request->email ? 'required|email' : 'required|email|unique:users,email',
            'password' => $request->password ? 'required|min:8|confirmed' : '',
        ]);

        $data['password'] = $request->password ? Hash::make($request->password) : $user->password;

        $user->update($data);

        if ($request->has('role')) {
            $user->syncRoles([$request->role]);
        }

        return redirect('users')->with('message', 'Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();

        return response()->json(['message' => 'Pelanggan berhasil dihapus!']);
    }
}
