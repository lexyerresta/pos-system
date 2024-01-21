<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index()
    {
        $promo = Promo::all();
        return view('promo.index', compact('promo'));
    }

    // Metode lain untuk create, store, show, edit, update, destroy
}
