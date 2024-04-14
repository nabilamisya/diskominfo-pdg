<title>Edit Barang</title>

<?php
if (isset($_GET["id_barang"])) {
  $barangupdate = $_GET["id_barang"];

  $result = mysqli_query($koneksi, "SELECT * FROM tb_barang WHERE id_barang='$barangupdate'");
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
                <h1 class="m-0">Edit barang</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="index.php?page=data-barang">Barang</a></li>
                    <li class="breadcrumb-item active">Edit Barang</li>
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
                  <h3 class="card-title"><i class="fas fa-edit mr-2"></i>Form Edit barang</h3>
                </div>
                <div class="card-body">
                    <input type="hidden" class="form-control" name="id_barang" value="<?php echo $data['id_barang'] ?>" required>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" value="<?php echo $data['nama_barang'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="id_kategori">Kategori</label>
                        <select name="id_kategori" class="form-control select2bs4" style="width: 100%;" required>
                            <?php
                            $kategori = "SELECT * FROM tb_kategori";
                            $qkategori = mysqli_query($koneksi, $kategori);

                            if ($qkategori) {
                                while ($row = mysqli_fetch_assoc($qkategori)) {
                                    $selected = ($row['id_kategori'] == $data['id_kategori']) ? 'selected' : '';
                                ?>
                                <option value="<?php echo $row['id_kategori']; ?>" <?php echo $selected; ?>>
                                    <?php echo $row['nama_kategori']; ?>
                                </option>
                                <?php
                                }
                                    mysqli_free_result($qkategori);
                            } else {
                                echo "Error: " . $kategori . "<br>" . mysqli_error($koneksi);                                
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="merek">Merek</label>
                        <input type="text" class="form-control" name="merek" value="<?php echo $data['merek'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="no_seri">No Seri</label>
                        <input type="text" class="form-control" name="no_seri" value="<?php echo $data['no_seri'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" class="form-control" name="jumlah" value="<?php echo $data['jumlah'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="ukuran">Ukuran</label>
                        <input type="text" class="form-control" name="ukuran" value="<?php echo $data['ukuran'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="bahan">Bahan</label>
                        <input type="text" class="form-control" name="bahan" value="<?php echo $data['bahan'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" name="harga" value="<?php echo $data['harga'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="kondisi">Kondisi</label>
                        <select class="form-control select2bs4" name="kondisi" required>
                            <option value="Baik" <?php echo ($data['kondisi'] == 'Baik') ? 'selected' : ''; ?>>Baik</option>
                            <option value="Kurang Baik" <?php echo ($data['kondisi'] == 'Kurang Baik') ? 'selected' : ''; ?>>Kurang Baik</option>
                            <option value="Rusak" <?php echo ($data['kondisi'] == 'Rusak') ? 'selected' : ''; ?>>Rusak</option>                            
                        </select>
                    </div>
                </div>
                <div class="card-footer clearfix">
                  <a class="btn btn-danger" href="index.php?page=data-barang"><i class="fas fa-chevron-left mr-2"></i>Kembali</a>
                  <button type="submit" class="btn btn-primary" name="update"><i class="fas fa-save mr-2"></i>Update</button>
                    <?php
                    if (isset($_POST["update"])) {
                    $idbarang = $_POST["id_barang"];
                    $namabarang = $_POST["nama_barang"];
                    $idkategori = $_POST["id_kategori"];
                    $merek = $_POST["merek"];
                    $noseri = $_POST["no_seri"];
                    $jumlah = $_POST["jumlah"];
                    $ukuran = $_POST["ukuran"];
                    $bahan = $_POST["bahan"];
                    $harga = $_POST["harga"];
                    $kondisi = $_POST["kondisi"];

                    $update = "UPDATE tb_barang SET nama_barang='$namabarang', id_kategori='$idkategori', merek='$merek', 
                    no_seri='$noseri', jumlah='$jumlah', ukuran='$ukuran', bahan='$bahan', harga='$harga', kondisi='$kondisi' WHERE id_barang='$idbarang'";
                    
                    $qupdate = mysqli_query($koneksi, $update);

                    if ($qupdate) {
                        echo "<script>window.location.href = 'index.php?page=data-barang';</script>";
                        exit();
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