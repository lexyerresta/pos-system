<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table = 'promo';
    protected $primaryKey = 'kode_promo';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = true;

    protected $fillable = [
        'kode_promo', 
        'nama_promo', 
        'keterangan'
    ];

    // Relasi dengan PenjualanHeader
    public function penjualanHeaders()
    {
        return $this->hasMany(PenjualanHeader::class, 'kode_promo');
    }
}
