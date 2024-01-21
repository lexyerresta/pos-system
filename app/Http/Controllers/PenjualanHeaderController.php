<?php

namespace App\Http\Controllers;

use App\Models\MasterBarang;
use App\Models\PenjualanHeader;
use App\Models\Promo;
use Illuminate\Http\Request;

class PenjualanHeaderController extends Controller
{
    public function indexCreate()
    {
        $penjualanHeaders = PenjualanHeader::all();
        $masterBarangs = MasterBarang::all();
        $promos = Promo::all();
        return view('penjualan_header.index_create', compact('penjualanHeaders', 'masterBarangs', 'promos'));
    }

    public function store(Request $request)
    {
        // Include your logic to calculate totals and store the transaction
        // For now, we'll just validate the request as an example
        $validatedData = $request->validate([
            // Validation rules
        ]);

        $penjualanHeader = PenjualanHeader::create($validatedData);
        // You might want to store details separately in penjualan_header_detail
        // ...

        return redirect()->route('penjualan-header.index-create');
    }
}
