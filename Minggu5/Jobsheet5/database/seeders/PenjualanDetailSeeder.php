<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Transaksi 1
            ['penjualan_id' => 1, 'barang_id' => 1, 'jumlah' => 2, 'harga' => 50000],
            ['penjualan_id' => 1, 'barang_id' => 2, 'jumlah' => 1, 'harga' => 100000],
            ['penjualan_id' => 1, 'barang_id' => 3, 'jumlah' => 3, 'harga' => 75000],

            // Transaksi 2
            ['penjualan_id' => 2, 'barang_id' => 4, 'jumlah' => 1, 'harga' => 200000],
            ['penjualan_id' => 2, 'barang_id' => 5, 'jumlah' => 5, 'harga' => 3500],
            ['penjualan_id' => 2, 'barang_id' => 6, 'jumlah' => 2, 'harga' => 10000],

            // Transaksi 3
            ['penjualan_id' => 3, 'barang_id' => 7, 'jumlah' => 3, 'harga' => 6000],
            ['penjualan_id' => 3, 'barang_id' => 8, 'jumlah' => 4, 'harga' => 3000],
            ['penjualan_id' => 3, 'barang_id' => 9, 'jumlah' => 10, 'harga' => 2000],

            // Transaksi 4
            ['penjualan_id' => 4, 'barang_id' => 10, 'jumlah' => 5, 'harga' => 7000],
            ['penjualan_id' => 4, 'barang_id' => 1, 'jumlah' => 1, 'harga' => 50000],
            ['penjualan_id' => 4, 'barang_id' => 2, 'jumlah' => 2, 'harga' => 100000],

            // Transaksi 5
            ['penjualan_id' => 5, 'barang_id' => 3, 'jumlah' => 6, 'harga' => 75000],
            ['penjualan_id' => 5, 'barang_id' => 4, 'jumlah' => 3, 'harga' => 200000],
            ['penjualan_id' => 5, 'barang_id' => 5, 'jumlah' => 2, 'harga' => 3500],

            // Transaksi 6
            ['penjualan_id' => 6, 'barang_id' => 6, 'jumlah' => 4, 'harga' => 10000],
            ['penjualan_id' => 6, 'barang_id' => 7, 'jumlah' => 2, 'harga' => 6000],
            ['penjualan_id' => 6, 'barang_id' => 8, 'jumlah' => 3, 'harga' => 3000],

            // Transaksi 7
            ['penjualan_id' => 7, 'barang_id' => 9, 'jumlah' => 1, 'harga' => 2000],
            ['penjualan_id' => 7, 'barang_id' => 10, 'jumlah' => 5, 'harga' => 7000],
            ['penjualan_id' => 7, 'barang_id' => 1, 'jumlah' => 2, 'harga' => 50000],

            // Transaksi 8
            ['penjualan_id' => 8, 'barang_id' => 2, 'jumlah' => 3, 'harga' => 100000],
            ['penjualan_id' => 8, 'barang_id' => 3, 'jumlah' => 4, 'harga' => 75000],
            ['penjualan_id' => 8, 'barang_id' => 4, 'jumlah' => 2, 'harga' => 200000],

            // Transaksi 9
            ['penjualan_id' => 9, 'barang_id' => 5, 'jumlah' => 1, 'harga' => 3500],
            ['penjualan_id' => 9, 'barang_id' => 6, 'jumlah' => 3, 'harga' => 10000],
            ['penjualan_id' => 9, 'barang_id' => 7, 'jumlah' => 5, 'harga' => 6000],

            // Transaksi 10
            ['penjualan_id' => 10, 'barang_id' => 8, 'jumlah' => 2, 'harga' => 3000],
            ['penjualan_id' => 10, 'barang_id' => 9, 'jumlah' => 4, 'harga' => 2000],
            ['penjualan_id' => 10, 'barang_id' => 10, 'jumlah' => 1, 'harga' => 7000],
        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}
