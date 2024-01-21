{{-- resources/views/promo/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Promo</h1>
    <a href="{{ route('promo.create') }}" class="btn btn-primary mb-3">Tambah Promo</a>
    <table class="table">
        <thead>
            <tr>
                <th>Kode Promo</th>
                <th>Nama Promo</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($promo as $item)
            <tr>
                <td>{{ $item->kode_promo }}</td>
                <td>{{ $item->nama_promo }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>
                    <a href="{{ route('promo.edit', $item->kode_promo) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('promo.destroy', $item->kode_promo) }}" method="POST" style="display: inline-block;">
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
