<title>Tambah Bidang</title>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Bidang</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="index.php?page=data-bidang">Kategori</a></li>
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
        <div class="row">
            <div class="col-12">
            <form action="" method="post">
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title"><i class="fas fa-edit mr-2"></i>Form Tambah Bidang</h3>
                </div>
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
                    <label for="lokasi">Lokasi Bidang</label>
                    <input type="text" class="form-control" name="lokasi" required>
                  </div>
                </div>
                <div class="card-footer clearfix">
                  <a class="btn btn-danger" href="index.php?page=data-bidang"><i class="fas fa-chevron-left mr-2"></i>Kembali</a>
                  <button type="submit" class="btn btn-primary" name="simpan"><i class="fas fa-save mr-2"></i>Simpan</button>
                  <?php
                  if (isset($_POST["simpan"])) {
                    $idbidang = $_POST["id_bidang"];
                    $namabidang = $_POST["nama_bidang"];
                    $lokasibidang = $_POST["lokasi"];

                    $tambah = "INSERT INTO tb_bidang (id_bidang, nama_bidang, lokasi) VALUES ('$idbidang', '$namabidang', '$lokasibidang')";
                    $qtambah = mysqli_query($koneksi, $tambah);

                    if ($tambah) {
                      echo "<script>window.location.href= 'index.php?page=data-bidang';</script>";
                    } else {
                      echo 'Tidak bisa pindah';
                    }
                  }
                  ?>
                </div>
              </div>
            </form>
            </div>
        </div>
    </div>
</section>