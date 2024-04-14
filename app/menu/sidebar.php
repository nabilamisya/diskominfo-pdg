<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <span class="icon fas fa-user-circle fa-2x text-white"></span>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['username']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php?page=dashboard" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-header">DATA</li>
          <li class="nav-item">
            <a href="index.php?page=data-barang" class="nav-link">
              <i class="fas fa-box nav-icon"></i>
              <p>Barang</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=data-kategori" class="nav-link">
              <i class="fas fa-cube nav-icon"></i>
              <p>Kategori</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=data-bidang" class="nav-link">
              <i class="fas fa-building nav-icon"></i>
              <p>Bidang</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=data-ruangan" class="nav-link">
              <i class="fas fa-desktop nav-icon"></i>
              <p>Ruangan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=data-pegawai" class="nav-link">
              <i class="fas fa-users nav-icon"></i>
              <p>Pegawai</p>
            </a>
          </li>
          <li class="nav-header">LAINNYA</li>
          <li class="nav-item">
            <a href="index.php?page=data-mutasi" class="nav-link">
              <i class="fas fa-exchange-alt nav-icon"></i>
              <p>Mutasi</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>