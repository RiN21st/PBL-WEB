<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $table = 'Toko'; // Nama tabel
    protected $primaryKey = 'id_toko'; // Primary key di tabel Toko
    public $incrementing = true; // Primary key auto-increment (jika applicable)
    protected $keyType = 'int'; // Tipe data primary key
    public function produk()
    {
        return $this->belongsToMany(Produk::class, 'toko_produk', 'toko_id', 'produk_id');
    }
    public function historiToko()
{
    return $this->hasMany(HistoriToko::class);
}
}


