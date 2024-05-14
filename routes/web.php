<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MerkController;

use App\Models\Merek;
use App\Models\Barang;
use App\Models\Post;
use App\Models\Produk;
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

//route optional parameter -> ditandai dengan ?
Route::get('myname/{name?}', function ($a = "silva") {
    return 'my name is ' . $a;
});

//menampilkan data dari database
Route::get('/testmodel', function () {
    $data = Post::all();
    return $data;
});

Route::get('/barang', function () {
    $data = Barang::all();
    return $data;
});

//menampilkan data yang telah diolah (view)
Route::get('/about', function () {
    return view('about');
});

// Route::get('/transaksi', function () {
// $post = Post::all();
// $barang = Barang::all();
// $pengguna = Pengguna::all();
// $telepon = Telepon::all();
// $merek = Merek::all();
// $produk = Produk::all();
// $transaksi = Transaksi::all();

// return view('tampil_post', compact('post'));
// return view('tampil_barang', compact('barang'));
// return view('pengguna', compact('pengguna'));
// return view('telepon', compact('telepon'));
// return view('merek', compact('merek'));
// return view('produk', compact('produk'));
// return view('transaksi', compact('transaksi'));

// $siswa = Siswa::where('jenis kelamin','like','%laki-laki%')->get();
// $siswa = Siswa::where('agama', 'like', '%islam%')->get();
// $siswa = Siswa::where('jenis kelamin', 'like', '%perempuan%')->get();

// $siswa = new Siswa;
// $siswa->nama = "Surya";
// $siswa->jenis_kelamin = "laki-laki";
// $siswa->alamat = "Sukamenak";
// $siswa->agama = "konghucu";
// $siswa->telepon = 9876;
// $siswa->email = "Surya@gmail.com";
// $siswa->save();

// $siswa = Siswa::find(12);
// $siswa->nama = "Rasya";
// $siswa->jenis_kelamin = "laki-laki";
// $siswa->alamat = "Sukamenak";
// $siswa->agama = "konghucu";
// $siswa->telepon = 9006;
// $siswa->email = "rasya@gmail.com";
// $siswa->save();

// $siswa = Siswa::find(13);
// $siswa->nama = "Romo";
// $siswa->jenis_kelamin = "laki-laki";
// $siswa->alamat = "Sukamenak";
// $siswa->agama = "budha";
// $siswa->telepon = 1234;
// $siswa->email = "robby@gmail.com";
// $siswa->save();

// return $pengguna;
// return $telepon;
// return $merek;
//return $transaksis;

// });

Route::get('/post', function () {
    $post = Post::all();
    return view('tampil_post', compact('post'));
    return $post;
});

Route::get('post', [PostController::class, 'menampilkan']);
Route::get('post/{id}', [PostController::class, 'show']);

Route::get('produk', [ProdukController::class, 'produk']);
Route::get('produk/{id}', [ProdukController::class, 'show']);

Route::get('merek', [MerkController::class, 'merek']);
Route::get('merek/{id}', [MerkController::class, 'show']);


