<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function settings()
    {
        // Ambil data pengguna yang sedang login
        $user = Auth::user();
        return view('account.settings', compact('user'));
    }

    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Ambil pengguna yang sedang login
        $user = Auth::user();

        // Update nama dan email
        $user->name = $request->name;
        $user->email = $request->email;

        // Update password jika diisi
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        try {
            $user->save();
            return redirect()->route('account.settings')->with('success', 'Pengaturan akun berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->route('account.settings')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
