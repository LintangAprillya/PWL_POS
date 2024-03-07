<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 3,
                'pembeli' => 'Johnson Doe',
                'penjualan_kode' => 'PJ001',
                'penjualan_tanggal' => '2024-02-27',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Jeanneth Smith',
                'penjualan_kode' => 'PJ002',
                'penjualan_tanggal' => '2024-02-26',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Alicia Suh',
                'penjualan_kode' => 'PJ003',
                'penjualan_tanggal' => '2024-02-26',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Bobby Brown',
                'penjualan_kode' => 'PJ004',
                'penjualan_tanggal' => '2024-02-27',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Emilya Davista',
                'penjualan_kode' => 'PJ005',
                'penjualan_tanggal' => '2024-02-27',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Michael Jordan',
                'penjualan_kode' => 'PJ006',
                'penjualan_tanggal' => '2024-02-25',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Elizabeth Martinez',
                'penjualan_kode' => 'PJ007',
                'penjualan_tanggal' => '2024-02-24',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Olivia Rodrigo',
                'penjualan_kode' => 'PJ008',
                'penjualan_tanggal' => '2024-02-25',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'James Peter Anderson',
                'penjualan_kode' => 'PJ009',
                'penjualan_tanggal' => '2024-02-26',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'William Jackson',
                'penjualan_kode' => 'PJ010',
                'penjualan_tanggal' => '2024-02-25',
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
