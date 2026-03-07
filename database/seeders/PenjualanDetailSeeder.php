<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        for ($p = 1; $p <= 10; $p++) { // Untuk setiap penjualan (10)
            for ($d = 1; $d <= 3; $d++) { // Tambahkan 3 barang
                DB::table('t_penjualan_detail')->insert([
                    'penjualan_id' => $p,
                    'barang_id' => rand(1, 15),
                    'harga' => 15000,
                    'jumlah' => rand(1, 5)
                ]);
            }
        }
    }
}