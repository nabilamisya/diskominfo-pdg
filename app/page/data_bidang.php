<title>Data Bidang</title>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Bidang</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Bidang</li>
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
                            Table Data Bidang
                        </h3>
                        <a href="index.php?add=tambah-bidang" class="btn btn-sm btn-success float-right"><i class="fas fa-plus" style="margin-right: 10px;"></i>Tambah</a>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID Bidang</th>
                                    <th>Nama Bidang</th>
                                    <th>Lokasi Bidang</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $qbidang = mysqli_query($koneksi, "SELECT * FROM tb_bidang");

                                while ($bidang=mysqli_fetch_assoc($qbidang)) {
                                ?>
                                    <tr>
                                        <td><?= $bidang['id_bidang'] ?></td>
                                        <td><?= $bidang['nama_bidang'] ?></td>
                                        <td><?= $bidang['lokasi'] ?></td>
                                        <td style="text-align: center;">
                                            <div>
                                            <a href="index.php?edit=edit-bidang&&id_bidang=<?= $bidang['id_bidang'] ?>" class="btn btn-sm btn-warning">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="index.php?delete=hapus-bidang&&id_bidang=<?= $bidang['id_bidang'] ?>" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt"></i>
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
                    <span>ID Bidang tidak dapat diubah</span>
                </div>
            </div>
        </div>
    </div>
</section>