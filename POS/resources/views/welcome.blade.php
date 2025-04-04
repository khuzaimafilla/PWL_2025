@extends('layouts.template')

@section('content')

<!-- Selamat Datang dengan Username -->
<div class="card mt-3">
    <div class="card-header">
        <h3 class="card-title">Halo, {{ Auth::user()->username }}! Apa kabar?</h3>
    </div>
    <div class="card-body">
        Selamat datang {{ Auth::user()->nama }}, ini adalah halaman utama dari aplikasi ini.
    </div>
</div>

<!-- Profil Pengguna -->
<div class="card">
    <div class="card-header text-center">
        <h3 class="card-title">Profil Pengguna</h3>
    </div>
    <div class="card-body">
        <div class="row align-items-center">
            <!-- Foto Profil -->
            <div class="col-md-4 text-center">
                <img src="{{ asset('path/to/profile.jpg') }}" alt="Foto Profil" class="img-thumbnail" width="150" style="border-radius: 0%;">
                <div class="text-center mt-3">
                    <form action="{{ url('profile/edit') }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-info">Ganti Profil</button>
                    </form>
                </div>
            </div>

            <!-- Informasi Pengguna -->
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td>{{ Auth::user()->user_id }}</td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td>{{ Auth::user()->username }}</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>{{ Auth::user()->nama }}</td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td>{{ Auth::user()->level->level_nama }}</td>
                    </tr>
                </table>
            </div>

            <!-- Tombol Logout -->
            <div class="col-md-12 mt-3">
                <form action="{{ url('logout') }}" method="GET">
                    @csrf
                    <button type="submit" class="btn btn-danger w-100">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
