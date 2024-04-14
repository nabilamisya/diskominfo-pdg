<title>Tambah Kategori</title>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Kategori</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="index.php?page=data-kategori">Kategori</a></li>
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
        <div class="row">
            <div class="col-12">
            <form action="" method="post">
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title"><i class="fas fa-edit mr-2"></i>Form Tambah Kategori</h3>
                </div>
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
                <div class="card-footer clearfix">
                  <a class="btn btn-danger" href="index.php?page=data-kategori"><i class="fas fa-chevron-left mr-2"></i>Kembali</a>
                  <button type="submit" class="btn btn-primary" name="simpan"><i class="fas fa-save mr-2"></i>Simpan</button>
                  <?php
                  if (isset($_POST["simpan"])) {
                    $idkategori = $_POST["id_kategori"];
                    $namakategori = $_POST["nama_kategori"];

                    $tambah = "INSERT INTO tb_kategori (id_kategori, nama_kategori) VALUES ('$idkategori', '$namakategori')";
                    $qtambah = mysqli_query($koneksi, $tambah);

                    if ($tambah) {
                      echo "<script>window.location.href= 'index.php?page=data-kategori';</script>";
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