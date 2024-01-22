<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class produkseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produks')->insert([
            'kode_barang' => "3579",
            'nama_produk' => 'susu kental manis frisian flag',
            'stok' => '35',
        ]);
    }
}
