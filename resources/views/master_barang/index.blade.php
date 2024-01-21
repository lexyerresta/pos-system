{{-- resources/views/master_barang/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Barang</h1>
    <a href="{{ route('master-barang.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>
    <table class="table">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $item)
            <tr>
                <td>{{ $item->kode_barang }}</td>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->harga }}</td>
                <td>
                    <a href="{{ route('master-barang.edit', $item->kode_barang) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('master-barang.destroy', $item->kode_barang) }}" method="POST" style="display: inline-block;">
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
