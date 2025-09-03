<?php
$host = "localhost";
$user = "DB_USER";
$pass = "DB_PASS";
$db   = "DB_NAME";
$conn = new mysqli($host, $user, $pass, $db);
if($conn->connect_error){
    die("Koneksi gagal: ".$conn->connect_error);
}
?>
