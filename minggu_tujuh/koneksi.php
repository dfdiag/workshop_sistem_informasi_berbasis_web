<?php
$host   = "127.0.0.1"; 
$user   = "root"; 
$pass   = ""; 
$dbname = "user";

    $koneksi = mysqli_connect($host,$user,$pass,$dbname);
    echo "Online";
    if(mysqli_connect_errno())
    {
    echo "Offline" .mysqli_connect_errno(); 
    }
?>
