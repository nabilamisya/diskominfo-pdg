<title>Tambah Pegawai</title>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Pegawai</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="index.php?page=data-pegawai">Pegawai</a></li>
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
        <div class="row">
            <div class="col-12">
            <form action="" method="post">
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title"><i class="fas fa-edit mr-2"></i>Form Tambah Pegawai</h3>
                </div>
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
                  <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" required>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control select2bs4" name="jenis_kelamin" required>
                      <option value="">Pilih Jenis Kelamin</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="card-footer clearfix">
                  <a class="btn btn-danger" href="index.php?page=data-ruangan"><i class="fas fa-chevron-left mr-2"></i>Kembali</a>
                  <button type="submit" class="btn btn-primary" name="simpan"><i class="fas fa-save mr-2"></i>Simpan</button>
                    <?php
                    if (isset($_POST["simpan"])) {
                    $nip = $_POST["nip"];
                    $namapegawai = $_POST["nama_pegawai"];
                    $idbidang = $_POST["id_bidang"];
                    $jabatan = $_POST["jabatan"];
                    $gender = $_POST["jenis_kelamin"];

                    $tambah = "INSERT INTO tb_pegawai (nip, nama_pegawai, id_bidang, jabatan, jenis_kelamin) VALUES ('$nip', '$namapegawai', '$idbidang', '$jabatan', '$gender')";
                    $qtambah = mysqli_query($koneksi, $tambah);

                    if ($qtambah) {
                        echo "<script>window.location.href = 'index.php?page=data-pegawai';</script>";
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