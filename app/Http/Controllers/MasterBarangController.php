<?php

namespace App\Http\Controllers;

use App\Models\MasterBarang;
use Illuminate\Http\Request;

class MasterBarangController extends Controller
{
    public function index()
    {
        $barang = MasterBarang::all();
        return view('master_barang.index', compact('barang'));
    }

    // Metode lain untuk create, store, show, edit, update, destroy
    public function create()
    {
        return view('master_barang.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_barang' => 'required|max:255|unique:master_barang',
            'nama_barang' => 'required|max:255',
            'harga' => 'required|numeric',
        ]);

        MasterBarang::create($validatedData);
        return redirect()->route('master-barang.index');
    }

    public function show($kode_barang)
    {
        $barang = MasterBarang::findOrFail($kode_barang);
        return view('master_barang.show', compact('barang'));
    }


    public function edit($kode_barang)
    {
        $barang = MasterBarang::findOrFail($kode_barang);
        return view('master_barang.edit', compact('barang'));
    }


    public function update(Request $request, $kode_barang)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required|max:255',
            'harga' => 'required|numeric',
        ]);

        $barang = MasterBarang::findOrFail($kode_barang);
        $barang->update($validatedData);
        return redirect()->route('master-barang.index')->with('success', 'Barang berhasil diperbarui.');
    }

    public function destroy($kode_barang)
    {
        $barang = MasterBarang::findOrFail($kode_barang);
        $barang->delete();
        return redirect()->route('master-barang.index')->with('success', 'Barang berhasil dihapus.');
    }
}
