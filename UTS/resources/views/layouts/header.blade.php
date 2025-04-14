<nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
    <!-- Kiri -->
    <ul class="navbar-nav">
        <li class="nav-item d-flex align-items-center">
            <span class="nav-link text-warning" id="live-clock">
                <i class="far fa-clock"></i> <span id="clock">00:00:00</span> {{ config('app.timezone') }}
            </span>
        </li>
    </ul>
  
    <!-- Kanan -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-flex align-items-center ml-3">
            @php
                $foto = auth()->user()->photo_profile
                    ? asset('storage/' . auth()->user()->photo_profile)
                    : asset('img/defaultAvatar.png'); 
            @endphp

            <!-- Foto Profil -->
            <img src="{{ $foto }}" alt="Foto Profil" class="rounded-circle mr-2" width="35" height="35" style="object-fit: cover;">

            <!-- Nama Pengguna -->
            <span class="nav-link text-warning" id="username-display">
                Hi! {{ auth()->user()->username }}
            </span>
        </li>
        <li class="nav-item">
            <form id="logout-form" action="{{ url('logout') }}" method="GET" class="d-inline">
                @csrf
                <button type="button" id="logout-btn" class="btn btn-warning nav-link" style="color: rgb(28, 28, 28);">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </li>
    </ul>

</nav>
  
<!-- Jam -->
<script>
    function updateClock() {
        const now = new Date();
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');
        document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds}`;
    }
    setInterval(updateClock, 1000);
    updateClock(); // initial call
</script>
  
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
<!-- Logout Alert -->
<script>
    document.getElementById('logout-btn').addEventListener('click', function (e) {
        Swal.fire({
            title: 'Logout?',
            text: "Kamu yakin ingin keluar?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Ya, Logout'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('logout-form').submit();
            }
        });
    });
</script>
