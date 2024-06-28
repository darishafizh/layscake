<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    public function view(Request $request)
    {
        $keyword = $request->input('searchInput');

        if ($keyword) {
            $produk = Produk::where('nama_produk', 'LIKE', '%' . $keyword . '%')
                ->get();
        } else {
            $produk = Produk::all();
        }

        return view('pages.Produk', ['tampil' => $produk]);
    }

    // Insert
    public function insert()
    {
        return view("crud.produkInsert");
    }
    public function simpan(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'stok' => 'required|numeric',
            'harga_satuan' => 'required|numeric',
            'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $pathPublic = null;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . "-" . $file->getClientOriginalName();
            $foldername = 'fotoProduk';
            $file->move(public_path($foldername), $filename);
            $pathPublic = $foldername . "/" . $filename;
        }

        Produk::create([
            'nama_produk' => $request->nama_produk,
            'stok' => $request->stok,
            'harga_satuan' => $request->harga_satuan,
            'foto_produk' => $pathPublic
        ]);

        return redirect('viewProduk')->with('success', 'Produk berhasil ditambahkan!');
    }


    // Update
    public function edit($id)
    {
        $produk = Produk::find($id);
        if (!$produk) {
            return redirect('/viewProduk')->with('error', 'Produk tidak ditemukan.');
        }
        return view('crud.produkEdit', compact('produk'));
    }

    public function update($id, Request $request)
    {
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama_file = time() . "-" . $file->getClientOriginalName();
            $folder = 'foto';
            $file->move($folder, $nama_file);
            $path = $folder . "/" . $nama_file;
        } else {
            $path = $request->pathFoto;
        }

        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required',
            'stok' => 'required',
            'harga_satuan' => 'required',
            'foto_produk' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Produk::where("id_produk", $id)->update([
            'nama_produk' => $request->nama_produk,
            'stok' => $request->stok,
            'harga_satuan' => $request->harga_satuan,
            'foto_produk' => $path
        ]);

        return redirect('/viewProduk');
    }

    // Delete
    public function hapus($id)
    {
        $dataProduk = Produk::find($id);
        FILE::delete($dataProduk->foto);
        $dataProduk->delete();
        return redirect('viewProduk');
    }
}
