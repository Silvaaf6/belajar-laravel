<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
            ['id_barang' => 1, 'id_pembeli' => 1, 'jumlah' => 7, 'tanggal' => '2009/12/09'],
            ['id_barang' => 2, 'id_pembeli' => 2, 'jumlah' => 2, 'tanggal' => '2019/09/26'], 
            ['id_barang' => 3, 'id_pembeli' => 3, 'jumlah' => 7, 'tanggal' => '2017/08/12'], 
            ['id_barang' => 1, 'id_pembeli' => 1, 'jumlah' => 9, 'tanggal' => '2023/06/27'],
            ['id_barang' => 2, 'id_pembeli' => 2, 'jumlah' => 4, 'tanggal' => '2016/09/01'], 
            ['id_barang' => 3, 'id_pembeli' => 3, 'jumlah' => 2, 'tanggal' => '2014/05/06'], 
        ];
// masukkan data ke database
        DB::table('transaksis')->insert($transaksis);

    }
}
