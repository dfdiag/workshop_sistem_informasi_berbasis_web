<?php
$host   = "127.0.0.1"; 
$user   = "root"; 
$pass   = ""; 
$dbname = "native";

    $koneksi = mysqli_connect($host,$user,$pass,$dbname);
    if(mysqli_connect_errno())
    {
    echo "Database Offline" .mysqli_connect_errno(); 
    }
?>
