<?php

namespace Database\Seeders;

use App\Models\Promo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataPromo = [
            ['promo-001', 'Promo Facial Care', 'Diskon 3000 untuk setiap pembelian 2 pcs Facial Care'],
            // Tambahkan lebih banyak data sesuai kebutuhan
        ];

        foreach ($dataPromo as $promo) {
            Promo::create([
                'kode_promo' => $promo[0],
                'nama_promo' => $promo[1],
                'keterangan' => $promo[2]
            ]);
        }
    }
}
