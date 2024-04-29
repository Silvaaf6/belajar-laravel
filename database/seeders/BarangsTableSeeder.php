<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama' => 'Silva Aulia Fathihah', 'jumlah' => 4],
            ['nama' => 'Riska Setia Deswita', 'jumlah' => 8],
            ['nama' => 'Nashwa Kayla Ramdan', 'jumlah' => 5],
        ];
// masukkan data ke database
        DB::table('barangs')->insert($barangs);

    }
}
