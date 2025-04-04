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
            ['penjualan_id' => 1, 'penjualan_tanggal' => now(), 'pembeli' => 'Pembeli 1', 'user_id' => 1],
            ['penjualan_id' => 2, 'penjualan_tanggal' => now(), 'pembeli' => 'Pembeli 2', 'user_id' => 1],
            ['penjualan_id' => 3, 'penjualan_tanggal' => now(), 'pembeli' => 'Pembeli 3', 'user_id' => 1],
            ['penjualan_id' => 4, 'penjualan_tanggal' => now(), 'pembeli' => 'Pembeli 4', 'user_id' => 1],
            ['penjualan_id' => 5, 'penjualan_tanggal' => now(), 'pembeli' => 'Pembeli 5', 'user_id' => 1],
            ['penjualan_id' => 6, 'penjualan_tanggal' => now(), 'pembeli' => 'Pembeli 6', 'user_id' => 1],
            ['penjualan_id' => 7, 'penjualan_tanggal' => now(), 'pembeli' => 'Pembeli 7', 'user_id' => 1],
            ['penjualan_id' => 8, 'penjualan_tanggal' => now(), 'pembeli' => 'Pembeli 8', 'user_id' => 1],
            ['penjualan_id' => 9, 'penjualan_tanggal' => now(), 'pembeli' => 'Pembeli 9', 'user_id' => 1],
            ['penjualan_id' => 10, 'penjualan_tanggal' => now(), 'pembeli' => 'Pembeli 10', 'user_id' => 1],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
