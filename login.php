<?php
// Simpan informasi username dan password yang benar
$valid_username = "kurniawan";
$valid_password = "rahasia123";

// Ambil data yang dikirim dari form login
$input_username = $valid_username;
$input_password = $valid_password;

// Periksa apakah username dan password sesuai
if ($input_username == $valid_username && $input_password == $valid_password) {
    echo "Login Berhasil " . $valid_username;
} else {
   
}
?>
