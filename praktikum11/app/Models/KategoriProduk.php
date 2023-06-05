<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;

    // tabel
    protected $table = 'kategori_produk';

    // tabel
    protected $fillable = [
        'nama',  // Nama kategori produk
    ];

    // fungsi untuk relasi "has many" dengan model Produk
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
