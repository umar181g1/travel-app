<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekOutController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.cekout');
    }

    public function sukses(Request $request)
    {
        return view('pages.sukses');
    }
}
