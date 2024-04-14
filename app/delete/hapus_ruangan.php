<?php
include ('../conf/config.php');

if(isset($_GET["id_ruangan"])) {
    $ruangandelete = $_GET["id_ruangan"];

    $query = mysqli_query($koneksi, "DELETE FROM tb_ruangan WHERE id_ruangan = '$ruangandelete'");

    if ($query) {
        echo "<script>window.location.href = 'index.php?page=data-ruangan';</script>";
        exit();
    } else {
        echo "Gagal menghapus data";
    }
} else {
    echo "Id tidak diberikan";
}?>