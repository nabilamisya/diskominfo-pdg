<?php
include ('../conf/config.php');

if(isset($_GET["id_barang"])) {
    $barangdelete = $_GET["id_barang"];

    $query = mysqli_query($koneksi, "DELETE FROM tb_barang WHERE id_barang = '$barangdelete'");

    if ($query) {
        echo "<script>window.location.href = 'index.php?page=data-barang';</script>";
        exit();
    } else {
        echo "Gagal menghapus data";
    }
} else {
    echo "Id tidak diberikan";
}?>