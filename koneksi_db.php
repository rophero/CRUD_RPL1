<?php
//Connect db pakai mysqli_connect
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if($conn -> connect_error){
    echo "gagal terhubung";
    exit();
} else {
    echo "database berhasil terhubung";
}


?>