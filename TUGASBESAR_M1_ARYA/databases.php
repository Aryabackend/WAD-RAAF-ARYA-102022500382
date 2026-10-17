<?php
    $conn = mysqli_connect("localhost","root","","inventory_master_data");

    if(!$conn){
        echo "Gagal Terhubung ke Database";
    }
    
?>