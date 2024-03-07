<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'barang_kode' => 'P001',
                'barang_nama' => 'Blouse Putih',
                'harga_beli' => 60000,
                'harga_jual' => 75000,
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'P002',
                'barang_nama' => 'Celana Jeans',
                'harga_beli' => 90000,
                'harga_jual' => 120000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'E001',
                'barang_nama' => 'Laptop HP Envy BA1033TX',
                'harga_beli' => 12000000,
                'harga_jual' => 13000000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'E002',
                'barang_nama' => 'Smartphone Poco M5S',
                'harga_beli' => 3000000,
                'harga_jual' => 4000000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'PR001',
                'barang_nama' => 'Cincin Emas 2k',
                'harga_beli' => 2300000,
                'harga_jual' => 2500000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'PR002',
                'barang_nama' => 'Kalung Emas 2k',
                'harga_beli' => 3000000,
                'harga_jual' => 3500000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'ART001',
                'barang_nama' => 'Panci Stainless Steel',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'ART002',
                'barang_nama' => 'Set Peralatan Makan Beling',
                'harga_beli' => 250000,
                'harga_jual' => 300000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'S001',
                'barang_nama' => 'Sepatu Aidas Samba',
                'harga_beli' => 3000000,
                'harga_jual' => 3500000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'S002',
                'barang_nama' => 'Bola Basket',
                'harga_beli' => 200000,
                'harga_jual' => 250000,
            ],
        ];

        DB::table('m_barang')->insert($data);

    }
}
