<?php
function koneksi(){
    $conn = mysqli_connect("localhost","root", "", "penjualan");
    return $conn;
}

function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah_barang($nama, $harga, $stok, $id_supplier) {
    $conn = koneksi();

    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    $query = "INSERT INTO barang (nama_barang, harga, stok, id_supplier) 
              VALUES ('$nama', '$harga', '$stok', '$id_supplier')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
        alert('Data Berhasil Ditambahkan');
        document.location.href='data_barang.php';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal Ditambahkan');
        document.location.href='data_barang.php';
        </script>";
    }

    mysqli_close($conn);
}

// Function untuk menampilkan data barang dari SQL
function tampilkan_data_barang() {
    $sql = "SELECT * FROM barang";
    return query($sql);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_barang = $_POST['nama'];
    $harga_barang = $_POST['harga'];
    $stok_barang = $_POST['stok'];
    $id_supplier = $_POST['id_supplier'];

    tambah_barang($nama_barang, $harga_barang, $stok_barang, $id_supplier);
}


function hapus_barang($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM barang WHERE id_barang = $id");

    return mysqli_affected_rows($conn);
}

function ubah_barang($data){
    $conn = koneksi();

    $id = $data['id'];
    $nama = $data['nama_barang'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $id_supplier = $data['id_supplier'];

    $sql = "UPDATE barang SET nama_barang = '$nama'a,harga = '$harga', stok = '$stok', id_supplier = '$id_supplier
    WHERE id_barang = $id";
}
?>