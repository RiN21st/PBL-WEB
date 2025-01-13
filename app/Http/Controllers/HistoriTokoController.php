<?php

namespace App\Http\Controllers;

use App\Models\HistoriToko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HistoriTokoController extends Controller
{
    // Menampilkan histori toko berdasarkan id user yang login
    public function index(Request $request)
    {
        // Ambil id user yang sedang login
        $userId = Auth::id();

        // Query dasar untuk mengambil data histori
        $query = DB::table('histori_toko')
            ->join('Toko', 'histori_toko.toko_id', '=', 'Toko.id_toko')
            ->select('Toko.nama_toko', 'Deskripsi_toko', 'Toko.Alamat_Toko', 'Toko.Link_Gmaps_Toko')
            ->where('histori_toko.user_id', $userId) // Filter berdasarkan user_id
            ->distinct();

        // Ambil parameter filter dari request (opsional)
        $namaToko = $request->input('nama_toko');
        if ($namaToko) {
            $query->where('Toko.nama_toko', 'like', '%' . $namaToko . '%');
        }

        // Eksekusi query dan ambil data
        $histori = $query->get();

        // Kirim data ke view
        return view('histori-toko', ['histori' => $histori]);
    }
}
