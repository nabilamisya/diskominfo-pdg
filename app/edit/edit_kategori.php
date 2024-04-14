<title>Edit Kategori</title>

<?php include('../conf/config.php'); ?>
<?php
if (isset($_GET["id_kategori"])) {
  $kategoriupdate = $_GET["id_kategori"];

  $result = mysqli_query($koneksi, "SELECT * FROM tb_kategori WHERE id_kategori='$kategoriupdate'");
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
                    <li class="breadcrumb-item"><a href="index.php?page=data-kategori">Kategori</a></li>
                    <li class="breadcrumb-item active">Edit Kategori</li>
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
                  <h3 class="card-title"><i class="fas fa-edit mr-2"></i>Form Edit Kategori</h3>
                </div>
                <div class="card-body">
                  <input type="hidden" class="form-control" name="id_kategori" value="<?php echo $data['id_kategori'] ?>" required>
                  <div class="form-group">
                    <label for="nama_kategori">Nama Kategori</label>
                    <input type="text" class="form-control" name="nama_kategori" value="<?php echo $data['nama_kategori'] ?>" required>
                  </div>
                </div>
                <div class="card-footer clearfix">
                  <a class="btn btn-danger" href="index.php?page=data-kategori"><i class="fas fa-chevron-left mr-2"></i>Kembali</a>
                  <button type="submit" class="btn btn-primary" name="update"><i class="fas fa-save mr-2"></i>Update</button>
                    <?php
                    if (isset($_POST["update"])) {
                    $idkategori = $_POST["id_kategori"];
                    $namakategori = $_POST["nama_kategori"];

                    $update = "UPDATE tb_kategori SET nama_kategori='$namakategori' WHERE id_kategori='$idkategori'";
                    $qupdate = mysqli_query($koneksi, $update);

                    if ($qupdate) {
                        echo "<script>window.location.href = 'index.php?page=data-kategori';</script>";
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