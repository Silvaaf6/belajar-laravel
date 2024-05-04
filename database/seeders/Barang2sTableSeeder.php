<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Barang2sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang2s = [
            ['nama_barang' => 'Kursi', 'harga' => 120000, 'stok' => 7],
            ['nama_barang' => 'Meja', 'harga' => 190000, 'stok' => 2],
            ['nama_barang' => 'Motor', 'harga' => 150000, 'stok' => 8],
        ];
// masukkan data ke database
        DB::table('barang2s')->insert($barang2s);

    }
}
