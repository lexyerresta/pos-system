{{-- resources/views/penjualan_header/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Penjualan Header</h1>
    <a href="{{ route('penjualan-header.create') }}" class="btn btn-primary">Tambah Penjualan Header</a>
    <table class="table">
        <thead>
            <tr>
                <th>No Transaksi</th>
                <th>Tanggal Transaksi</th>
                <th>Customer</th>
                <th>Total Bayar</th>
                <th>PPN</th>
                <th>Grand Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualan as $header)
            <tr>
                <td>{{ $header->no_transaksi }}</td>
                <td>{{ $header->tgl_transaksi }}</td>
                <td>{{ $header->customer }}</td>
                <td>{{ $header->total_bayar }}</td>
                <td>{{ $header->ppn }}</td>
                <td>{{ $header->grand_total }}</td>
                <td>
                    <a href="{{ route('penjualan-header.show', $header->no_transaksi) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('penjualan-header.edit', $header->no_transaksi) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('penjualan-header.destroy', $header->no_transaksi) }}" method="POST" style="display: inline-block;">
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
