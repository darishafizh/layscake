<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function view(Request $kirim)
    {
        $keyword = $kirim->input('searchInput');

        if ($keyword) {
            $produk = Pelanggan::where('nama_pelanggan', 'LIKE', '%' . $keyword . '%')
                ->get();
        } else {
            $produk = Pelanggan::all();
        }

        return view('pages.Pelanggan', ['tampil' => $produk]);
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
