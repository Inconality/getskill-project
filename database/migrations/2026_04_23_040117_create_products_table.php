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
    Schema::create('products', function (Blueprint $table) {
        // Ganti $table->id() menjadi seperti di bawah ini:
        $table->id('id_produk'); 
        
        $table->string('nama_produk');
        $table->integer('harga');
        $table->integer('stok'); // Pastikan kolom stok ini juga sudah ada
        $table->text('deskripsi')->nullable();
        $table->string('gambar')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
