<?php
    require __DIR__ . '/databases.php';
    $id = $_POST['id'];
    $namaBarang = $_POST['namaBarang'];
    $kategori = $_POST['kategori'];
    $spek = $_POST['spek'];
    $beratUnit = $_POST['beratUnit'];
    $stok = $_POST['stok']; 

    $sql = "UPDATE daftar_barang SET 
    nama_barang = '$namaBarang',
    kategori = '$kategori',
    spek = '$spek',
    berat = '$beratUnit',
    stok = '$stok'
    WHERE id = '$id'
    ";

    if(mysqli_query($conn, $sql)){
        echo "<script>window.location.href = 'index.php' </script>";
    }else{
        echo "error";
    }

    mysqli_close($conn);
?>