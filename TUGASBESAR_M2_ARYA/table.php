<?php
    function table($conn,$sql1,$sql2){
            echo '
            <div class="table-responsive table-card">
            <table class = "table table-bordered">
            <thead>
            <tr>';
            $hasil = mysqli_query($conn, $sql1);
            $row = mysqli_fetch_fields($hasil);
            foreach($row as $key){
                echo "<th>$key->name</th>";
            }
            if(mysqli_num_rows($hasil) >= 1){
                echo "<th>Action</th>";
            }
            echo '
            </tr>
            </thead>
            <tbody>';
            $hasil = mysqli_query($conn, $sql2);
            if(mysqli_num_rows($hasil) >= 1){
                while($row = mysqli_fetch_assoc($hasil)){
                    echo "<tr>";
                    foreach($row as $key => $value){
                        echo "<td class='align-content-center'>$value</td>";
                    }
            echo '
            <td class="w-1">
                <div class="d-flex flex-row justify-content-center gap-3 w-100">
                    <button type="submit" class="theme-danger btn-solid" data-bs-toggle="dialog" data-bs-target="#hapusModal'. $row['id'] .'">Hapus</button>
                    <button type="submit" class="theme-warning btn-solid" data-bs-toggle="dialog" data-bs-target="#updateModal'. $row['id'] .'">Edit</button>
                </div>
            </td>';
            echo "</tr>";
            echo '
            <div>
                <dialog class="dialog" id="hapusModal'. $row['id'] .'">
                    <div class="dialog-header">
                        <h1 class="dialog-title">Konfirmasi Hapus</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="dialog" aria-label="Close"></button>
                    </div>
                    <div class="dialog-body">
                        <p class="text-center">Hapus data ?<?p>
                    </div>
                    <div class="dialog-footer">
                    <form class="form1" action="delete.php" method="post">
                        <input type="hidden" name="id" value='. $row["id"] .'>
                        <button class="theme-danger btn-solid" type="submit">Hapus</button>
                    </form>
                    </div>
                </dialog>
            </div>
            ';
            echo '
            <div>
                <dialog class="dialog" id="updateModal'. $row['id'] .'">
                    <div class="dialog-header">
                        <h1 class="dialog-title">Edit data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="dialog" aria-label="Close"></button>
                    </div>
                    <form class="form1" action="update.php" method="post">
                        <input type="hidden" name="id" value='. $row['id'] .'>
                        <div class="dialog-body d-flex flex-column gap-3">
                            <div class="mb-3">
                                <label class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" name="namaBarang" value='. $row['nama_barang'] .'>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Berat Unit (KG)</label>
                                <input type="text" class="form-control" name="beratUnit" value='. $row['berat'] .'>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Stok</label>
                                <input type="text" class="form-control" name="stok" value='. $row['stok'] .'>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <select class="form-control" id="sizesSelectDefault" name="kategori">
                                    <option value='. $row['kategori'] .' id="pilih" selected hidden>'. $row['kategori'] .'</option>
                                    <option value="Elektronik">Elektronik</option>
                                    <option value="Perkakas">Perkakas</option>
                                    <option value="Alat Tulis">Alat Tulis</option>
                                    <option value="Hardware Komputer">Hardware Komputer</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Spesifikasi Teknis</label>
                                <textarea class="form-control" name="spek">'. $row['spek'] .'</textarea>
                            </div>
                        </div>
                        <div class="container dialog-footer">
                            <button class="btn-solid theme-primary" type="submit" id="submit">Ubah</button>
                        </div>
                    </form>
                </dialog>
            </div>
            ';

            }
            }else{
                echo  "<tr><td colspan = 6 style = 'text-align : center'>Tidak ada Data</td></tr>"  ;
            }
            echo "
            </tbody>
            </table>
            </div>
            ";
            
    }
?>
