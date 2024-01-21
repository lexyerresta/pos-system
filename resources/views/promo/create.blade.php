{{-- resources/views/promo/create.blade.php --}}
@extends('layouts.app')

@section('title', 'Tambah Promo Baru')

@section('content')
<div class="container">
    <h1>Tambah Promo Baru</h1>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('promo.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="kode_promo" class="form-label">Kode Promo</label>
                    <input type="text" class="form-control" id="kode_promo" name="kode_promo" required>
                </div>
                <div class="mb-3">
                    <label for="nama_promo" class="form-label">Nama Promo</label>
                    <input type="text" class="form-control" id="nama_promo" name="nama_promo" required>
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('promo.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
