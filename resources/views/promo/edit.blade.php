{{-- resources/views/promo/edit.blade.php --}}
@extends('layouts.app')

@section('title', 'Edit Promo')

@section('content')
<div class="container">
    <h1>Edit Promo</h1>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('promo.update', $promo->kode_promo) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="kode_promo" class="form-label">Kode Promo</label>
                    <input type="text" class="form-control" id="kode_promo" name="kode_promo" value="{{ $promo->kode_promo }}" required readonly>
                </div>
                
                <div class="mb-3">
                    <label for="nama_promo" class="form-label">Nama Promo</label>
                    <input type="text" class="form-control" id="nama_promo" name="nama_promo" value="{{ $promo->nama_promo }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $promo->keterangan }}" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('promo.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
