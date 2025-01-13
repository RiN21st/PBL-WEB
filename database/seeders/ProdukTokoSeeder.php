<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukTokoSeeder extends Seeder
{
    public function run()
    {
        DB::table('produk_toko')->insert([
            [
                'id_produk' => 010,
                'id_toko' => 6,
                'nama_produk' => 'Sirup DHT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_produk' => 010,
                'id_toko' => 7, 
                'nama_produk' => 'Sirup DHT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_produk' => 020,
                'id_toko' => 8, 
                'nama_produk' => 'Minyak Tawon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_produk' => 020,
                'id_toko' => 9, 
                'nama_produk' => 'Minyak Tawon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_produk' => 030,
                'id_toko' => 10, 
                'nama_produk' => 'ROti Maros',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
