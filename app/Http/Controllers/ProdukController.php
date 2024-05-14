<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ProdukController extends Controller
{
    public function produk()
    {
        $produk = Produk::all();
        return view('produks/index', compact('produk'));
    }

    public function show($id){
        $produk = Produk::findOrFail($id);
        return view('produks/show', compact('produk'));
    }
}
