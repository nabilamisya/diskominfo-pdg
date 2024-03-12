<!DOCTYPE html>
<html lang="en">
<?php include ('header.php');?>
<?php include ('../../conf/config.php');?>

<title>Diskominfo | Tambah Pegawai</title>

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
            <h1 class="m-0"><span style="font-weight: bold;">Pegawai |</span><span class="fw-normal"> Tambah Pegawai</span></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item"><a href="data_pegawai.php">Pegawai</a></li>
              <li class="breadcrumb-item active">Tambah Pegawai</li>
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
            <label for="nip">NIP</label>
            <input type="text" class="form-control" name="nip" required>
          </div>
          <div class="form-group">
            <label for="nama_pegawai">Nama Pegawai</label>
            <input type="text" class="form-control" name="nama_pegawai" required>
          </div>
          <div class="form-group">
            <label for="id_bidang">Bidang</label>
            <select class="form-control" name="id_bidang" required>
                <option value="">Pilih Bidang</option>
                <?php
                  $query = "SELECT * FROM tb_bidang";
                  $result = mysqli_query($koneksi, $query);
                        
                    if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                      <option value="<?php echo $row['id_bidang']; ?>"><?php echo $row['nama_bidang']; ?></option>
                    <?php
                    }
                      mysqli_free_result($result);
                    } else {
                      echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
                    }
                    ?>
            </select>
          </div>
          <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" required>
          </div>
          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" name="jenis_kelamin" required>
              <option value="">Pilih Jenis Kelamin</option>
              <option value="laki-laki">Laki-Laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer bg-white">
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
            <?php
            if (isset($_POST["simpan"])) {
                $nip = $_POST['nip'];
                $namapegawai = $_POST['nama_pegawai'];
                $idbidang = $_POST['id_bidang'];
                $jabatan = $_POST['jabatan'];
                $jeniskelamin = $_POST['jenis_kelamin'];

                $tambah = "INSERT INTO tb_pegawai (nip, nama_pegawai, id_bidang, jabatan, jenis_kelamin) VALUES ('$nip', '$namapegawai', '$idbidang', '$jabatan', '$jeniskelamin')";
                $qtambah = mysqli_query($koneksi, $tambah);

                if ($qtambah) {
                    echo "<script>window.location.href = 'data_pegawai.php';</script>";
                } else {
                    echo 'Tidak bisa menambah data pegawai.';
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
