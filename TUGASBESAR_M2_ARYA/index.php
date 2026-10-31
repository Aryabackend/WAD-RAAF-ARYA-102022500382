<?php
    require_once  __DIR__ . '/databases.php';
    require_once __DIR__ . '/table.php';
?>
<!DOCTYPE html> 
<html lang="en" data-bs-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Warehouse</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">
    </head>
    <body class="d-flex flex-column gap-12">
        <header>
            <nav class="navbar border border-bottom-2 border-top-0 border-start-0 border-end-0 fg-2">
                <div class="container-fluid d-flex gap-3 justify-content-start">
                    <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon" aria-hidden="true"></span>
                    </button>
                    <a class="navbar-brand" href="#">Inventory Master Data</a>
                    <dialog class="drawer drawer-start" tabindex="-1" id="navbarTogglerDemo03" aria-labelledby="navbarTogglerDemo03Label">
                        <div class="drawer-header">
                            <h5 class="drawer-title" id="navbarTogglerDemo03Label">Menu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
                        </div>
                        <div class="drawer-body">
                            <ul class="navbar-nav me-auto mb-2">
                                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                                <button class="btn-outline theme-success" type="submit">Search</button>
                            </form>
                        </div>
                    </dialog>
                </div>
            </nav>
        </header>
        <main class="container">
            <div class="card">
                <div class="card-header bg-primary text-white d-flex flex-row justify-content-between align-items-center">
                    <div class="card-text" >Data Inventory</div>
                    <button type="button" class="btn-solid theme-primary token-demo" data-bs-toggle="dialog" data-bs-target="#staticBackdropDialog" data-bs-backdrop="static">+ Tambahkan Item</button >
                </div>
                <div>
                    <dialog class="dialog" id="staticBackdropDialog">
                        <div class="dialog-header">
                            <h1 class="dialog-title">Static backdrop</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="dialog" aria-label="Close"></button>
                        </div>
                        <form class="form1" action="simpan.php" method="post">
                            <div class="dialog-body d-flex flex-column gap-3">
                                <div class="mb-3">
                                    <label class="form-label">Nama Barang</label>
                                    <input type="text" class="form-control" name="namaBarang">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Berat Unit (KG)</label>
                                    <input type="text" class="form-control" name="beratUnit">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Stok</label>
                                    <input type="text" class="form-control" name="stok">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kategori</label>
                                    <select class="form-control" id="sizesSelectDefault" name="kategori">
                                        <option value="" id="pilih" selected >Pilih Kategori...</option>
                                        <option value="Elektronik">Elektronik</option>
                                        <option value="Perkakas">Perkakas</option>
                                        <option value="Alat Tulis">Alat Tulis</option>
                                        <option value="Hardware Komputer">Hardware Komputer</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Spesifikasi Teknis</label>
                                    <textarea class="form-control" name="spek"></textarea>
                                </div>
                            </div>
                            <div class="container dialog-footer">
                                <button class="btn-solid theme-primary" type="submit" id="submit">Submit</button>
                            </div>
                        </form>
                    </dialog>
                </div>
                <div class="card-body d-flex flex-row justify-content-between align-items-center  ">
                    <form action="index.php" method="post">
                        <div class="d-flex align-items-center gap-4">
                            <div>
                                <input type="text" id="disabledTextInput" class="form-control" name="namaBarang" placeholder="Cari Barang...">
                            </div>
                            <div>
                                <select class="form-control" id="sizesSelectDefault" name="kategori">
                                    <option value='' id='pilih' selected >Pilih Kategori...</option>
                                    <option value='Elektronik'>Elektronik</option>
                                    <option value='Perkakas'>Perkakas</option>
                                    <option value='Alat Tulis'>Alat Tulis</option>
                                    <option value='Hardware Komputer'>Hardware Komputer</option>
                                </select>   
                            </div>
                            <button type="submit" class="btn-solid theme-primary">Cari</button>
                        </div>  
                    </form>
                    <p class="card-text">Menampilkan <?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * FROM daftar_barang")) ?> Baris data</p>
                </div>
                <div class="p-4">
                    <?php
                        $nama = $_POST['namaBarang'] ?? '';
                        $kategori = $_POST['kategori'] ?? '';
                        $sql1 = 
                        "SELECT 
                        id as 'ID',
                        nama_barang as 'Nama Barang',
                        kategori as 'Kategori',
                        spek as 'Spek',
                        berat as 'Berat Unit (KG)',
                        stok as 'Stok' 
                        FROM daftar_barang
                        ";
                        if(empty($nama) && empty($kategori)){
                            $sql2 = "SELECT * FROM daftar_barang";
                        }elseif(!empty($nama) && !empty($kategori)){
                            $sql2 = "SELECT * FROM daftar_barang WHERE nama_barang = '$nama' AND kategori = '$kategori'";
                        }elseif(!empty($nama)){
                                $sql2 = "SELECT * FROM daftar_barang WHERE nama_barang = '$nama'";
                        }else{
                            $sql2 = "SELECT * FROM daftar_barang WHERE kategori = '$kategori'";
                        }
                        table($conn,$sql1,$sql2);
                    ?>
                </div>
            </div>
        </main>
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
    </body>
</html