<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TokoSeeder extends Seeder
{
    public function run()
    {
        DB::table('toko')->insert([
            [
                
                'Nama_Toko' => 'Sirup DHT Pisang Ambon Asli Makassar',
                'Deskripsi_Toko' => 'Toko penjualan Sirup DHT khas Makassar',
                'Alamat_Toko' => 'Perum. Citra Sudiang Estate, Blok D2/49 Suite 119 Sudiang, Sudiang Raya, biringkanaya, Makassar City, South Sulawesi 90241',
                'Link_Gmaps_Toko' => 'https://g.co/kgs/xSrs4AU',
                'created_at' => now(), // Tambahkan timestamp
                'updated_at' => now(), // Tambahkan timestamp
            ],
            [
                'Nama_Toko' => 'Badan usaha dht/sirop sari buah',
                'Deskripsi_Toko' => 'Kami menjual Sirup Sari Buah Pisang Ambon yang sudah terkenal dan menjadi produk kebanganggaan dari Makassar, Sulawesi selatan, sejak tahun 1949',
                'Alamat_Toko' => 'Jl. Syekh yusuf I No.10, katangka, Kec.Somba Opu, Kabupaten Gowa, Sulawesi Selatan 90221',
                'Link_Gmaps_Toko' => 'https://g.co/kgs/4yFc9cc',
                'created_at' => now(), // Tambahkan timestamp
                'updated_at' => now(), // Tambahkan timestamp
            ],
            [
                'Nama_Toko' => 'PT Tawon Jaya Makassar',
                'Deskripsi_Toko' => 'Menjual Minyak Gosok Cap Tawon',
                'Alamat_Toko' => 'Jl. Kapasa Raya No79a, Bira, Kec.Tamalanrea, Kota Makassar, Sulawesi Selatan 90243',
                'Link_Gmaps_Toko' => 'https://g.co/kgs/cx6djKa',
                'created_at' => now(), // Tambahkan timestamp
                'updated_at' => now(), // Tambahkan timestamp
            ],
            [
                'Nama_Toko' => 'Minyak Tawon Asli Makassar',
                'Deskripsi_Toko' => 'Mau beli MINYAK TAWON ASLI MAKASSAR? Hubungi 0852-9919-2996 Toko Minyak Tawon Asli Makassar dengan garansi 100% PRODUK ASLI',
                'Alamat_Toko' => 'Perum. Citra Sudiang Estate Blok D2/49 Suite 133 Sudiang, Sudiang Raya, Kec. Biringkanaya, Kota Makassar, Sulawesi Selatan 90241',
                'Link_Gmaps_Toko' => 'https://g.co/kgs/jeLd2gd',
                'created_at' => now(), // Tambahkan timestamp
                'updated_at' => now(), // Tambahkan timestamp
            ],
            [
                'Nama_Toko' => 'Rumah Kue & Roti Jaya',
                'Deskripsi_Toko' => 'Menjual Roti Maros Khas Makassar',
                'Alamat_Toko' => 'Jl. Poros Makassar-Maros No.24, Tamalanrea Jaya, Kec.Tamalanrea, Kota Makassar, Sulawesi Selatan 90245',
                'Link_Gmaps_Toko' => 'https://g.co/kgs/GujNg7q',
                'created_at' => now(), // Tambahkan timestamp
                'updated_at' => now(), // Tambahkan timestamp
            ],
        ]);
        
    }
}
