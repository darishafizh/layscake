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
        $selectProduk = Produk::all();
        $selectPelanggan = Pelanggan::all();
        return view('crud.penjualanInsert', ['namaProduk' => $selectProduk, 'namaPelanggan' => $selectPelanggan]);
    }

    public function getProduk($id_produk)
    {
        $produk = Produk::find($id_produk);
        if ($produk) {
            return response()->json($produk);
        }
        return response()->json(['error' => 'Produk tidak ditemukan'], 404);
    }

    public function simpan(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal_penjualan' => 'required|date',
            'id_user' => 'required',
            'id_produk' => 'required|exists:data_produk,id_produk',
            'jumlah' => 'required|integer|min:1',
            'total_harga' => 'required|numeric|min:0',
            'id_pelanggan' => 'required',
        ]);

        $penjualan = new Penjualan();
        $penjualan->tanggal_penjualan = $request->tanggal_penjualan;
        $penjualan->id_user = $request->id_user;
        $penjualan->id_produk = $request->id_produk;
        $penjualan->jumlah = $request->jumlah;
        $penjualan->total_harga = $request->total_harga;
        $penjualan->id_pelanggan = $request->id_pelanggan;

        $penjualan->save();

        return redirect('viewPenjualan')->with('success', 'Data berhasil ditambahkan!');
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
