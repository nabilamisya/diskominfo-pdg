<title>Data Mutasi</title>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Mutasi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Dashboard</a></li>
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
                <!-- card header -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-table mr-1"></i>
                            Table Data Mutasi
                        </h3>
                        <a href="index.php?print=cetak-barang" class="btn btn-sm btn-primary float-right"><i class="fas fa-print" style="margin-right: 10px;"></i>Cetak</a>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID Mutasi</th>
                                    <th>Tanggal Input</th>
                                    <th>Nama Barang</th>
                                    <th>Bidang</th>
                                    <th>Ruangan</th>
                                    <th>Penanggung Jawab</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $qbarang = mysqli_query($koneksi, "SELECT * FROM tb_mutasi JOIN tb_barang ON tb_mutasi.id_barang=tb_barang.id_barang
                                JOIN tb_ruangan ON tb_mutasi.id_ruangan=tb_ruangan.id_ruangan
                                JOIN tb_bidang ON tb_mutasi.id_bidang=tb_bidang.id_bidang
                                JOIN tb_pegawai ON tb_mutasi.nip=tb_pegawai.nip");

                                while ($barang=mysqli_fetch_assoc($qbarang)) {
                                ?>
                                    <tr>
                                        <td><?= $barang['id_mutasi'] ?></td>
                                        <td><?= $barang['tgl_input'] ?></td>
                                        <td><?= $barang['nama_barang'] ?></td>
                                        <td><?= $barang['nama_bidang'] ?></td>
                                        <td><?= $barang['nama_ruangan'] ?></td>
                                        <td><?= $barang['nama_pegawai'] ?></td>
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
                    <span>Barang yang dimutasikan <b>tidak</b> dapat melakukan aksi</span>
                </div>
            </div>
        </div>
    </div>
</section>