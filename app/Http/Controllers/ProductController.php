<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Number;

class ProductController extends Controller
{
    public function index()
    {
        $data['title'] = "Product";
        return view('product.index', $data);
    }

    public function data_ajax()
    {
        $data = Product::select('*');
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('checkbox', function ($item) {
                return '<div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                              </div>';
            })
            ->addColumn('product', function ($item) {
                $data = $item->nama . $item->foto;
                return $data;
            })
            ->addColumn('harga_satuan', function ($item) {
                $data = Number::format($item->harga_satuan);
                return 'Rp ' . $data;
            })
            ->rawColumns(['checkbox', 'product', 'harga_satuan'])
            ->make(true);
    }

    public function create()
    {
        $data['title'] = 'Create New Product';
        return view('product.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
        ]);

        $fotoName = time() . '.' . $request->foto->extension();
        $uploadedFoto = $request->image->move(public_path('foto'), $fotoName);
        $fotoPath = 'foto/' . $fotoName;

        try {
            $product = new Product();
            $product->nama = $request->nama;
            $product->harga_satuan = $request->harga_satuan;
            $product->stok = $request->stok;
            $product->foto = $fotoPath;
            $product->save();

            return redirect('product.index')->with('success', 'Product berhasil disimpan.');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }
}
