<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PharIo\Manifest\Author;

class User_Controller extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        
        // Save new user
        $user = new User();
        $user->name = $request->name; // Ensure this is correct
        $user->Email = $request->email;
        $user->Password = Hash::make($request->password);
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
    return view('auth.edit', compact('user'));
}

public function editProfile()
{
    $user = Auth::user(); // Ambil data user yang sedang login
    return view('profile.edit', compact('user'));
}

    // Proses update profil
    public function update(Request $request)
    {
        $user = Auth::user();

        // Validasi input
        $request->validate([
            'email' => 'required|email|unique:users,email,' . $user->id,
            'current_password' => 'required',
            'new_password' => 'nullable|min:8|confirmed',
        ]);

        // Verifikasi password saat ini
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Password saat ini salah.']);
        }

        // Update email
        $user->email = $request->email;

        // Update password jika diisi
        if ($request->new_password) {
            $user->password = Hash::make($request->new_password);
        }

        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profil berhasil diperbarui.');
    }

// Menghapus user
public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('users.index')->with('success', 'User  deleted successfully.');
}
}