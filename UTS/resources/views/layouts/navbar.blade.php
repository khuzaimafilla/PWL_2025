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
        <li class="nav-item">
            <form action="" method="POST">
                @csrf
                <button type="submit" class="btn btn-warning btn-sm">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </li>
    </ul>
</nav>

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