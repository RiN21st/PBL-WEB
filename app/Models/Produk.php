<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'Produk';
    protected $primaryKey = 'id_produk';

    public function toko()
    {
        return $this->belongsToMany(Toko::class, 'toko_produk', 'produk_id', 'toko_id');
    }
}