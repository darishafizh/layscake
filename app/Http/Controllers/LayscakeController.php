<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayscakeController extends Controller
{
    public function dashboard()
    {
        return view("pages.Dashboard");
    }
}
