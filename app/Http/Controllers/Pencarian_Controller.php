<?php

namespace App\Http\Controllers;

use App\Models\ProdukToko;
use App\Models\HistoriToko;
use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Pencarian_Controller extends Controller
{
    /**
     * Tampilkan halaman pencarian.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pencarian');
    }

    /**
     * Cari toko berdasarkan produk.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function cariToko(Request $request)
    {
        // Ambil nama produk yang dicari dari input
        $nama_produk = $request->input('nama_produk');

        // Cari produk berdasarkan nama
        $produk = ProdukToko::where('nama_produk', 'LIKE', "%$nama_produk%")
            ->with('toko')  // Memuat relasi toko
            ->get();

        // Cek jika produk ditemukan
        if ($produk->isEmpty()) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        // Menampilkan id toko yang berelasi dengan produk
        $tokoIds = $produk->pluck('toko.id_toko'); // Ambil id toko dari produk yang ditemukan

        return response()->json([
            'message' => 'Data ditemukan',
            'data' => [
                'produk' => $produk,
                'id_toko' => $tokoIds
            ]
        ], 200);
    }
    public function simpanHistori(Request $request)
    {
        // Validasi input
        $request->validate([
            'toko_id' => 'required|exists:toko,id_toko',
        ]);
    
        // Simpan histori toko
        HistoriToko::create([
            'user_id' => Auth::id(), // Ambil ID pengguna yang sedang login
            'toko_id' => $request->toko_id, // Ambil ID toko dari request
        ]);
    
        return response()->json([
            'message' => 'Toko berhasil disimpan ke histori.',
        ], 200);
}
}
