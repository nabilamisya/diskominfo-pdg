<title>Edit Ruangan</title>

<?php include('../conf/config.php'); ?>
<?php
if (isset($_GET["nip"])) {
  $nipupdate = $_GET["nip"];

  $result = mysqli_query($koneksi, "SELECT * FROM tb_pegawai WHERE nip='$nipupdate'");
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
                <h1 class="m-0">Edit Pegawai</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="index.php?page=data-pegawai">Pegawai</a></li>
                    <li class="breadcrumb-item active">Edit Pegawai</li>
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
                  <h3 class="card-title"><i class="fas fa-edit mr-2"></i>Form Edit Pegawai</h3>
                </div>
                <div class="card-body">
                  <input type="hidden" class="form-control" name="nip" value="<?php echo $data['nip'] ?>" required>
                  <div class="form-group">
                    <label for="nama_pegawai">Nama Pegawai</label>
                    <input type="text" class="form-control" name="nama_pegawai" value="<?php echo $data['nama_pegawai'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="id_bidang">Nama Bidang</label>
                    <select name="id_bidang" class="form-control select2bs4" style="width: 100%;" required>
                        <?php
                        $bidang = "SELECT * FROM tb_bidang";
                        $qbidang = mysqli_query($koneksi, $bidang);
                        if ($qbidang) {
                            while ($row = mysqli_fetch_assoc($qbidang)) {
                                $selected = ($row['id_bidang'] == $data['id_bidang']) ? 'selected' : ''; // Menambahkan kondisi untuk menandai opsi yang sudah ada
                            ?>
                            <option value="<?php echo $row['id_bidang']; ?>" <?php echo $selected; ?>>
                                <?php echo $row['nama_bidang']; ?>
                            </option>
                            <?php
                            }
                                mysqli_free_result($qbidang);
                        } else {
                            echo "Error: " . $bidang . "<br>" . mysqli_error($koneksi);
                        }
                        ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" value="<?php echo $data['jabatan'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control select2bs4" style="width: 100%;" required>
                      <option value="Laki-Laki" <?php echo ($data['jenis_kelamin'] == 'Laki-Laki') ? 'selected' : ''; ?>>Laki-Laki</option>
                      <option value="Perempuan" <?php echo ($data['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="card-footer clearfix">
                  <a class="btn btn-danger" href="index.php?page=data-pegawai"><i class="fas fa-chevron-left mr-2"></i>Kembali</a>
                  <button type="submit" class="btn btn-primary" name="update"><i class="fas fa-save mr-2"></i>Update</button>
                    <?php
                    if (isset($_POST["update"])) {
                    $nip = $_POST["nip"];
                    $namapegawai = $_POST["nama_pegawai"];
                    $idbidang = $_POST["id_bidang"];
                    $jabatan = $_POST["jabatan"];
                    $gender = $_POST["jenis_kelamin"];

                    $update = "UPDATE tb_pegawai SET nip='$nip', nama_pegawai='$namapegawai', id_bidang='$idbidang', jabatan='$jabatan', jenis_kelamin='$gender' WHERE nip='$nip'";
                    $qupdate = mysqli_query($koneksi, $update);

                    if ($qupdate) {
                        echo "<script>window.location.href = 'index.php?page=data-pegawai';</script>";
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