<title>Data Barang</title>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Barang</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Barang</li>
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
                <!-- card header -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-table mr-1"></i>
                            Table Data Barang
                        </h3>
                        <a href="index.php?add=tambah-barang" class="btn btn-sm btn-success float-right"><i class="fas fa-plus" style="margin-right: 10px;"></i>Tambah</a>
                        <a href="cetak_barang.php" class="btn btn-sm btn-primary float-right mr-1"><i class="fas fa-print" style="margin-right: 10px;"></i>Cetak</a>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID Barang</th>
                                    <th>Tanggal Input</th>
                                    <th>Nama Barang</th>
                                    <th>Kategori Barang</th>
                                    <th>Penanggung Jawab</th>
                                    <th>Ruangan</th>
                                    <th>Bidang</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $qbarang = mysqli_query($koneksi, "SELECT * FROM tb_barang JOIN tb_ruangan ON tb_barang.id_ruangan=tb_ruangan.id_ruangan
                                JOIN tb_bidang ON tb_barang.id_bidang=tb_bidang.id_bidang
                                JOIN tb_kategori ON tb_barang.id_kategori=tb_kategori.id_kategori
                                JOIN tb_pegawai ON tb_barang.nip=tb_pegawai.nip");

                                while ($barang=mysqli_fetch_assoc($qbarang)) {
                                ?>
                                    <tr>
                                        <td><?= $barang['id_barang'] ?></td>
                                        <td><?= $barang['tgl_input'] ?></td>
                                        <td><?= $barang['nama_barang'] ?></td>
                                        <td><?= $barang['nama_kategori'] ?></td>
                                        <td><?= $barang['nama_pegawai'] ?></td>
                                        <td><?= $barang['nama_ruangan'] ?></td>
                                        <td><?= $barang['nama_bidang'] ?></td>
                                        <td style="text-align: center;">
                                            <div>
                                            <a href="index.php?edit=edit-barang&&id_barang=<?= $barang['id_barang'] ?>" class="btn btn-sm btn-warning">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="index.php?delete=hapus-barang&&id_barang=<?= $barang['id_barang'] ?>" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                            <a href="index.php?page=detail-barang&&id_barang=<?= $barang['id_barang'] ?>" class="btn btn-sm btn-primary">
                                                <i class="fas fa-info-circle"></i>
                                            </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mr-2">
                    <label>Note :</label>
                    <span>ID Barang tidak dapat diubah</span>
                </div>
            </div>
        </div>
    </div>
</section>