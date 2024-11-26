<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $data['title'] = "Penjualan";
        return view('penjualan.index', $data);
    }
}
