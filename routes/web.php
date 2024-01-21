<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterBarangController;
use App\Http\Controllers\PenjualanHeaderController;
use App\Http\Controllers\PenjualanHeaderDetailController;
use App\Http\Controllers\PromoController;
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

// Routes for MasterBarang
Route::get('/master-barang', [MasterBarangController::class, 'index'])->name('master-barang.index');
Route::get('/master-barang/create', [MasterBarangController::class, 'create'])->name('master-barang.create');
Route::post('/master-barang', [MasterBarangController::class, 'store'])->name('master-barang.store');
Route::get('/master-barang/{kode_barang}/edit', [MasterBarangController::class, 'edit'])->name('master-barang.edit');
Route::put('/master-barang/{kode_barang}', [MasterBarangController::class, 'update'])->name('master-barang.update');
Route::delete('/master-barang/{kode_barang}', [MasterBarangController::class, 'destroy'])->name('master-barang.destroy');

// Routes for Promo
Route::get('/promo', [PromoController::class, 'index'])->name('promo.index');
Route::get('/promo/create', [PromoController::class, 'create'])->name('promo.create');
Route::post('/promo', [PromoController::class, 'store'])->name('promo.store');
Route::get('/promo/{kode_promo}/edit', [PromoController::class, 'edit'])->name('promo.edit');
Route::put('/promo/{kode_promo}', [PromoController::class, 'update'])->name('promo.update');
Route::delete('/promo/{kode_promo}', [PromoController::class, 'destroy'])->name('promo.destroy');

// Routes for PenjualanHeader
// Display the POS interface
Route::get('/', [PenjualanHeaderController::class, 'indexCreate'])->name('penjualan.index');

// Process the transaction
Route::post('/penjualan', [PenjualanHeaderController::class, 'store'])->name('penjualan.store');

// Routes for PenjualanHeaderDetail
Route::get('/penjualan-header-detail', [PenjualanHeaderDetailController::class, 'index'])->name('penjualan-header-detail.index');
Route::get('/penjualan-header-detail/create', [PenjualanHeaderDetailController::class, 'create'])->name('penjualan-header-detail.create');
Route::post('/penjualan-header-detail', [PenjualanHeaderDetailController::class, 'store'])->name('penjualan-header-detail.store');
Route::get('/penjualan-header-detail/{id}/edit', [PenjualanHeaderDetailController::class, 'edit'])->name('penjualan-header-detail.edit');
Route::put('/penjualan-header-detail/{id}', [PenjualanHeaderDetailController::class, 'update'])->name('penjualan-header-detail.update');
Route::delete('/penjualan-header-detail/{id}', [PenjualanHeaderDetailController::class, 'destroy'])->name('penjualan-header-detail.destroy');