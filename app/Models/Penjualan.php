<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = "data_penjualan";
    protected $primaryKey = "id_penjualan";
    protected $fillable = ["id_penjualan", "tanggal_penjualan", "id_user", "id_produk", "jumlah", "total_harga", "id_pelanggan"];
    public $timestamps = false;
    protected $keyType = 'string';

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id_produk');
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan', 'id_pelanggan');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
