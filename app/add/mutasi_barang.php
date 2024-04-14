<title>Mutasi Barang</title>

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
                <h1 class="m-0">Mutasi Barang</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="index.php?page=data-barang">Barang</a></li>
                    <li class="breadcrumb-item active">Mutasi</li>
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
                        <h3 class="card-title"><i class="fas fa-edit mr-2"></i>Form Mutasi Barang</h3>
                    </div>
                    <div class="card-body">
                        <input type="hidden" class="form-control" name="id_barang" value="<?php echo $data['id_barang'] ?>" required>
                        <div class="form-group">
                            <label for="tanggal">Tanggal Input</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="tgl_input" value="<?php echo $data['tgl_input'] ?>" required/>
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="id_bidang">Bidang</label>
                            <select name="id_bidang" class="form-control select2bs4" style="width: 100%;" required>
                                <?php
                                $bidang = "SELECT * FROM tb_bidang";
                                $qbidang = mysqli_query($koneksi, $bidang);

                                if ($qbidang) {
                                    while ($row = mysqli_fetch_assoc($qbidang)) {
                                        $selected = ($row['id_bidang'] == $data['id_bidang']) ? 'selected' : '';
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
                            <label for="id_ruangan">Ruangan</label>
                            <select name="id_ruangan" class="form-control select2bs4" style="width: 100%;" required>
                                <?php
                                $ruangan = "SELECT * FROM tb_ruangan JOIN tb_bidang ON tb_ruangan.id_bidang = tb_bidang.id_bidang";
                                $qruangan = mysqli_query($koneksi, $ruangan);
                                if ($qruangan) {
                                    while ($row = mysqli_fetch_assoc($qruangan)) {
                                        $selected = ($row['id_ruangan'] == $data['id_ruangan']) ? 'selected' : ''; 
                                    ?>
                                    <option value="<?php echo $row['id_ruangan']; ?>" <?php echo $selected; ?>>
                                        <?php echo $row['nama_ruangan']; ?> - <?php echo $row['nama_bidang']; ?>
                                    </option>
                                    <?php
                                    }
                                        mysqli_free_result($qruangan);
                                } else {
                                    echo "Error: " . $ruangan . "<br>" . mysqli_error($koneksi);
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nip">Nama Bidang</label>
                            <select name="nip" class="form-control select2bs4" style="width: 100%;" required>
                                <?php
                                $pegawai = "SELECT * FROM tb_pegawai JOIN tb_bidang ON tb_pegawai.id_bidang = tb_bidang.id_bidang";
                                $qpegawai = mysqli_query($koneksi, $pegawai);
                                if ($qpegawai) {
                                    while ($row = mysqli_fetch_assoc($qpegawai)) {
                                        $selected = ($row['nip'] == $data['nip']) ? 'selected' : '';
                                    ?>
                                    <option value="<?php echo $row['nip']; ?>" <?php echo $selected; ?>>
                                        <?php echo $row['nama_pegawai']; ?> - <?php echo $row['nama_bidang']; ?>
                                    </option>
                                    <?php
                                    }
                                        mysqli_free_result($qpegawai);
                                } else {
                                    echo "Error: " . $pegawai . "<br>" . mysqli_error($koneksi);
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer clearfix">
                        <?php
                        $barangid = $_GET["id_barang"];
                        $qbarang = mysqli_query($koneksi, "SELECT * FROM tb_barang WHERE id_barang='$barangid'");
                        
                        while ($barang=mysqli_fetch_assoc($qbarang)) {
                        ?>
                        <a href="index.php?page=detail-barang&&id_barang=<?= $barang['id_barang'] ?>" class="btn btn-danger"><i class="fas fa-chevron-left mr-2"></i>Kembali</a>
                        <?php
                        }
                        ?>

                        <button type="submit" class="btn btn-primary" name="mutasi"><i class="fas fa-exchange-alt mr-2"></i>Mutasi</button>
                            <?php
                            if (isset($_POST['mutasi'])) {
                                $idbarang = $_POST["id_barang"];
                                $tglinput = $_POST["tgl_input"];
                                $idbidang = $_POST["id_bidang"];
                                $idruangan = $_POST["id_ruangan"];
                                $nip = $_POST["nip"];

                                // simpan ke tabel mutasi
                                $qsavem = mysqli_query($koneksi, "INSERT INTO tb_mutasi (id_barang, tgl_input, id_bidang, id_ruangan, nip) VALUES ('$idbarang', '$tglinput', '$idbidang','$idruangan','$nip')");


                                // Jika data masuk ke tb mutasi, update tb barang nya

                                if ($qsavem) {
                                    $qpilih = mysqli_query($koneksi, "SELECT * FROM tb_mutasi ORDER BY id_mutasi DESC LIMIT 1 ");
                                    $databrg = mysqli_fetch_assoc($qpilih);

                                    $idbarang = $databrg['id_barang'];
                                    $tglinput = $databrg['tgl_input'];
                                    $idbidang = $databrg['id_bidang'];
                                    $idruangan = $databrg['id_ruangan'];
                                    $nip = $databrg['nip'];

                                    $qupdatebrg = mysqli_query($koneksi, "UPDATE tb_barang SET id_bidang='$idbidang', tgl_input='$tglinput', id_ruangan='$idruangan', nip='$nip' WHERE id_barang='$idbarang'");
                                    if ($qupdatebrg) {
                                        echo "<script>window.location.href = 'riwayat_mutasi.php';</script>";
                                    } else {
                                        echo mysqli_error($koneksi);
                                    }
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