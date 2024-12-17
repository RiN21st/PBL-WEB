<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class User_Controller extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Simpan pengguna baru
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Hash password
        $user->save();

        return response()->json(['message' => 'User  created successfully!'], 201);
    }
// Menampilkan daftar user
public function index()
{
    $users = User::all();
    return view('index', compact('users'));
}

// Menampilkan form edit user
public function edit($id)
{
    $user = User::findOrFail($id);
    return view('edit', compact('user'));
}

// Mengupdate user
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
    ]);

    $user = User::findOrFail($id);
    $user->update($request->all());

    return redirect()->route('users.index')->with('success', 'User  updated successfully.');
}

// Menghapus user
public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('users.index')->with('success', 'User  deleted successfully.');
}
}