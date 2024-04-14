<?php
include ('../conf/config.php');

if(isset($_GET["id_kategori"])) {
    $kategoridelete = $_GET["id_kategori"];

    $query = mysqli_query($koneksi, "DELETE FROM tb_kategori WHERE id_kategori = '$kategoridelete'");

    if ($query) {
        echo "<script>window.location.href = 'index.php?page=data-kategori';</script>";
        exit();
    } else {
        echo "Gagal menghapus data";
    }
} else {
    echo "Id tidak diberikan";
}?>