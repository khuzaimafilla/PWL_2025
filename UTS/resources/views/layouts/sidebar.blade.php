<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
      <img src="{{ asset('img/bnb.png') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: 1; width: 30px;">
      <span class="brand-text font-weight-bold">UTS Point Of Sales</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">

              <li class="nav-item">
                  <a href="/" class="nav-link text-warning">
                      <i class="nav-icon fas fa-home text-warning"></i> 
                      <p>Dashboard</p>
                  </a>
              </li>

              <li class="nav-header">PROFIL</li> 

              <li class="nav-item">
                <a href="/profil" class="nav-link text-warning"> 
                    <i class="nav-icon fas fa-user text-warning"></i> 
                    <p>Profil Pengguna</p>
                </a>
              </li>

              <li class="nav-header">USER MANAGEMENT</li>

              <li class="nav-item">
                  <a href="/level" class="nav-link text-warning"> 
                      <i class="nav-icon fas fa-user-shield text-warning"></i> 
                      <p>Data Level</p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="/user" class="nav-link text-warning"> 
                      <i class="nav-icon fas fa-users text-warning"></i> 
                      <p>Data User</p>
                  </a>
              </li>

              <li class="nav-header">BARANG MANAGEMENT</li> 

              <li class="nav-item">
                  <a href="/kategori" class="nav-link text-warning"> 
                      <i class="nav-icon fas fa-tags text-warning"></i> 
                      <p>Data Kategori</p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="/barang" class="nav-link text-warning">
                      <i class="nav-icon fas fa-boxes text-warning"></i>
                      <p>Data Barang</p>
                  </a>
              </li>

              <li class="nav-item">
                <a href="/stok" class="nav-link text-warning">
                    <i class="nav-icon fas fa-boxes text-warning"></i>
                    <p>Stok</p>
                </a>
            </li>

              <li class="nav-header text">SUPPLIER MANAGEMENT</li>

              <li class="nav-item">
                  <a href="/supplier" class="nav-link text-warning">
                      <i class="nav-icon fas fa-truck text-warning"></i> 
                      <p>Data Supplier</p>
                  </a>
              </li>

              <li class="nav-header">TRANSAKSI</li> 

            <li class="nav-item">
                <a href="/penjualan" class="nav-link text-warning">
                    <i class="nav-icon fas fa-shopping-cart text-warning"></i>
                    <p>Penjualan</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/detail_penjualan" class="nav-link text-warning">
                    <i class="nav-icon fas fa-receipt text-warning"></i>
                    <p>Detail Penjualan</p>
                </a>
            </li>

          </ul>
      </nav>
      <!-- /.sidebar-menu -->
</aside>