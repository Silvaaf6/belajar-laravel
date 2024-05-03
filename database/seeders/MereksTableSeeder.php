<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MereksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mereks = [
            ['nama_merek' => 'Indomie'],
            ['nama_merek' => 'Nabati'],
            ['nama_merek' => 'Nestle'],
        ];
// masukkan data ke database
        DB::table('mereks')->insert($mereks);
    }
}
