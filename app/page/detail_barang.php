<title>Detail Barang</title>

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
                <h1 class="m-0">Detail Barang</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="index.php?page=data-barang">Barang</a></li>
                    <li class="breadcrumb-item active">Detail Barang</li>
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
                            <i class="fas fa-info-circle mr-2"></i>
                            Detail Barang
                        </h3>
                    </div>
                    <?php
                    $idbarang = $_GET['id_barang'];

                    $qdetail = mysqli_query($koneksi, "SELECT * FROM tb_barang 
                    JOIN tb_kategori ON tb_barang.id_kategori = tb_kategori.id_kategori
                    JOIN tb_bidang ON tb_barang.id_bidang = tb_bidang.id_bidang
                    JOIN tb_ruangan ON tb_ruangan.id_ruangan = tb_ruangan.id_ruangan
                    JOIN tb_pegawai ON tb_barang.nip = tb_pegawai.nip WHERE tb_barang.id_barang = '$idbarang' ");

                    $detail_barang = mysqli_fetch_assoc($qdetail);
                    ?>
                    <div class="card-body">
                        <div class="row">
                            <section class="col-6 connectedSortable">
                            <dl class="row">
                                <dt class="col-sm-4">Id Barang :</dt>
                                <dd class="col-sm-8"><?= $detail_barang['id_barang']; ?></dd>
                                <dt class="col-sm-4">Nama Barang :</dt>
                                <dd class="col-sm-8"><?= $detail_barang['nama_barang']; ?></dd>
                                <dt class="col-sm-4">Kategori Barang :</dt>
                                <dd class="col-sm-8"><?= $detail_barang['nama_kategori']; ?></dd>
                                <dt class="col-sm-4">Merek :</dt>
                                <dd class="col-sm-8"><?= $detail_barang['merek']; ?></dd>
                                <dt class="col-sm-4">No Seri :</dt>
                                <dd class="col-sm-8"><?= $detail_barang['no_seri']; ?></dd>
                                <dt class="col-sm-4">Jumlah :</dt>
                                <dd class="col-sm-8"><?= $detail_barang['jumlah']; ?></dd>
                                <dt class="col-sm-4">Ukuran :</dt>
                                <dd class="col-sm-8"><?= $detail_barang['ukuran']; ?></dd>
                            </dl>
                            </section>
                            <section class="col-6 connectedSortable">
                            <dl class="row">
                                <dt class="col-sm-4">Bahan :</dt>
                                <dd class="col-sm-8"><?= $detail_barang['bahan']; ?></dd>
                                <dt class="col-sm-4">Harga :</dt>
                                <dd class="col-sm-8"><?= $detail_barang['harga']; ?></dd>
                                <dt class="col-sm-4">Kondisi :</dt>
                                <dd class="col-sm-8"><?= $detail_barang['kondisi']; ?></dd>
                                <dt class="col-sm-4">Bidang :</dt>
                                <dd class="col-sm-8"><?= $detail_barang['nama_bidang']; ?></dd>
                                <dt class="col-sm-4">Ruangan:</dt>
                                <dd class="col-sm-8"><?= $detail_barang['nama_ruangan']; ?></dd>
                                <dt class="col-sm-4">Penanggung Jawab :</dt>
                                <dd class="col-sm-8"><?= $detail_barang['nama_pegawai']; ?></dd>
                                <dt class="col-sm-4">Tanggal Input :</dt>
                                <dd class="col-sm-8"><?= $detail_barang['tgl_input']; ?></dd>
                            </dl>
                            </section>
                        </div>
                    </div>
                    <div class="card-footer clearfix">
                        <a class="btn btn-danger" href="index.php?page=data-barang"><i class="fas fa-chevron-left mr-2"></i>Kembali</a>
                        <a href="index.php?add=tambah-mutasi&&id_barang=<?= $detail_barang['id_barang'] ?>" class="btn btn-warning"><i class="fas fa-exchange-alt mr-2"></i>Mutasi</a>
                    </div>
                </div>

                <div class="mr-2">
                    <label>Keterangan:</label>
                    <br>
                    <span>1. Mutasi dilakukan apabila ada perpindahan bidang, ruangan, dan penanggung jawab dari barang diatas</span>
                    <br>
                    <span>2. Setiap melakukan mutasi akan masuk ke dalam <b style="font-size:16px" ;><i>table mutasi</i></b></span>
                </div>
            </div>
        </div>
    </div>
</section>