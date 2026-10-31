<?php
    $nama = $_POST['namaBarang'];
    $kategori = $_POST['kategori'];

    $sql2 = "SELECT * FROM daftar_barang WHERE nama_barang = '$nama' OR kategori = '$kategori'";

?>