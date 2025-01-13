<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriToko extends Model
{
    use HasFactory;

    protected $table = 'histori_toko';

    protected $fillable = [
        'user_id',
        'toko_id'
    ];

    // Relasi dengan model User
    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

public function toko()
    {
        return $this->belongsTo(Toko::class, 'toko_id', 'id_toko');
    }
}