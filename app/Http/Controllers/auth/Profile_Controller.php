<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Ensure the User model is imported

class Profile_Controller extends Controller
{
    // Menampilkan form edit profil
    public function edit()
    {
        $user = Auth::user(); // Ambil data user yang sedang login
        return view('auth.edit', compact('user'));
    }

    // Proses update profil
    public function update(Request $request)
    {
        $user = Auth::user(); // Ambil data user yang sedang login

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

        // Ensure $user is an instance of the User model before saving
        if ($user instanceof User) {
            $user->save(); // Simpan perubahan
            return redirect()->route('pencarian.index')->with('success', 'Profil berhasil diperbarui.');
        } else {
            return back()->withErrors(['error' => 'Invalid user object.']);
        }
    }
}