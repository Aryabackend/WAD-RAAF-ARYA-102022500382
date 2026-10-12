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
                <form class="form1" action="simpan.php" method="POST">
                    <button id="backForm">back</button>
                    Nama Barang: <input type="text" name = "namaBarang">
                    Kategori: <input type="text" name = "kategori">
                    Spesifikasi Teknis: <input type="text" name = "spek">
                    Bentuk Unit: <input type="text" name = "bentukUnit">
                    Stok: <input type="text" name = "stok">
                    <p>
                    <input type="submit">
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
            
            <div class="center">
                <input class="inputCari" type="text" placeholder="Cari Barang.."> 
                <select name="aa" id="aa">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
                <p class="barang">Menampilkan x barang</p>
            </div>
            <hr>
            <div class="bawah">
                <table class="tabel-barang">
                    <thead>
                        <tr>
                            <th class="px-6 py-3">Nama barang</th>
                            <th class="px-6 py-3">Kategori</th>
                            <th class="px-6 py-3">Spesifikasi Teknis</th>
                            <th class="px-6 py-3">Bentuk Unit</th>
                            <th class="px-6 py-3">Stok</th>
                            <th class="px-6 py-3 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div>Industrial LED High Bay</div>
                            </td>
                            <td>
                                <span>Electronics</span>
                            </td>
                            <td>
                                <p><strong>Power:</strong> 150W | <strong>Voltage:</strong> AC220-240V</p>
                                <p>Lumens: 21,000 lm | IP65 Waterproof</p>
                            </td>
                            <td>PCS</td>
                            <td>
                                <span>140 Units</span>
                            </td>
                            <td>
                                <a>Edit</a>
                                <a>Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>Industrial LED High Bay</div>
                            </td>
                            <td>
                                <span>Electronics</span>
                            </td>
                            <td>
                                <p><strong>Power:</strong> 150W | <strong>Voltage:</strong> AC220-240V</p>
                                <p>Lumens: 21,000 lm | IP65 Waterproof</p>
                            </td>
                            <td>PCS</td>
                            <td>
                                <span>140 Units</span>
                            </td>
                            <td>
                                <a>Edit</a>
                                <a>Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
        
        
    </body>
</html>