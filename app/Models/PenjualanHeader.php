<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanHeader extends Model
{
    protected $table = 'penjualan_header';
    protected $primaryKey = 'no_transaksi';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = true;

    protected $fillable = [
        'no_transaksi', 
        'tgl_transaksi', 
        'customer', 
        'kode_promo', 
        'total_bayar', 
        'ppn', 
        'grand_total'
    ];

    protected $casts = [
        'tgl_transaksi' => 'datetime', // This will cast tgl_transaksi to a Carbon instance
    ];

    // Relasi dengan PenjualanHeaderDetail
    public function details()
    {
        return $this->hasMany(PenjualanHeaderDetail::class, 'no_transaksi');
    }

    // Relasi dengan Promo
    public function promo()
    {
        return $this->belongsTo(Promo::class, 'kode_promo');
    }
}
