<?php
    include __DIR__ . '/databases.php';

    $sql = "DELETE FROM daftar_barang WHERE id ='{$_POST['id']}'";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    echo "<script>window.location.href = 'index.php'</script>";
?>


