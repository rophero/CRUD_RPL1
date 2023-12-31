<?php
require 'function.php';
$supplier = query("SELECT * FROM supplier");

$id = isset($_GET['id']) ? $_GET['id'] : 0;
$barang = query("SELECT * FROM barang WHERE id_barang = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ubah Barang</title>
</head>
<body>
    <h1>Ubah Data Barang</h1>
    <form action="functions.php" method="post">
        <input type="hidden" name="id"
        value="<?php echo $barang['id_barang'];?>">
        <div>
            <label for="nama">Nama Barang:</label>
            <input type="text" name="nama" id="nama"
            value="<?php echo $barang["nama_barang"];?>"required>
        </div>
        <div>
            <label for="harga">Harga Barang:</label>
            <input type="number" name="harga" id="harga" 
            value="<?php echo $barang["harga"];?>"required>
        </div>
        <div>
            <label for="stok">Stok Barang:</label>
            <input type="number" name="stok" id="stok" 
            value="<?php echo $barang["stok"];?>"required>
        </div>
        <div>
            <label for="id_supplier">ID Supplier:</label>
            <select name ="id_supplier" id = "id_supplier">
            <?php foreach($supplier as $s) :?>
            <option value="<?= $s['id_supplier']; ?>">
                <?= $s['nama_supplier']; ?>

            </option>
                <?php endforeach;?>
            </select>
        </div>
        <div>
            <button type="submit" name='ubah'>Ubah Data</button>
        </div>
    </form>
</body>
</html>