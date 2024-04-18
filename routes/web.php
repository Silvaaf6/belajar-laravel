<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

//route saya
Route::get('/about', function () {
    return '<h1>Hello World</h1>'
        . 'Selamat datang di web saya <br>'
        . 'laravel emang keren';
});

//route introduce my self
Route::get('/biodata', function () {
    return '<h1>BIODATA</h1>'
        . 'Nama : Silva Aulia Fathihah <br>'
        . 'Tempat Tanggal Lahir : Bandung, 06 November 2006 <br>'
        . 'Jenis Kelamin : Perempuan <br>'
        . 'Alamat : Kp. Cilisung Kulon <br>'
        . 'Agama : Islam <br>'
        . 'Cita-cita : Sukses <br>'
        . 'Telepon : 0895372107678';
});

//route basic to view
Route::get('animals', function () {
    $king = "lion";
    $hewan = ["monkey", "dragonfly", "tiger", "butterfly", "crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});

Route::get('vegetables', function () {
    $fruit = ["apple", "grape", "starfruit", "melon"];
    return view('vegetables_page', ['buah' => $fruit]);
});

//route parameter: parameter ditandai dengan {}
Route::get('product/{name}', function ($name) {
    return "produk: $name";
});

//buat sebuah route dengan 3 buah parameter
//nama,berat badan,tinggi badan

Route::get('biodata/{name}/{bb}/{tb}', function ($a, $bb, $tb) {
    $bmi = $bb / (($tb / 100) ** 2);
    if ($bmi > 30) {
        $ket = "obesitas";
    } elseif ($bmi > 25) {
        $ket = "kelebihan";
    } elseif ($bmi > 18.5) {
        $ket = "ideal";
    } elseif ($bmi < 18.5) {
        $ket = "kekurangan berat badan";
    }

    return "nama : $a <br>" .
        "berat badan : $bb <br>" .
        "tinggi badan : $tb <br>" .
        "hasil : $bmi <br>" .
        "keterangan : $ket";
});
