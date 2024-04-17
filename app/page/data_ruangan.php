<title>Data Ruangan</title>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Ruangan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Ruangan</li>
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
                            Table Data Ruangan
                        </h3>
                        <a href="index.php?add=tambah-ruangan" class="btn btn-sm btn-success float-right"><i class="fas fa-plus" style="margin-right: 10px;"></i>Tambah</a>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID Ruangan</th>
                                    <th>Nama Ruangan</th>
                                    <th>Bidang</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $qruangan = mysqli_query($koneksi, "SELECT * FROM tb_ruangan JOIN tb_bidang ON tb_ruangan.id_bidang=tb_bidang.id_bidang");

                                while ($ruangan=mysqli_fetch_assoc($qruangan)) {
                                ?>
                                    <tr>
                                        <td><?= $ruangan['id_ruangan'] ?></td>
                                        <td><?= $ruangan['nama_ruangan'] ?></td>
                                        <td><?= $ruangan['nama_bidang'] ?></td>
                                        <td style="text-align: center;">
                                            <div>
                                            <a href="index.php?edit=edit-ruangan&&id_ruangan=<?= $ruangan['id_ruangan'] ?>" class="btn btn-sm btn-warning">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="index.php?delete=hapus-ruangan&&id_ruangan=<?= $ruangan['id_ruangan'] ?>" class="btn btn-sm btn-danger">
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
                    <span>ID Ruangan tidak dapat diubah</span>
                </div>
            </div>
        </div>
    </div>
</section>