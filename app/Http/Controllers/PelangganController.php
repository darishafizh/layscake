<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PelangganController extends Controller
{
    public function view(Request $request)
    {
        $keyword = $request->input('searchInput');

        if ($keyword) {
            $pelanggan = Pelanggan::where('nama_pelanggan', 'LIKE', '%' . $keyword . '%')
                ->get();
        } else {
            $pelanggan = Pelanggan::all();
        }

        return view('pages.Pelanggan', ['tampil' => $pelanggan]);
    }

    // Insert
    public function insert()
    {
        return view("crud.pelangganInsert");
    }
    public function simpan(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'hp_pelanggan' => 'required'
        ]);

        Pelanggan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'hp_pelanggan' => $request->hp_pelanggan
        ]);

        return redirect('viewPelanggan')->with('success', 'Pelanggan berhasil ditambahkan!');
    }

    // Update
    public function edit($id)
    {
        $pelanggan = Pelanggan::find($id);
        if (!$pelanggan) {
            return redirect('/viewPelanggan')->with('error', 'Pelanggan tidak ditemukan.');
        }
        return view('crud.pelangganEdit', compact('pelanggan'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'hp_pelanggan' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Pelanggan::where("id_pelanggan", $id)->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'hp_pelanggan' => $request->hp_pelanggan
        ]);

        return redirect('/viewPelanggan');
    }

    // Delete
    public function hapus($id)
    {
        $dataPelanggan = Pelanggan::find($id);
        $dataPelanggan->delete();
        return redirect('viewPelanggan');
    }
}
