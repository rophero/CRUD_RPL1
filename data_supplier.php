<?php
    require 'functions.php';

    $supplier = query("SELECT * FROM supplier");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Daftar Data Supplier</h1>
    <table border="1"class="table table-success table-striped-columns">
        <tr>
            <td>No</td>
            <td>ID Supplier</td>
            <td>Nama Supplier</td>
            <td>Nomor Telepon</td>
            <td>Alamat</td>
            <td>Aksi</td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($supplier as $brg) { ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $brg['id_supplier'];?></td>
            <td><?= $brg['nama_supplier'];?></td>
            <td><?= $brg['no_telp'];?></td>
            <td><?= $brg['alamat'];?></td>
            <td>
                <button><a href="">Ubah</a></button>
                <button><a href="">Hapus</a></button>
            </td>
        </tr>
        <?php $i++; ?>
        <?php } ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>