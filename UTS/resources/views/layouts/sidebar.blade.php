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
                      <p>Home</p>
                  </a>
              </li>

              <li class="nav-header text-warning">USER MANAGEMENT</li> <!-- Tambahkan text-warning di sini -->

              <li class="nav-item">
                  <a href="/level" class="nav-link text-warning"> <!-- Tambahkan text-warning di sini -->
                      <i class="nav-icon fas fa-user-shield text-warning"></i> <!-- Tambahkan text-warning di sini -->
                      <p>Level User</p>
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
  <!-- /.sidebar -->
</aside>
