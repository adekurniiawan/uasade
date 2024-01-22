<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class relationseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('relations')->insert([
            'produk_kode_barang' => "3579",
            'pesanan_kode_buy' => "938546",
            'pembayaran_kode_payment' => "220124",
            'status' => "Y",
        ]);
    }
}
