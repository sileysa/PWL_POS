<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        for($i=1;$i<=30;$i++){
            DB::table('t_penjualan_detail')->insert([
                'penjualan_id'=>rand(1,10),
                'barang_id'=>rand(1,15),
                'harga'=>rand(2000,10000),
                'jumlah'=>rand(1,5)
            ]);
        }
    }
}