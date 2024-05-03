<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TeleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telepons = [
            ['nomor_telepon' => '0987654321122', 'pengguna_id' => 1],
            ['nomor_telepon' => '0987656789876', 'pengguna_id' => 2],
            ['nomor_telepon' => '0987654343231', 'pengguna_id' => 3],
        ];
// masukkan data ke database
        DB::table('telepons')->insert($telepons);
    }
}
