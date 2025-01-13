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
    Schema::create('toko', function (Blueprint $table) {
        $table->id('id_toko');
        $table->string('nama_toko');
        $table->text('deskripsi_toko')->nullable();
        $table->string('alamat_toko');
        $table->string('link_gmaps_toko')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toko');
    }
};
