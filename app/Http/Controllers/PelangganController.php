<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function store(Request $request)
    {
        try {
            $pelanggan = new Pelanggan();
            $pelanggan->nama = $request->nama;
            $pelanggan->telephone = $request->telepon;
            $pelanggan->alamat = $request->alamat;
            $pelanggan->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 422);
        }
        return response()->json(['status' => 'success', 'message' => __('Pelanggan Successfully Created!')], 200);
    }
}
