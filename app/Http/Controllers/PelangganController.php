<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $data['title'] = "Pelanggan";
        return view('pelanggan.index', $data);
    }
}
