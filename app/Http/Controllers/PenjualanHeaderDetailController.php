<?php

namespace App\Http\Controllers;

use App\Models\PenjualanHeaderDetail;
use Illuminate\Http\Request;

class PenjualanHeaderDetailController extends Controller
{
    public function index()
    {
        $detailPenjualan = PenjualanHeaderDetail::with('penjualanHeader', 'masterBarang')->get();
        return view('penjualan_header_detail.index', compact('detailPenjualan'));
    }

    // Metode lain untuk create, store, show, edit, update, destroy
}
