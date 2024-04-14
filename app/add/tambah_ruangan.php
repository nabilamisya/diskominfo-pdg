<title>Tambah Ruangan</title>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Ruangan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="index.php?page=data-bidang">Ruangan</a></li>
                    <li class="breadcrumb-item active">Tambah Ruangan</li>
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
                  <h3 class="card-title"><i class="fas fa-edit mr-2"></i>Form Tambah Ruangan</h3>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="id_ruangan">Id Ruangan</label>
                    <input type="text" class="form-control" name="id_ruangan" required>
                  </div>
                  <div class="form-group">
                    <label for="nama_ruangan">Nama Ruangan</label>
                    <input type="text" class="form-control" name="nama_ruangan" required>
                  </div>
                  <div class="form-group">
                  <label>Bidang</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="id_bidang" required>
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
                </div>
                <div class="card-footer clearfix">
                  <a class="btn btn-danger" href="index.php?page=data-ruangan"><i class="fas fa-chevron-left mr-2"></i>Kembali</a>
                  <button type="submit" class="btn btn-primary" name="simpan"><i class="fas fa-save mr-2"></i>Simpan</button>
                    <?php
                    if (isset($_POST["simpan"])) {
                    $idruangan = $_POST["id_ruangan"];
                    $namaruangan = $_POST["nama_ruangan"];
                    $idbidang = $_POST["id_bidang"];

                    $tambah = "INSERT INTO tb_ruangan (id_ruangan, nama_ruangan, id_bidang) VALUES ('$idruangan', '$namaruangan', '$idbidang')";
                    $qtambah = mysqli_query($koneksi, $tambah);

                    if ($qtambah) {
                        echo "<script>window.location.href = 'index.php?page=data-ruangan';</script>";
                    } else {
                        echo 'Tidak bisa menambah data ruangan.';
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