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
        Schema::create('penjualan_header_detail', function (Blueprint $table) {
            $table->id();
            $table->string('no_transaksi');
            $table->foreign('no_transaksi')->references('no_transaksi')->on('penjualan_header')->onDelete('cascade');
            $table->string('kode_barang');
            $table->foreign('kode_barang')->references('kode_barang')->on('master_barang');
            $table->integer('qty');
            $table->integer('harga');
            $table->integer('discount')->default(0);
            $table->integer('subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan_header_detail');
    }
};
