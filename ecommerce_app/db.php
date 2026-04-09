<?php 

$host = "127.0.0.1:3306";
$user = "root";
$pass = "";
$db = "ecommerce_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn){
    die("Gagal disambung, connection failed". mysqli_connect_error());
}

?>      