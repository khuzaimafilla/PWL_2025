@extends('layouts.template')

@section('content')
    <div class="card bg-dark text-white">
        <div class="card-header bg-dark text-white">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body"> 
            @empty($kategori)
            <div class="alert alert-danger alert-dismissible">
                <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5> 
                Data yang Anda cari tidak ditemukan.
            </div> 
            @else
                <table class="table table-bordered table-striped table-hover table-sm">
                    <tr>
                        <th>ID</th>
                        <td>{{ $kategori->kategori_id }}</td>
                    </tr>
                    <tr>
                        <th>Kode Kategori</th>
                        <td>{{ $kategori->kategori_kode }}</td>
                    </tr>
                    <tr>
                        <th>Nama Kategori</th>
                        <td>{{ $kategori->kategori_nama }}</td>
                    </tr>
                </table> 
            @endempty
            <a href="{{ url('kategori') }}" class="btn btn-sm btn-warning mt-2">Kembali</a>
        </div>
    </div> 
@endsection

@push('css') 
@endpush

@push('js') 
@endpush