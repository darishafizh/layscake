<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = "data_pelanggan";
    protected $primaryKey = "id_pelanggan";
    protected $fillable = ["id_pelanggan", "nama_pelanggan", "alamat", "hp_pelanggan"];
    public $timestamps = false;
    protected $keyType = 'string';
}
