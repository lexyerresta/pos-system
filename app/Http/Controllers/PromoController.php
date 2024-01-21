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
    public function create()
    {
        return view('promo.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_promo' => 'required|max:255|unique:promo',
            'nama_promo' => 'required|max:255',
            'keterangan' => 'required|max:255',
        ]);

        Promo::create($validatedData);
        return redirect()->route('promo.index');
    }

    public function show($kode_promo)
    {
        $promo = Promo::findOrFail($kode_promo);
        return view('promo.show', compact('promo'));
    }


    public function edit($kode_promo)
    {
        $promo = Promo::findOrFail($kode_promo);
        return view('promo.edit', compact('promo'));
    }


    public function update(Request $request, $kode_promo)
    {
        $validatedData = $request->validate([
            'nama_promo' => 'required|max:255',
            'keterangan' => 'required|max:255',
        ]);

        $promo = Promo::findOrFail($kode_promo);
        $promo->update($validatedData);
        return redirect()->route('promo.index')->with('success', 'Promo berhasil diperbarui.');
    }

    public function destroy($kode_promo)
    {
        $promo = Promo::findOrFail($kode_promo);
        $promo->delete();
        return redirect()->route('promo.index')->with('success', 'Promo berhasil dihapus.');
    }
}
