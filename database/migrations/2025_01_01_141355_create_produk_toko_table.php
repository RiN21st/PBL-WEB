<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('produk_toko', function (Blueprint $table) {
        $table->unsignedBigInteger('id_produk');
        $table->foreignId('id_toko')->constrained('toko','id_toko')->onDelete('cascade');
        $table->string('nama_produk');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk_toko');
    }
};
