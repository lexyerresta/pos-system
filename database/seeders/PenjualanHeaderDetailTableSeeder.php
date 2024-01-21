<?php

namespace Database\Seeders;

use App\Models\PenjualanHeaderDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanHeaderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataDetailPenjualan = [
            ['202312-001', '001', 2, 5000, 0, 10000],
            // Tambahkan lebih banyak data sesuai kebutuhan
        ];

        foreach ($dataDetailPenjualan as $detail) {
            PenjualanHeaderDetail::create([
                'no_transaksi' => $detail[0],
                'kode_barang' => $detail[1],
                'qty' => $detail[2],
                'harga' => $detail[3],
                'discount' => $detail[4],
                'subtotal' => $detail[5]
            ]);
        }
    }
}
