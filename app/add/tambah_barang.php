<title>Tambah Barang</title>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Barang</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="index.php?page=data-kategori">Barang</a></li>
                    <li class="breadcrumb-item active">Tambah Barang</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main Content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <form action="" method="post">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-edit mr-2"></i>Form Tambah Barang</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 connectedSortable">
                                    <div class="form-group">
                                        <label>Id Barang</label>
                                        <input type="text" class="form-control" placeholder="Masukkan id barang" name="id_barang" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Barang</label>
                                        <input type="text" class="form-control" placeholder="Masukkan nama barang" name="nama_barang" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori Barang</label>
                                        <select class="form-control select2bs4" style="width: 100%;" name="id_kategori" required>
                                            <option value="" >Pilih Kategori</option>
                                            <?php
                                            $kategori = "SELECT * FROM tb_kategori";
                                            $qkategori = mysqli_query($koneksi, $kategori);

                                            if ($qkategori) {
                                                while ($row = mysqli_fetch_assoc($qkategori)) {
                                            ?>
                                                <option value="<?php echo $row['id_kategori']; ?>">
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
                                        <input type="text" class="form-control" name="merek" placeholder="Masukkan merek" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_seri">No Seri</label>
                                        <input type="text" class="form-control" name="no_seri" placeholder="Masukkan no seri" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah">Jumlah</label>
                                        <input type="text" class="form-control" name="jumlah" placeholder="Masukkan jumlah" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="ukuran">Ukuran</label>
                                        <input type="text" class="form-control" name="ukuran" placeholder="Masukkan ukuran" required>
                                    </div>
                                </div>
                                <div class="col-6 connectedSortable">
                                    <div class="form-group">
                                        <label for="bahan">Bahan</label>
                                        <input type="text" class="form-control" name="bahan" placeholder="Masukkan bahan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input type="text" class="form-control" name="harga" placeholder="Masukkan harga" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kondisi">Kondisi</label>
                                        <select class="form-control select2bs4" name="kondisi" required>
                                            <option value="">Pilih Kondisi</option>
                                            <option value="Baik">Baik</option>
                                            <option value="Kurang Baik">Kurang Baik</option>
                                            <option value="Rusak">Rusak</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="bidang">Bidang</label>
                                        <select class="form-control select2bs4" name="id_bidang" id="bidang" style="width: 100%;" required>
                                            <option value="">Pilih Bidang</option>
                                            <?php
                                            $qbidang = mysqli_query($koneksi, "SELECT * FROM tb_bidang");
                                            while ($bidang = mysqli_fetch_assoc($qbidang)) { ?>
                                                <option value="<?= $bidang['id_bidang'] ?>"><?php echo $bidang['nama_bidang'] ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="ruangan">Ruangan</label>
                                        <select class="form-control select2bs4" name="id_ruangan" id="ruangan" style="width: 100%;" required>
                                            <option value="">Pilih Ruangan</option>
                                            <?php
                                            $qruangan = mysqli_query($koneksi, "SELECT * FROM tb_ruangan JOIN tb_bidang ON tb_ruangan.id_bidang = tb_bidang.id_bidang");
                                            while ($ruangan = mysqli_fetch_assoc($qruangan)) { ?>
                                                <option value="<?= $ruangan['id_ruangan'] ?>"><?php echo $ruangan['nama_ruangan'] ?> - <?php echo $ruangan['nama_bidang'] ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nip">Penanggung Jawab</label>
                                        <select class="form-control select2bs4" name="nip" id="nip" style="width: 100%;" required>
                                            <option value="">Pilih Penanggung Jawab</option>
                                            <?php
                                            $qpegawai = mysqli_query($koneksi, "SELECT * FROM tb_pegawai JOIN tb_bidang ON tb_pegawai.id_bidang = tb_bidang.id_bidang");
                                            while ($pegawai = mysqli_fetch_assoc($qpegawai)) { ?>
                                                <option value="<?= $pegawai['nip'] ?>"><?php echo $pegawai['nama_pegawai'] ?> - <?php echo $pegawai['nama_bidang'] ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_input">Tanggal Input</label>
                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="tgl_input" placeholder="Masukkan tanggal" required/>
                                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer clearfix">
                            <a class="btn btn-danger" href="index.php?page=data-barang"><i class="fas fa-chevron-left mr-2"></i>Kembali</a>
                            <button type="submit" class="btn btn-primary" name="simpan"><i class="fas fa-save mr-2"></i>Simpan</button>
                            <?php
                            if (isset($_POST["simpan"])) {
                                // Retrieve form data
                                $idbarang = $_POST["id_barang"];
                                $namabarang = $_POST["nama_barang"];
                                $kategori = $_POST["id_kategori"];
                                $merek = $_POST["merek"];
                                $noseri = $_POST["no_seri"];
                                $jumlah = $_POST["jumlah"];
                                $ukuran = $_POST["ukuran"];
                                $bahan = $_POST["bahan"];
                                $harga = $_POST["harga"];
                                $kondisi = $_POST["kondisi"];
                                $bidang = $_POST["id_bidang"];
                                $ruangan = $_POST["id_ruangan"];
                                $pj = $_POST["nip"];
                                $tglinput = $_POST["tgl_input"];

                                // SQL query
                                $tambah = "INSERT INTO tb_barang (id_barang, nama_barang, id_kategori, merek, no_seri, jumlah, ukuran, bahan, harga, kondisi, id_bidang, id_ruangan, nip, tgl_input) VALUES ('$idbarang', '$namabarang', '$kategori', '$merek', '$noseri', '$jumlah', '$ukuran', '$bahan', '$harga', '$kondisi', '$bidang', '$ruangan', '$pj', '$tglinput')";

                                // Execute the query
                                $qtambah = mysqli_query($koneksi, $tambah);

                                if ($qtambah) {
                                    echo "<script>window.location.href = 'index.php?page=data-barang';</script>";
                                } else {
                                    echo "Error: " . $tambah . "<br>" . mysqli_error($koneksi);
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