<?php
include ('../conf/config.php');

if(isset($_GET["id_bidang"])) {
    $bidangdelete = $_GET["id_bidang"];

    $query = mysqli_query($koneksi, "DELETE FROM tb_bidang WHERE id_bidang = '$bidangdelete'");

    if ($query) {
        echo "<script>window.location.href = 'index.php?page=data-bidang';</script>";
        exit();
    } else {
        echo "Gagal menghapus data";
    }
} else {
    echo "Id tidak diberikan";
}?>