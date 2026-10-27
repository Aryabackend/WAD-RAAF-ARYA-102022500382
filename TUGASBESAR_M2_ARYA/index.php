<?php
    require_once  __DIR__ . '/databases.php';
    include __DIR__ . '/element.php';
?>
<!DOCTYPE html> 
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <header>    
            <div class="top">
                <img src="images/show.png" class="sidebar">
                <h1 class="judul">
                    Inventory Master Data
                </h1>
                <div class="search">
                    <button id="addInput">+ Tambahkan Item</button>
                </div>
            </div>
        </header>
        <main class="main">
            <div id="baseForm1">
                <form class="form1" action="simpan.php" method="post">
                    <button id="backForm" type="button">Back</button>
                    Nama Barang: <input type="text" name = "namaBarang">
                    Kategori: <?php echo kategori("kategori","kategoriForm") ?>
                    Spesifikasi Teknis: <input type="text" name = "spek">
                    Bentuk Unit: <input type="text" name = "bentukUnit">
                    Stok: <input type="text" name = "stok">
                    <button type="submit" id="submit">Submit</button>
                </form>
            </div>  

            <script>
            const buka = document.getElementById('addInput');
            const baseForm1 = document.getElementById('baseForm1');
            const tutup = document.getElementById('backForm');

            buka.addEventListener('click', () =>{
                baseForm1.classList.add('show');
            });

            tutup.addEventListener('click',() =>{
                baseForm1.classList.remove('show');
            });
            </script>
            <div class = "content">
                <div class= "center">
                    <div class = "grup1">
                        <input class="inputCari" type="text" placeholder="Cari Barang.."> 
                        <?php echo kategori("kategori","kategori") ?>
                    </div>
                    
                    <div class="barang">Menampilkan x barang</div>
                </div>
                <div class="bawah">
                    <table class = "tabel-barang">
                        <thead>
                            <tr>
                                <?php
                                    $sql = "SELECT 
                                            id as 'ID',
                                            nama_barang as 'Nama Barang',
                                            kategori as 'Kategori',
                                            spek as 'Spek',
                                            unit as 'Unit',
                                            stok as 'Stok' FROM daftar_barang
                                            ";
                                    $hasil = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_fields($hasil);
                                    foreach($row as $key){
                                        echo "<th>$key->name</th>";
                                    }
                                    if(mysqli_num_rows($hasil) >= 1){
                                        echo "<th>Action</th>";
                                    }
                                    

                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM daftar_barang";
                                $hasil = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($hasil) >= 1){
                                    while($row = mysqli_fetch_assoc($hasil)){
                                        echo "<tr>";
                                        foreach($row as $key => $value){
                                            echo "<td>$value</td>";
                                        }
                                        echo" 
                                        <td>
                                            <form action='delete.php' method='post'>
                                                <input type='hidden' name='id' value='{$row['id']}'>
                                                <button type='submit'>Delete</button>
                                            </form>
                                        </td>
                                        ";
                                        
                                        echo "</tr>";
                                    }
                                }else{
                                    echo "<tr><td colspan = 6 style = 'text-align : center'>Tidak ada Data</td></tr>";
                                }
                            ?>    
                        </tbody>
                    </table>
                </div>
            </div>
            
        </main>
        
        
    </body>
</html