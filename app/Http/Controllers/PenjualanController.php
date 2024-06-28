<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Produk;
use App\Models\Pelanggan;
use App\Models\User;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function view(Request $kirim)
    {
        $tampil = Penjualan::with(["Produk", "Pelanggan"])->get();
        return view("pages.Penjualan", compact('tampil'));
    }

    // Insert
    public function insert()
    {
    }
    public function simpan()
    {
    }

    // Update
    public function edit()
    {
    }
    public function update()
    {
    }

    // Delete
    public function hapus()
    {
    }
}
