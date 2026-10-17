<?php
    $conn = mysqli_connect("localhost:3000","root","","inventory_master_data");

    if(!$conn){
        echo "Gagal Terhubung ke Database";
    }
    
?>