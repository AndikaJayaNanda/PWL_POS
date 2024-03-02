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
        $data =[
            [
                'user_id' => 3,
                'pembeli' => 'junaidi',
                'penjualan_kode' =>'SBT02-1',
                'penjualan_tanggal' => '2024-03-02'
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Hilya',
                'penjualan_kode' =>'SBT02-2',
                'penjualan_tanggal' => '2024-03-02'
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Ajiz',
                'penjualan_kode' =>'SBT02-3',
                'penjualan_tanggal' => '2024-03-02'
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Yoga',
                'penjualan_kode' =>'SBT02-4',
                'penjualan_tanggal' => '2024-03-02'
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Niggar',
                'penjualan_kode' =>'SBT02-5',
                'penjualan_tanggal' => '2024-03-02'
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Adil',
                'penjualan_kode' =>'SBT02-6',
                'penjualan_tanggal' => '2024-03-02'
            ],[
                'user_id' => 3,
                'pembeli' => 'Andika',
                'penjualan_kode' =>'SBT02-7',
                'penjualan_tanggal' => '2024-03-02'
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Rayhan',
                'penjualan_kode' =>'SBT02-8',
                'penjualan_tanggal' => '2024-03-02'
            ],
            [
                'user_id' => 3,
                'pembeli' => 'izrar',
                'penjualan_kode' =>'SBT02-9',
                'penjualan_tanggal' => '2024-03-02'
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Tancis',
                'penjualan_kode' =>'SBT02-10',
                'penjualan_tanggal' => '2024-03-02'
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}