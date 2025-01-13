<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Toko;
use App\Models\HistoriToko;

class Produk_Controller extends Controller
{
    public function index()
    {
        return view('pencarian');
    }

    // Menjalankan prosedur pencarian produk dan menampilkan hasil
    public function cariProduk(Request $request)
    {
        $namaProduk = $request->input('nama_produk');

        // Jalankan prosedur MySQL untuk mencari produk
        $hasil = DB::select('CALL cari_produk_toko(?)', [$namaProduk]);

        // Simpan histori toko untuk setiap hasil pencarian
        foreach ($hasil as $toko) {
            // Cek apakah data histori sudah ada
            $historiExists = HistoriToko::where('user_id', Auth::id())
                ->where('toko_id', $toko->id_toko)
                ->exists();

            // Jika belum ada, simpan data histori
            if (!$historiExists) {
                HistoriToko::create([
                    'user_id' => Auth::id(),
                    'toko_id' => $toko->id_toko,
                ]);
            }
        }

        return view('pencarian', ['hasilPencarian' => $hasil]);
    }

    // Menampilkan histori toko berdasarkan user yang login
    public function tampilHistori()
    {
        // Ambil histori toko berdasarkan user yang login dengan pagination
        $histori = HistoriToko::where('user_id', Auth::id())
            ->with('toko') // Eager load relasi toko
            ->paginate(10); // Tampilkan 10 data per halaman

        return view('histori-toko', ['histori' => $histori]);
    }

    // Menghapus histori toko berdasarkan ID
    public function hapusHistori($id)
    {
        // Hapus histori berdasarkan ID
        HistoriToko::where('id', $id)
            ->where('user_id', Auth::id()) // Pastikan hanya user yang login yang bisa menghapus
            ->delete();

        return redirect()->route('histori-toko')->with('success', 'Histori toko berhasil dihapus.');
    }
}