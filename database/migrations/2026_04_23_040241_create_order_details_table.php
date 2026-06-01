<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('order_details', function (Blueprint $table) {
        $table->id('id_detail'); 
        
        // Relasi ke tabel orders (Foreign Key pesanan_id -> id_pesanan)
        $table->unsignedBigInteger('pesanan_id');
        $table->foreign('pesanan_id')
              ->references('id_pesanan')
              ->on('orders')
              ->onDelete('cascade');

        // Relasi ke tabel products (Foreign Key produk_id -> id_produk)
        $table->unsignedBigInteger('produk_id');
        $table->foreign('produk_id')
              ->references('id_produk')
              ->on('products')
              ->onDelete('cascade');

        $table->integer('jumlah');
        $table->integer('subtotal');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
