<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk' => 'mie ayam bawang', 'jumlah' => '4', 'tanggal_produk' => '2009/12/13', 'id_merek' => 1],
            ['nama_produk' => 'mie rendang', 'jumlah' => '2', 'tanggal_produk' => '2011/02/23', 'id_merek' => 1],
            ['nama_produk' => 'rolls', 'jumlah' => '3', 'tanggal_produk' => '2010/10/10', 'id_merek' => 2],
            ['nama_produk' => 'recheese', 'jumlah' => '6', 'tanggal_produk' => '2000/12/09', 'id_merek' => 2],
            ['nama_produk' => 'milo', 'jumlah' => '4', 'tanggal_produk' => '2004/07/16', 'id_merek' => 3],
            ['nama_produk' => 'dancow', 'jumlah' => '8', 'tanggal_produk' => '2004/02/13', 'id_merek' => 3],
        ];
// masukkan data ke database
        DB::table('produks')->insert($produks);
    }
}
