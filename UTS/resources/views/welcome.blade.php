@extends('layouts.template')

@section('content')

<!-- Kartu Profil dan Selamat Datang -->
<div class="card shadow-lg border-0 rounded-lg mt-4 bg-dark text-white">
    <div class="card-body">
        <div class="row">
            <!-- Bagian Foto Profil dan Aksi -->
            <div class="col-md-4 text-center">
                @php
                    $foto = Auth::user()->photo_profile
                        ? asset('storage/' . Auth::user()->photo_profile)
                        : asset('img/defaultAvatar.png'); // Lokasi default avatar  
                @endphp

                <img src="{{ $foto }}" id="preview-image" class="img-thumbnail mb-3" width="250" alt="Foto Profil">

                <!-- Form Upload Foto -->
                <form action="{{ url('/update-photo') }}" method="POST" enctype="multipart/form-data" class="mb-2">
                    @csrf
                    <input type="file" name="photo_profile" id="photo_profile" class="form-control mb-2" accept="image/*" onchange="previewPhoto()" required>
                    <button type="submit" class="btn btn-warning w-100">Change Photo</button>
                </form>

                <!-- Tombol Hapus Foto -->
                @if(Auth::user()->photo_profile)
                    <form action="{{ url('/delete-photo') }}" method="POST" class="mb-2">
                        @csrf
                        <button type="submit" class="btn btn-danger w-100">Delete Photo</button>
                    </form>
                @endif
            </div>

            <!-- Bagian Informasi Pengguna -->
            <div class="col-md-8">
                <table class="table table-bordered table-dark">
                    <tr>
                        <th><i class="fas fa-id-badge"></i> User ID</th>
                        <td>{{ $user->user_id }}</td>
                    </tr>
                    <tr>
                        <th><i class="fas fa-user"></i> Username</th>
                        <td>{{ $user->username }}</td>
                    </tr>
                    <tr>
                        <th><i class="fas fa-signature"></i> Nama</th>
                        <td>{{ $user->nama }}</td>
                    </tr>
                    <tr>
                        <th><i class="fas fa-user-shield"></i> Role</th>
                        <td>{{ $user->level->level_nama }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Alert -->
        @if(session('success'))
            <div class="alert alert-success mt-3 text-center">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger mt-3 text-center">{{ session('error') }}</div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger mt-3 text-center">
                <ul class="mb-0">
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>

<!-- Script Preview -->
<script>
    function previewPhoto() {
        const input = document.getElementById('photo_profile');
        const preview = document.getElementById('preview-image');

        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    }
</script>

@endsection
