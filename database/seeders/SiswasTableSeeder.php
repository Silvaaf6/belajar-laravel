<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
            ['nama' => 'Nashwa', 'jenis_kelamin' => 'perempuan', 'alamat' => 'TCI', 'agama' => 'hindu', 'telepon' => 9882 , 'email' => 'naswa@gmail.com'],
            ['nama' => 'Riska', 'jenis_kelamin' => 'perempuan', 'alamat' => 'Tarate', 'agama' => 'budha', 'telepon' => 9800 , 'email' => 'riska@gmail.com'],
            ['nama' => 'Kaylul', 'jenis_kelamin' => 'perempuan', 'alamat' => 'TCI', 'agama' => 'islam', 'telepon' => 9882 , 'email' => 'kayla@gmail.com'],
            ['nama' => 'Diki', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'Cangkuang', 'agama' => 'hindu', 'telepon' => 8782 , 'email' => 'diki@gmail.com'],
            ['nama' => 'Radin', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'Rancamanyar', 'agama' => 'konghucu', 'telepon' => 9882 , 'email' => 'radin@gmail.com'],
            ['nama' => 'Iyas', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'Cilisung', 'agama' => 'kristen', 'telepon' => 9882 , 'email' => 'iyas@gmail.com'],
            ['nama' => 'Nazwa', 'jenis_kelamin' => 'perempuan', 'alamat' => 'Palasari', 'agama' => 'katolik', 'telepon' => 9111 , 'email' => 'najwa@gmail.com'],
            ['nama' => 'Alvin', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'Rancamanyar', 'agama' => 'hindu', 'telepon' => 9882 , 'email' => 'purwo@gmail.com'],
            ['nama' => 'Abdu', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'TCI', 'agama' => 'islam', 'telepon' => 9882 , 'email' => 'bedu@gmail.com'],
            ['nama' => 'Jira', 'jenis_kelamin' => 'perempuan', 'alamat' => 'Cibaduyut', 'agama' => 'budha', 'telepon' => 9882 , 'email' => 'jira@gmail.com'],
        ];
        DB::table('siswas')->insert($siswas);

    }
}
