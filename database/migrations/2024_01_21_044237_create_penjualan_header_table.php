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
        Schema::create('penjualan_header', function (Blueprint $table) {
            $table->string('no_transaksi')->primary();
            $table->date('tgl_transaksi');
            $table->string('customer');
            $table->string('kode_promo')->nullable();
            $table->integer('total_bayar');
            $table->integer('ppn');
            $table->integer('grand_total');
            // Jika Anda menggunakan timestamps (`created_at` dan `updated_at`)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan_header');
    }
};
