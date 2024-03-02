<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
            'kategori_kode'=> 'MKN',
            'kategori_nama' => 'Makanan',
            ],
            [
            'kategori_kode'=> 'MNM',
            'kategori_nama' => 'Minuman',
            ],
            [
            'kategori_kode'=> 'KUE',
            'kategori_nama' => 'Cemilan dan Kue',
            ],
            [
            'kategori_kode'=> 'ICE',
            'kategori_nama' => 'Ice Cream dan Sundae'
            ],
            [
            'kategori_kode'=> 'MIE',
            'kategori_nama' => 'Mie Instan dan Ramen'
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}