{{-- resources/views/penjualan_header/index_create.blade.php --}}
@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="mb-4">Penjualan Header</h1>
    
<!-- Buttons to navigate to other routes -->
<div class="mt-3">
    <a href="{{ route('master-barang.index') }}" class="btn btn-primary">Master Barang</a>
    <a href="{{ route('promo.index') }}" class="btn btn-primary">Promo</a>
    <a href="{{ route('penjualan-header-detail.index') }}" class="btn btn-primary">Penjualan Header Detail</a>
</div>

    <!-- Product Selection Form -->
    <form method="POST" action="{{ route('penjualan.store') }}">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label for="customer" class="form-label">Customer</label>
                <input type="text" class="form-control" id="customer" name="customer" required>
            </div>
            <div class="col">
                <label for="barang" class="form-label">Barang</label>
                <select class="form-select" id="barang" name="barang" required>
                    @foreach ($masterBarangs as $barang)
                        <option value="{{ $barang->kode_barang }}">{{ $barang->nama_barang }} - Rp{{ number_format($barang->harga, 2) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="promo" class="form-label">Promo</label>
                <select class="form-select" id="promo" name="promo">
                    <option value="">Pilih Promo</option>
                    @foreach ($promos as $promo)
                        <option value="{{ $promo->kode_promo }}">{{ $promo->nama_promo }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- Transactions Table -->
    <h2 class="mt-5">Transaksi Terakhir</h2>
    <table class="table">
        <thead>
            <tr>
                <th>No Transaksi</th>
                <th>Tanggal Transaksi</th>
                <th>Customer</th>
                <th>Total Bayar</th>
                <th>PPN</th>
                <th>Grand Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualanHeaders as $header)
                <tr>
                    <td>{{ $header->no_transaksi }}</td>
                    <td>{{ \Carbon\Carbon::parse($header->tgl_transaksi)->format('d-m-Y') }}</td>
                    <td>{{ $header->customer }}</td>
                    <td>Rp{{ number_format($header->total_bayar, 2) }}</td>
                    <td>Rp{{ number_format($header->ppn, 2) }}</td>
                    <td>Rp{{ number_format($header->grand_total, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
