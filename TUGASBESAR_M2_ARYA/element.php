<?php
    function kategori($name, $id){
        echo "
            <select name='{$name}' id='{$id}'>
            <option value='' id='pilih' selected >Pilih Kategori...</option>
            <option value='elektronik'>Elektronik</option>
            <option value='perkakas'>Perkakas</option>
            <option value='alatTulis'>Alat Tulis</option>
            <option value='hardwareKomputer'>Hardware Komputer</option>
            </select>
        ";
    }
    
?>