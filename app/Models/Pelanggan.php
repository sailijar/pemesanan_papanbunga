<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'no_handphone',
        'alamat',
    ];

    // Relasi: 1 pelanggan punya banyak pesanan
    public function pesanans()
    {
        return $this->belongTo(Pesanan::class);
    }

    public function detailpesanan()
    {
        return $this->belongTo(Detail_pesanan::class);
    }
}
