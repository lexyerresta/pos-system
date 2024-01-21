{{-- resources/views/master_barang/create.blade.php --}}
@extends('layouts.app')

@section('title', 'Tambah Barang Baru')

@section('content')
<div class="container">
    <h1>Tambah Barang Baru</h1>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('master-barang.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="kode_barang" class="form-label">Kode Barang</label>
                    <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
                </div>
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('master-barang.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
