<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualan';
    protected $primaryKey = 'id';

    public static function data_ajax()
    {
        $data = Penjualan::select(
            'penjualan.*',
            'product.nama as nama_product',
            'product.harga_satuan as harga_product',
            'product.foto as foto_product',
            'pelanggan.nama as nama_pelanggan',
        )
            ->join('product', 'product.id', '=', 'product_id')
            ->join('pelanggan', 'pelanggan.id', '=', 'pelanggan_id')
            ->get();

        return $data;
    }

    public function product()
    {
        return $this->hasOne(Product::class, 'product_id');
    }

    public function pelanggan()
    {
        return $this->hasOne(Pelanggan::class, 'pelanggan_id');
    }
}
