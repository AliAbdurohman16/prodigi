<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['customers'] = User::whereHas('roles', function ($query) {
                                $query->where('name', 'user');
                            })->get();

        return view('backend.customer.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.customer.add');
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

        User::create($data)->assignRole('user');

        return redirect('customers')->with('message', 'Berhasil ditambahkan!');
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
        $data['customer'] = User::find($id);

        return view('backend.customer.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = User::find($id);

        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => $customer->email === $request->email ? 'required|email' : 'required|email|unique:users,email',
            'password' => $request->password ? 'required|min:8|confirmed' : '',
        ]);

        $data['password'] = $request->password ? Hash::make($request->password) : $customer->password;

        $customer->update($data);

        return redirect('customers')->with('message', 'Berhasil diubah!');
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
