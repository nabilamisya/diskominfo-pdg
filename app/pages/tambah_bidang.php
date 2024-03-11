<!DOCTYPE html>
<html lang="en">
<?php include ('header.php');?>
<?php include ('../../conf/config.php');?>

<title>Diskominfo | Tambah Bidang</title>

<style>
  .info-box-icon{
    background-color: #ff7f7f;
  }
</style>
<div class="wrapper">

  <!-- Preloader -->

  <!-- Navbar -->
  <?php include ('navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <?php include ('logo.php');?>

    <!-- Sidebar -->
    <?php include ('sidebar.php');?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><span style="font-weight: bold;">Bidang |</span><span class="fw-normal"> Tambah Bidang</span></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item"><a href="data_kategori.php">Bidang</a></li>
              <li class="breadcrumb-item active">Tambah Bidang</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- form tambah kategori-->
        <form action="" method="post">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Silahkan diisi dengan lengkap</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <div class="form-group">
            <label for="id_bidang">Id Bidang</label>
            <input type="text" class="form-control" name="id_bidang" required>
          </div>
          <div class="form-group">
            <label for="nama_bidang">Nama Bidang</label>
            <input type="text" class="form-control" name="nama_bidang" required>
          </div>
          <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" class="form-control" name="lokasi" required>
          </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer bg-white">
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
            <?php
            if (isset($_POST["simpan"])) {
                $idbidang=$_POST["id_bidang"];
                $namabidang=$_POST["nama_bidang"];
                $lokasibidang=$_POST["lokasi"];

                $tambah = "INSERT INTO tb_bidang (id_bidang, nama_bidang, lokasi) VALUES ('$idbidang', '$namabidang', '$lokasibidang')";

                $qtambah= mysqli_query($koneksi, $tambah);

                if ($qtambah) {
                    echo "<script>window.location.href = 'data_bidang.php';</script>";
                } else {
                    echo 'Tidak bisa pindah';
                }
            }
            ?>
          </div>
        </div>
        </form>
        <!-- /.card -->

        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include ('footer.php');?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</html>
