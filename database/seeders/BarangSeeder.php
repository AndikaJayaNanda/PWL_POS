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
                'kategori_id' =>1,
                'barang_kode' => 'NASI1',
                'barang_nama' => 'Nasi Kulit Ayam Krispy',
                'harga_beli'  => 9200,
                'harga_jual' => 11000,
            ],
            [
                'kategori_id' =>1,
                'barang_kode' => 'NASI2',
                'barang_nama' => 'Nasi Goreng + Telor',
                'harga_beli'  => 11500,
                'harga_jual' => 12500,
            ],
            [
                'kategori_id' =>2,
                'barang_kode' => 'KOPI1',
                'barang_nama' => 'Ice Coffee Float',
                'harga_beli'  => 7500,
                'harga_jual' => 8000,
                
            ],
            [
                'kategori_id' =>2,
                'barang_kode' => 'KOPI2',
                'barang_nama' => 'Caramel Latte',
                'harga_beli'  => 8200,
                'harga_jual' => 10000,
            ],
            [
                'kategori_id' =>3,
                'barang_kode' => 'CIRENG1',
                'barang_nama' => 'Cireng Sambal Rujak',
                'harga_beli'  => 11000,
                'harga_jual' => 12500,
            ],
            [
                'kategori_id' =>3,
                'barang_kode' => 'PANCONG1',
                'barang_nama' => 'PANCONG Original',
                'harga_beli'  => 10000,
                'harga_jual' => 11000,
            ],
            [
                'kategori_id' =>4,
                'barang_kode' => 'ICE1',
                'barang_nama' => 'Sundae Original',
                'harga_beli'  => 6000,
                'harga_jual' => 7000,
            ],
            [
                'kategori_id' =>4,
                'barang_kode' => 'ICE2',
                'barang_nama' => 'Sundae Strowberry With Jam',
                'harga_beli'  => 11000,
                'harga_jual' => 12000,
            ],
            [
                'kategori_id' =>5,
                'barang_kode' => 'MIE1',
                'barang_nama' => 'Mie Goreng Polos',
                'harga_beli'  => 6000,
                'harga_jual' => 7000,
            ],
            [
                'kategori_id' =>5,
                'barang_kode' => 'RAMEN1',
                'barang_nama' => 'Ramen Soba',
                'harga_beli'  => 13000,
                'harga_jual' => 15000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}