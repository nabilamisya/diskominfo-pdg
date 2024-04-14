<title>Data Kategori</title>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Kategori</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Kategori</li>
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
                            Table Data Kategori
                        </h3>
                        <a href="index.php?add=tambah-kategori" class="btn btn-sm btn-success float-right"><i class="fas fa-plus" style="margin-right: 10px;"></i>Tambah</a>
                        <a href="cetak_kategori.php" class="btn btn-sm btn-primary float-right mr-1"><i class="fas fa-print" style="margin-right: 10px;"></i>Cetak</a>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID Kategori</th>
                                    <th>Nama Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $qkategori = mysqli_query($koneksi, "SELECT * FROM tb_kategori");

                                while ($kategori=mysqli_fetch_assoc($qkategori)) {
                                ?>
                                    <tr>
                                        <td><?= $kategori['id_kategori'] ?></td>
                                        <td><?= $kategori['nama_kategori'] ?></td>
                                        <td style="text-align: center;">
                                            <div>
                                            <a href="index.php?edit=edit-kategori&&id_kategori=<?= $kategori['id_kategori'] ?>" class="btn btn-sm btn-warning">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="index.php?delete=hapus-kategori&&id_kategori=<?= $kategori['id_kategori'] ?>" class="btn btn-sm btn-danger">
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
                    <span>ID Kategori tidak dapat diubah</span>
                </div>
            </div>
        </div>
    </div>
</section>