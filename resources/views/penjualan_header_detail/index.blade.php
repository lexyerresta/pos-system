{{-- resources/views/penjualan_header_detail/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Penjualan Detail</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>No Transaksi</th>
                <th>Kode Barang</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Discount</th>
                <th>Subtotal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detailPenjualan as $detail)
            <tr>
                <td>{{ $detail->id }}</td>
                <td>{{ $detail->no_transaksi }}</td>
                <td>{{ $detail->kode_barang }}</td>
                <td>{{ $detail->qty }}</td>
                <td>{{ $detail->harga }}</td>
                <td>{{ $detail->discount }}</td>
                <td>{{ $detail->subtotal }}</td>
                <td>
                    <a href="{{ route('penjualan-header-detail.edit', $detail->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('penjualan-header-detail.destroy', $detail->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
