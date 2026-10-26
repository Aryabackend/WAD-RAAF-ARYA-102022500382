<?php
    function kategori($name, $id){
        return "
            <select name='{$name}' id='{$id}'>
            <option value='' id='pilih' selected >Pilih Kategori...</option>
            <option value='Elektronik'>Elektronik</option>
            <option value='Perkakas'>Perkakas</option>
            <option value='Alat Tulis'>Alat Tulis</option>
            <option value='Hardware Komputer'>Hardware Komputer</option>
            </select>
        ";
    }
    
?>