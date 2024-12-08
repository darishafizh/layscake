<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PelangganController extends Controller
{
    public function index()
    {
        $data['title'] = "Pelanggan";
        return view('pelanggan.index', $data);
    }

    public function data_ajax()
    {
        $data = Pelanggan::select('*');
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('checkbox', function ($item) {
                return '<div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                              </div>';
            })
            ->rawColumns(['checkbox'])
            ->make(true);
    }

    public function create()
    {
        $data['title'] = 'Create New Pelanggan';
        return view('pelanggan.create', $data);
    }
}
