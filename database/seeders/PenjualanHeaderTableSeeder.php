<?php

namespace Database\Seeders;

use App\Models\PenjualanHeader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanHeaderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataPenjualan = [
            ['202312-001', '2023-12-23', 'Michael', 'promo-001', 10000, 1100, 11100],
            ['202312-002', '2023-12-24', 'Sarah', null, 15000, 1650, 16650],
            // Tambahkan lebih banyak data sesuai kebutuhan
        ];

        foreach ($dataPenjualan as $penjualan) {
            PenjualanHeader::create([
                'no_transaksi' => $penjualan[0],
                'tgl_transaksi' => $penjualan[1],
                'customer' => $penjualan[2],
                'kode_promo' => $penjualan[3],
                'total_bayar' => $penjualan[4],
                'ppn' => $penjualan[5],
                'grand_total' => $penjualan[6]
            ]);
        }
    }
}
