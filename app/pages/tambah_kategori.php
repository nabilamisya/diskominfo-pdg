<!DOCTYPE html>
<html lang="en">
<?php include ('header.php');?>
<?php include ('../../conf/config.php');?>

<title>Diskominfo | Tambah Ketegori</title>

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
            <h1 class="m-0"><span style="font-weight: bold;">Kategori Barang |</span><span class="fw-normal"> Tambah Kategori</span></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item"><a href="data_kategori.php">Kategori</a></li>
              <li class="breadcrumb-item active">Tambah Kategori</li>
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
            <label for="id_kategori">Id Kategori</label>
            <input type="text" class="form-control" name="id_kategori" required>
          </div>
          <div class="form-group">
            <label for="nama_kategori">Nama Kategori</label>
            <input type="text" class="form-control" name="nama_kategori" required>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer bg-white">
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
            <?php
            if (isset($_POST["simpan"])) {
                $idkategori=$_POST["id_kategori"];
                $namakategori=$_POST["nama_kategori"];

                $tambah = "INSERT INTO tb_kategori (id_kategori, nama_kategori) VALUES ('$idkategori', '$namakategori')";

                $qtambah= mysqli_query($koneksi, $tambah);

                if ($qtambah) {
                    echo "<script>window.location.href = 'data_kategori.php';</script>";
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
