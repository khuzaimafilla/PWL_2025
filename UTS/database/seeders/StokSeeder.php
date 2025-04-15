<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['stok_id' => 1, 'barang_id' => 1, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 10],
            ['stok_id' => 2, 'barang_id' => 2, 'user_id' =>2, 'stok_tanggal' => now(), 'stok_jumlah' => 10],
        ];

        DB::table('t_stok')->insert($data);
    }
}