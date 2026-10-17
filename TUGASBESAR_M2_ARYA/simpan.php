<?php
    include 'databases.php';
    $namaBarang = $_POST['namaBarang'];
    $kategori = $_POST['kategori'];
    $spek = $_POST['spek'];
    $bentukUnit = $_POST['bentukUnit'];
    $stok = $_POST['stok'];

    $sql = "INSERT INTO daftar_barang (nama_barang, kategori, spek, unit, stok) VALUES ('$namaBarang','$kategori','$spek','$bentukUnit','$stok')";

    if(mysqli_query($conn, $sql)){
        echo "<script>window.location.href = 'index.php' </script>";
    }else{
        echo "error";
    }

    mysqli_close($conn);
    
?>