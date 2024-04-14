<title>Edit Bidang</title>

<?php include('../conf/config.php'); ?>
<?php
if (isset($_GET["id_bidang"])) {
  $bidangupdate = $_GET["id_bidang"];

  $result = mysqli_query($koneksi, "SELECT * FROM tb_bidang WHERE id_bidang='$bidangupdate'");
  $data = mysqli_fetch_assoc($result);

  if (!$data) {
    echo "Data tidak ditemukan";
  }
} else {
  echo "ID tidak diberikan";
}
?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Kategori</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="index.php?page=data-bidang">Bidang</a></li>
                    <li class="breadcrumb-item active">Edit Bidang</li>
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
                  <h3 class="card-title"><i class="fas fa-edit mr-2"></i>Form Edit Bidang</h3>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id_bidang" value="<?php echo $data['id_bidang'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="nama_bidang">Nama Bidang</label>
                    <input type="text" class="form-control" name="nama_bidang" value="<?php echo $data['nama_bidang'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="lokasi">Lokasi</label>
                    <input type="text" class="form-control" name="lokasi" value="<?php echo $data['lokasi'] ?>" required>
                  </div>
                </div>
                <div class="card-footer clearfix">
                  <a class="btn btn-danger" href="index.php?page=data-kategori"><i class="fas fa-chevron-left mr-2"></i>Kembali</a>
                  <button type="submit" class="btn btn-primary" name="update"><i class="fas fa-save mr-2"></i>Update</button>
                    <?php
                    if (isset($_POST["update"])) {
                    $idbidang = $_POST["id_bidang"];
                    $namabidang = $_POST["nama_bidang"];
                    $lokasi = $_POST["lokasi"];

                    $update = "UPDATE tb_bidang SET id_bidang='$idbidang', nama_bidang='$namabidang', lokasi='$lokasi' WHERE id_bidang='$idbidang'";
                    $qupdate = mysqli_query($koneksi, $update);

                    if ($qupdate) {
                        echo "<script>window.location.href = 'index.php?page=data-bidang';</script>";
                        exit(); // Menambahkan exit setelah redirect
                    } else {
                        echo "Error updating record: " . mysqli_error($koneksi);
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