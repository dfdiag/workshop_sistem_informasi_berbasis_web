<?php
$server   = "localhost"; // Nama server database (biasanya 'localhost')
$username = "root";      // Nama pengguna database
$password = "";          // Kata sandi pengguna database
$db       = "user"; // Nama database yang ingin Anda hubungkan

// Membuat koneksi
$koneksi = mysqli_connect($server, $username, $password, $db);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Setelah selesai, jangan lupa untuk menutup koneksi
mysqli_close($koneksi);
