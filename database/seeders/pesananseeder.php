<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class pesananseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pesanans')->insert([
            'kode_buy' => "938546",
            'jumlah_pesanan' => '5',
            'jenis_pesanan' => 'C.O.D',
        ]);
    }
}
