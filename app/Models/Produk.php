<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = "data_produk";
    protected $primaryKey = "id_produk";
    protected $fillable = ["id_produk", "nama_produk", "stok", "harga_satuan", "foto_produk"];
    public $timestamps = false;
    protected $keyType = 'string';
}
