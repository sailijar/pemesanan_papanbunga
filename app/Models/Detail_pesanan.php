<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_pesanan extends Model
{
    use HasFactory;


     protected $fillable = [
        'id_pelanggan',
        'id_pesanan',
        'id_produk',
        'isi_papan',
        'jumlah',
        'total_harga',
    ];

    public function produk()
        {
            return $this->hasOne(Produk::class, 'id', 'id_produk');
        }

    public function pesanan()
        {
            return $this->hasOne(Pesanan::class, 'id', 'id_pesanan');
        }

    public function pelanggan()
        {
            return $this->hasOne(Pelanggan::class, 'id', 'id_pelanggan');
        }



}
