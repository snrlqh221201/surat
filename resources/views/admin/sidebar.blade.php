<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
    <center>
      <span class="brand-text font-weight-light">Arsip Surat</span> 
    </center>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline mt-2">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
                Setup Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              </li>
              <li class="nav-item">
                <a href="{{ route('unitkerja.index') }}" class="nav-link {{ request()->is('unitkerja') ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Unit Kerja</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('pengguna.index') }}" class="nav-link {{ request()->is('pengguna') ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Pengguna</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('suratmasuk.index') }}" class="nav-link {{ request()->is('suratmasuk') ? 'active' : '' }}">
              <i class= "nav-icon far fa-envelope"></i>
              <p>
                Surat Masuk
              </p>
            </a>
            <li class="nav-item">
              <a href="{{ route('suratkeluar.index') }}" class="nav-link {{ request()->is('suratkeluar') ? 'active' : '' }}">
                <i class= "nav-icon far fa-envelope"></i>
                <p>
                  Surat Keluar
                </p>
              </a>
            </li>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fal fa-print nav-icon"></i>
              <p>
                Report
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('reportsuratmasuk.index') }}" class="nav-link {{ request()->is('reportsuratmasuk') ? 'active' : '' }}">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Surat Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('reportsuratkeluar.index') }}" class="nav-link {{ request()->is('reportsuratkeluar') ? 'active' : '' }}">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Surat Keluar</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>