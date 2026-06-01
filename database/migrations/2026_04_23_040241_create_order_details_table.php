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
        $table->id('id_detail'); // atau nama primary key tabel ini sendiri
        
    
        $table->foreignId('pesanan_id')
              ->constrained('orders', 'id_pesanan') 
              ->onDelete('cascade');

        // Pastikan juga jika ada foreign key ke tabel produk (contoh: produk_id), 
        // sesuaikan nama primary key targetnya jika bukan bernama 'id'
        $table->foreignId('produk_id')
              ->constrained('products', 'id_produk') // Sesuaikan 'id_produk' jika di tabel produk Anda menggunakan custom nama id
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
