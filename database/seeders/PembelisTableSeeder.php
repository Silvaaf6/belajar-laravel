<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
            ['nama_pembeli' => 'Silva Aulia Fathihah', 'jenis_kelamin' => 'Perempuan'],
            ['nama_pembeli' => 'Riska Setia Deswita', 'jenis_kelamin' => 'Perempuan'],
            ['nama_pembeli' => 'Nashwa Kayla Ramdan', 'jenis_kelamin' => 'Perempuan'],
        ];
// masukkan data ke database
        DB::table('pembelis')->insert($pembelis);

    }
}
