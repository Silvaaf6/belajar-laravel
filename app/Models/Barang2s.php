<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang2s extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_barang', 'harga', 'stok'];
    public $timestamps = true;

    public function Transaksis()
    {
        return $this->hasMany(Transaksis::class);
    }
}
