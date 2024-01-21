<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterBarangController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Menampilkan daftar barang
Route::get('/', [MasterBarangController::class, 'index'])->name('master-barang.index');

// Menampilkan form untuk membuat barang baru
Route::get('/master-barang/create', [MasterBarangController::class, 'create'])->name('master-barang.create');

// Menyimpan barang baru
Route::post('/master-barang', [MasterBarangController::class, 'store'])->name('master-barang.store');

// Menampilkan form untuk mengedit barang
Route::get('/master-barang/{kode_barang}/edit', [MasterBarangController::class, 'edit'])->name('master-barang.edit');

// Memperbarui barang
Route::put('/master-barang/{kode_barang}', [MasterBarangController::class, 'update'])->name('master-barang.update');

// Menghapus barang
Route::delete('/master-barang/{kode_barang}', [MasterBarangController::class, 'destroy'])->name('master-barang.destroy');