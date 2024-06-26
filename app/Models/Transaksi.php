<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_barang', 'id_pembeli', 'jumlah', 'tanggal'];
    public $timestamps = true;

    public function barang2s()
    {
        return $this->BelongsTo(Barang2s::class, 'id_barang');
    }

    public function pembelis()
    {
        return $this->BelongsTo(Pembeli::class, 'id_pembeli');
    }
}
