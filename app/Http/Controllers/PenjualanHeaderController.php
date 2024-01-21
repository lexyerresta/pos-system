<?php

namespace App\Http\Controllers;

use App\Models\MasterBarang;
use Illuminate\Http\Request;

class PenjualanHeaderController extends Controller
{
    public function index()
    {
        $barang = MasterBarang::all();
        return view('master_barang.index', compact('barang'));
    }

    // Metode lain untuk create, store, show, edit, update, destroy
}
