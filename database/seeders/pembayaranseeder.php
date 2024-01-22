<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class pembayaranseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pembayarans')->insert([
            'kode_payment' => "220124",
            'jenis_pembayaran' => 'cash',
            'harga_total' => 'Rp.70.000,00',
            'jumlah_produk' => '3',
        ]);

    }
}
