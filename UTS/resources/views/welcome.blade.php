@extends('layouts.template')

@section('content')

<!-- Kartu Profil dan Selamat Datang -->
<div class="card shadow-lg border-0 rounded-lg mt-4 bg-dark text-white">
    <div class="card-body">
        <div class="row">
            <div class="container mt-4">
                <div class="row g-3">
                    <!-- Data Level -->
                    <div class="col-md">
                        <div class="card text-white text-center shadow-sm" style="background-color: #f39c12;">
                            <div class="card-body">
                                <h5 class="fw-bold">{{ $levelCount }}</h5>
                                <p>Data Level</p>
                            </div>
                        </div>
                    </div>
                    <!-- Data User -->
                    <div class="col-md">
                        <div class="card text-white text-center shadow-sm" style="background-color: #f39c12;">
                            <div class="card-body">
                                <h5 class="fw-bold">{{ $userCount }}</h5>
                                <p>Data User</p>
                            </div>
                        </div>
                    </div>
                    <!-- Data Kategori -->
                    <div class="col-md">
                        <div class="card text-white text-center shadow-sm" style="background-color: #f39c12;">
                            <div class="card-body">
                                <h5 class="fw-bold">{{ $kategoriCount }}</h5>
                                <p>Data Kategori</p>
                            </div>
                        </div>
                    </div>
                    <!-- Data Barang -->
                    <div class="col-md">
                        <div class="card text-white text-center shadow-sm" style="background-color: #f39c12;">
                            <div class="card-body">
                                <h5 class="fw-bold">{{ $barangCount }}</h5>
                                <p>Data Barang</p>
                            </div>
                        </div>
                    </div>
                    <!-- Data Supplier -->
                    <div class="col-md">
                        <div class="card text-white text-center shadow-sm" style="background-color: #f39c12;">
                            <div class="card-body">
                                <h5 class="fw-bold">{{ $supplierCount }}</h5>
                                <p>Data Supplier</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bar Chart untuk Jumlah Data -->
                <div class="card mt-4 shadow border-0">
                    <div class="card-body">
                        <h5 class="text-center mb-4">Statistik Jumlah Data</h5>
                        <div style="height: 200px;">
                        <canvas id="dataChart"></canvas>
                        </div>
                    </div>
                </div>

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

{{-- Script barchart --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('dataChart').getContext('2d');
    const dataChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Level', 'User', 'Kategori', 'Barang', 'Supplier'],
            datasets: [{
                label: 'Jumlah Data',
                data: [
                    {{ $levelCount }},
                    {{ $userCount }},
                    {{ $kategoriCount }},
                    {{ $barangCount }},
                    {{ $supplierCount }}
                ],
                backgroundColor: [
                    '#f39c12',
                    '#f39c12',
                    '#f39c12',
                    '#f39c12',
                    '#f39c12'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return ' ' + context.parsed.y + ' data';
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision:0,
                        stepSize: 1
                    }
                }
            }
        }
    });
</script>


@endsection
