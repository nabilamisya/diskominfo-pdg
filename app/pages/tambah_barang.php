<!DOCTYPE html>
<html lang="en">
<?php include ('header.php');?>
<?php include ('../../conf/config.php');?>

<title>Diskominfo | Dashboard</title>

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
            <h1 class="m-0"><span style="font-weight: bold;">Barang |</span><span class="fw-normal"> Tambah Barang</span></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item"><a href="data_barang.php">Barang</a></li>
              <li class="breadcrumb-item active">Tambah Barang</li>
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
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="id_barang">Id Barang</label>
                  <input type="text" class="form-control" name="id_barang" required>
                </div>
                <div class="form-group">
                  <label for="nama_barang">Nama Barang</label>
                  <input type="text" class="form-control" name="nama_barang" required>
                </div>
                <div class="form-group">
                  <label for="kategori">Kategori</label>
                  <select class="form-control" name="kategori" required>
                    <option value="">Pilih Kategori</option>
                      <?php
                      $kategori = "SELECT * FROM tb_kategori";
                      $qkategori = mysqli_query($koneksi, $kategori);

                        if ($qkategori) {
                        while ($row = mysqli_fetch_assoc($qkategori)) {
                        ?>
                        <option value="<?php echo $row['id_kategori']; ?>">
                            <?php echo $row['nama_kategori']; ?>
                        </option>
                        <?php
                        }
                            mysqli_free_result($qkategori);
                        } else {
                            echo "Error: " . $kategori . "<br>" . mysqli_error($koneksi);
                        }
                        mysqli_close($koneksi);
                        ?>
                  </select>
                </div>
                <div class="form-group">
                    <label for="merek">Merek</label>
                    <input type="text" class="form-control" name="merek" required>
                </div>
                <div class="form-group">
                    <label for="noseri">No Seri</label>
                    <input type="text" class="form-control" name="no_seri" required>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" class="form-control" name="jumlah" required>
                </div>
                <div class="form-group">
                    <label for="ukuran">Ukuran</label>
                    <input type="text" class="form-control" name="ukuran" required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="bahan">Bahan</label>
                  <input type="text" class="form-control" name="bahan" required>
                </div>
                <div class="form-group">
                  <label for="harga">Harga</label>
                  <input type="text" class="form-control" name="harga" required>
                </div>
                <div class="form-group">
                  <label for="kondisi">Kondisi</label>
                    <select class="form-control" name="kondisi" required>
                      <option value="">Pilih Kondisi</option>
                      <option value="baik">Baik</option>
                      <option value="kurang baik">Kurang Baik</option>
                      <option value="rusak">Rusak</option>
                    </select>
                </div>
              </div>
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
