<?php
    require __DIR__ . '/databases.php'; 
    $namaBarang = $_POST['namaBarang'];
    $kategori = $_POST['kategori'];
    $spek = $_POST['spek'];
    $beratUnit = $_POST['beratUnit'];
    $stok = $_POST['stok'];

    $sql = "INSERT INTO daftar_barang (nama_barang, kategori, spek, berat, stok) VALUES ('$namaBarang','$kategori','$spek','$beratUnit','$stok')";

    if(mysqli_query($conn, $sql)){
        echo "<script>window.location.href = 'index.php' </script>";
    }else{
        echo "error";
    }   

    mysqli_close($conn);
    
?>