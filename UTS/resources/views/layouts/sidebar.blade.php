<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
      <img src="{{ asset('img/bnb.png') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: 1; width: 30px;">
      <span class="brand-text font-weight-bold text-warning">UTS Laravel</span> <!-- Tambahkan text-warning -->
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">

              <li class="nav-item">
                  <a href="/" class="nav-link text-warning"> <!-- Tambahkan text-warning di sini -->
                      <i class="nav-icon fas fa-home text-warning"></i> <!-- Tambahkan text-warning di sini -->
                      <p>Dashboard</p>
                  </a>
              </li>

              <li class="nav-header text-warning">PROFIL</li> <!-- Tambahkan text-warning di sini -->

              <li class="nav-item">
                <a href="/profil" class="nav-link text-warning"> <!-- Tambahkan text-warning di sini -->
                    <i class="nav-icon fas fa-user text-warning"></i> <!-- Tambahkan text-warning di sini -->
                    <p>Profil Pengguna</p>
                </a>
              </li>

              <li class="nav-header text-warning">USER MANAGEMENT</li> <!-- Tambahkan text-warning di sini -->

              <li class="nav-item">
                  <a href="/level" class="nav-link text-warning"> <!-- Tambahkan text-warning di sini -->
                      <i class="nav-icon fas fa-user-shield text-warning"></i> <!-- Tambahkan text-warning di sini -->
                      <p>Data Level</p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="/user" class="nav-link text-warning"> <!-- Tambahkan text-warning di sini -->
                      <i class="nav-icon fas fa-users text-warning"></i> <!-- Tambahkan text-warning di sini -->
                      <p>Data User</p>
                  </a>
              </li>

              <li class="nav-header text-warning">BARANG MANAGEMENT</li> <!-- Tambahkan text-warning di sini -->

              <li class="nav-item">
                  <a href="/kategori" class="nav-link text-warning"> <!-- Tambahkan text-warning di sini -->
                      <i class="nav-icon fas fa-tags text-warning"></i> <!-- Tambahkan text-warning di sini -->
                      <p>Data Kategori</p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="/barang" class="nav-link text-warning"> <!-- Tambahkan text-warning di sini -->
                      <i class="nav-icon fas fa-boxes text-warning"></i> <!-- Tambahkan text-warning di sini -->
                      <p>Data Barang</p>
                  </a>
              </li>

              <li class="nav-header text-warning">SUPPLIER MANAGEMENT</li> <!-- Tambahkan text-warning di sini -->

              <li class="nav-item">
                  <a href="/supplier" class="nav-link text-warning"> <!-- Tambahkan text-warning di sini -->
                      <i class="nav-icon fas fa-truck text-warning"></i> <!-- Tambahkan text-warning di sini -->
                      <p>Data Supplier</p>
                  </a>
              </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <div class="dino-maskot">
    <img src="{{ asset('img/dino.png') }}" alt="Dino Maskot">
  </div>
  <!-- /.sidebar -->
</aside>

<style>
  .dino-maskot {
    position: absolute;
    bottom: -10px;
    left: 25px;
    z-index: 10;
    width: 220px;
    animation: breathe-realistic 2s ease-in-out infinite;
    transform-origin: bottom center;
  }

  .dino-maskot img {
    width: 100%;
    filter: drop-shadow(0 0 4px rgba(255, 193, 7, 0.5));
  }

  @keyframes breathe-realistic {
  0%   { transform: scaleX(1) scaleY(1); }
  50%  { transform: scaleX(0.95) scaleY(1.12); }
  100% { transform: scaleX(1) scaleY(1); }
}
</style>
