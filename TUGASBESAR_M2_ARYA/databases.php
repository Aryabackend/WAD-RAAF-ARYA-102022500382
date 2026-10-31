<?php
    $conn = mysqli_connect("localhost","root","","inventory_master_data");

    if(!$conn){
        echo "Gagal Terhubung ke Database";
    }

    $sql = "CREATE TABLE IF NOT EXISTS daftar_barang (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_barang VARCHAR(50) NOT NULL,
    kategori VARCHAR(50) NOT NULL,
    spek VARCHAR(50),
    berat int,
    stok INT
    )";

    mysqli_query($conn, $sql);
    
?>