{{-- resources/views/master_barang/edit.blade.php --}}
@extends('layouts.app')

@section('title', 'Edit Barang')

@section('content')
<div class="container">
    <h1>Edit Barang</h1>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('master-barang.update', $barang->kode_barang) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="kode_barang" class="form-label">Kode Barang</label>
                    <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{ $barang->kode_barang }}" required readonly>
                </div>
                
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" value="{{ $barang->harga }}" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('master-barang.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
