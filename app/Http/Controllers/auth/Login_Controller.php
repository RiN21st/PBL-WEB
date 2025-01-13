<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Import model User

class Login_Controller extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cari user berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Verifikasi password
        if ($user && Hash::check($request->password, $user->password)) {
            // Login user
            Auth::login($user); 
            return redirect()->route('cari.produk')->with('success', 'Login berhasil!');
        }

        // Jika gagal, kembalikan ke halaman login dengan pesan error
        return back()->withErrors(['email' => 'Email atau password salah.']);
    }
    // Proses logout
public function logout(Request $request)
{
    // Logout user
    Auth::logout();

    // Invalidate session
    $request->session()->invalidate();

    // Regenerate CSRF token
    $request->session()->regenerateToken();

    // Redirect ke halaman login dengan pesan sukses
    return redirect()->route('login')->with('success', 'Anda telah berhasil logout.');
}
}