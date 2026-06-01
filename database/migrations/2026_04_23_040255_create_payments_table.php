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
    Schema::create('payments', function (Blueprint $table) {
        $table->id('id_pembayaran'); // Atau apa pun nama primary key tabel ini
        
        // UBAH BAGIAN INI:
        // Beritahu Laravel secara eksplisit bahwa primary key di tabel 'orders' adalah 'id_pesanan'
        $table->foreignId('pesanan_id')
              ->constrained('orders', 'id_pesanan') 
              ->onDelete('cascade');

        // ... kolom lainnya seperti jumlah_bayar, metode_pembayaran, dll ...
        
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
