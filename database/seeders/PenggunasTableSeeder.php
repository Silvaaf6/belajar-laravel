<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $penggunas = [
            ['nama' => 'Silva Aulia Fathihah'],
            ['nama' => 'Riska Setia Deswita'],
            ['nama' => 'Nashwa Kayla Ramdan'],
        ];
// masukkan data ke database
        DB::table('penggunas')->insert($penggunas);
    }
}
