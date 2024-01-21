<?php

namespace Database\Seeders;

use App\Models\MasterBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterBarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataBarang = [
            ['001', 'Skin Care', 5000],
            ['002', 'Shampoo', 15000],
            ['003', 'Hand Sanitizer', 8000],
            ['004', 'Face Mask', 3000],
            ['005', 'Toothpaste', 7000]
        ];

        foreach ($dataBarang as $barang) {
            MasterBarang::create([
                'kode_barang' => $barang[0],
                'nama_barang' => $barang[1],
                'harga' => $barang[2],
            ]);
        }
    }
}
