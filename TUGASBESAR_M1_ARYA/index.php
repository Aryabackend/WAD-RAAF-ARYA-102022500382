<!DOCTYPE html> 
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <div class="top">
                <div class="search">
                    <button class="searchInput">+ Tambahkan Item</button>
                </div>
            </div>
        </header>
        <main class="main">
            <div class="center">
                <input type="text">
                <select name="aa" id="aa">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
                <p class="barang">Menampilkan x barang</p>
            </div>
            <hr>
            <div>
                <table class="tabel-barang">
                    <thead>
                        <tr>
                            <th class="px-6 py-3">SKU / Item Name</th>
                            <th class="px-6 py-3">Category</th>
                            <th class="px-6 py-3">Technical Specifications</th>
                            <th class="px-6 py-3">Base Unit</th>
                            <th class="px-6 py-3">Stock Level</th>
                            <th class="px-6 py-3 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div>Industrial LED High Bay</div>
                                <div>SKU: ELEC-LED-001</div>
                            </td>
                            <td >
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