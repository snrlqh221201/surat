<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <center> 
      <span class="brand-text font-weight-light">Arsip_Surat</span> 
    </center> 
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/desa.jpeg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Superadmin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
                setup management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              </li>
              <li class="nav-item">
                <a href="/unitkerja" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Unit Kerja</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pengguna" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Pengguna</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/suratmasuk" class="nav-link">
              <i class= "nav-icon far fa-envelope"></i>
              <p>
                Surat Masuk
              </p>
            </a>
            <li class="nav-item">
              <a href="suratkeluar" class="nav-link">
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
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Surat Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
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