<?php
include ('../conf/config.php');

if(isset($_GET["nip"])) {
    $nipdelete = $_GET["nip"];

    $query = mysqli_query($koneksi, "DELETE FROM tb_pegawai WHERE nip = '$nipdelete'");

    if ($query) {
        echo "<script>window.location.href = 'index.php?page=data-pegawai';</script>";
        exit();
    } else {
        echo "Gagal menghapus data";
    }
} else {
    echo "Id tidak diberikan";
}?>