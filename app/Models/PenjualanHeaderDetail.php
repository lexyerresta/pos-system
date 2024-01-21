<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanHeaderDetail extends Model
{
    protected $table = 'penjualan_header_detail';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'no_transaksi', 
        'kode_barang', 
        'qty', 
        'harga', 
        'discount', 
        'subtotal'
    ];

    // Relasi dengan PenjualanHeader
    public function penjualanHeader()
    {
        return $this->belongsTo(PenjualanHeader::class, 'no_transaksi');
    }

    // Relasi dengan MasterBarang
    public function masterBarang()
    {
        return $this->belongsTo(MasterBarang::class, 'kode_barang');
    }
}
