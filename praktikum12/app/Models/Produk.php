<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

     // Menentukan nama tabel yang terhubung dengan model ini
     protected $table = 'produk';

    //matiin timestamps
    public $timestamps = false;


     // Kolom-kolom yang dapat diisi secara massal
     protected $fillable = [
         'kode',             // Kode produk
         'nama',             // Nama produk
         'harga_jual',       // Harga jual produk
         'harga_beli',       // Harga beli produk
         'stok',             // Jumlah stok produk
         'min_stok',         // Jumlah minimal stok produk
         'deskripsi',        // Deskripsi produk
         'kategori_produk_id',// ID kategori produk
     ];
 
     // Definisi relasi "belongs to" dengan model KategoriProduk
     public function kategori_produk()
     {
         return $this->belongsTo(KategoriProduk::class);
     }
}
