<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Number;
use Yajra\DataTables\Facades\DataTables;

class PenjualanController extends Controller
{
    public function index()
    {
        $data['title'] = "Penjualan";
        return view('penjualan.index', $data);
    }

    public function data_ajax()
    {
        $data = Penjualan::data_ajax();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('checkbox', function ($item) {
                return '<div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                              </div>';
            })
            ->addColumn('product', function ($item) {
                $data = '<ul>
                            <li class="media">
                            <a href="#">
                                <img class="mr-1 rounded" width="50" src="{{asset("theme/assets/img/products/product-1-50.png")}}" alt="">
                            </a>
                            <div class="media-body">
                                <div class="media-title m-0">' . $item->nama_product . '</div>
                                <div class="text-muted text-small m-0">' . $item->harga_product . '</div>
                            </div>
                            </li>
                        </ul>';
                return $data;
            })
            ->addColumn('qty', function ($item) {
                $data = $item->qty;
                return $data;
            })
            ->addColumn('jumlah', function ($item) {
                $data = Number::format($item->jumlah);
                return 'Rp ' . $data;
            })
            ->addColumn('tanggal', function ($item) {
                $data = Carbon::parse($item->tanggal)->format('d M Y');
                return $data;
            })
            ->addColumn('pelanggan', function ($item) {
                $data = $item->nama_pelanggan;
                return $data;
            })
            ->rawColumns(['checkbox', 'product', 'qty', 'jumlah', 'tanggal', 'pelanggan'])
            ->make(true);
    }
}
