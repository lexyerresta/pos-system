<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterBarang extends Model
{
    protected $table = 'master_barang'; // Opsional jika sudah mengikuti konvensi penamaan
    protected $primaryKey = 'kode_barang'; // Ubah jika primary key Anda bukan 'id'
    public $incrementing = false; // Ubah jika primary key Anda bukan auto increment
    public $timestamps = true; // Ubah menjadi false jika Anda tidak menggunakan timestamps
    
    // Definisikan fillable atau guarded untuk mass assignment
    protected $fillable = ['kode_barang', 'nama_barang', 'harga'];
}
