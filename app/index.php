<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
include ('menu/header.php');?>
<?php include ('../conf/config.php');?>

<link rel="icon" href="dist/img/padang.png" type="img/png/jpg" title="logo">
<script src="add/jquery.min.js"></script>

<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php include ('menu/navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <!-- Sidebar -->
    <?php include ('menu/sidebar.php');?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <?php
    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'dashboard') {
            include('page/dashboard.php');
        } else if ($_GET['page'] == 'data-barang') {
            include('page/data_barang.php');
        } else if ($_GET['page'] == 'data-kategori') {
            include('page/data_kategori.php');
        } else if ($_GET['page'] == 'data-bidang') {
            include('page/data_bidang.php');
        } else if ($_GET['page'] == 'data-ruangan') {
            include('page/data_ruangan.php');
        } else if ($_GET['page'] == 'data-pegawai') {
            include('page/data_pegawai.php');
        } else if ($_GET['page'] == 'detail-barang') {
          include('page/detail_barang.php');
        } else if ($_GET['page'] == 'data-mutasi') {
          include('page/data_mutasi.php');
        }
    } else if (isset($_GET['add'])) {
        if ($_GET['add'] == 'tambah-barang') {
          include('add/tambah_barang.php');
        } else if ($_GET['add'] == 'tambah-kategori') {
          include('add/tambah_kategori.php');
        } else if ($_GET['add'] == 'tambah-bidang') {
          include('add/tambah_bidang.php');
        } else if ($_GET['add'] == 'tambah-ruangan') {
          include('add/tambah_ruangan.php');
        } else if ($_GET['add'] == 'tambah-pegawai') {
          include('add/tambah_pegawai.php');
        } else if ($_GET['add'] == 'tambah-mutasi') {
          include('add/mutasi_barang.php');
        }
    } else if (isset($_GET['edit'])) {
      if ($_GET['edit'] == 'edit-barang') {
        include('edit/edit_barang.php');
      } else if ($_GET['edit'] == 'edit-kategori') {
        include('edit/edit_kategori.php');
      } else if ($_GET['edit'] == 'edit-bidang') {
        include('edit/edit_bidang.php');
      } else if ($_GET['edit'] == 'edit-ruangan') {
        include('edit/edit_ruangan.php');
      } else if ($_GET['edit'] == 'edit-pegawai') {
        include('edit/edit_pegawai.php');
      }
    } else if (isset($_GET['delete'])) {
      if ($_GET['delete'] == 'hapus-barang') {
        include('delete/hapus_barang.php');
      } else if ($_GET['delete'] == 'hapus-kategori') {
        include('delete/hapus_kategori.php');
      } else if ($_GET['delete'] == 'hapus-bidang') {
        include('delete/hapus_bidang.php');
      } else if ($_GET['delete'] == 'hapus-ruangan') {
        include('delete/hapus_ruangan.php');
      } else if ($_GET['delete'] == 'hapus-pegawai') {
        include('delete/hapus_pegawai.php');
      }
    } else {
        include('page/dashboard.php'); 
    }
    ?>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include ('menu/footer.php');?>
</body>
</html>
