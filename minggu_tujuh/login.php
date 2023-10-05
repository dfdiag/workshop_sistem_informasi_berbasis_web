<?php
include('koneksi.php');

session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['txt_email'];
    $pass = $_POST['txt_pass'];

    if (!empty(trim($email)) && !empty(trim($pass))) {
        $query = "SELECT * FROM user_detail WHERE user_email = '$email'";
        $result = mysqli_query($koneksi, $query);
        $num = mysqli_num_rows($result);

        if ($num != 0) {
            $row = mysqli_fetch_array($result);
            $id = $row['id'];
            $userVal = $row['user_email'];
            $passVal = $row['user_password'];
            $userName = $row['user_fullname'];
            $level = $row['level'];

            if ($userVal == $email && $passVal == $pass) {
                header('Location: home.php');
                exit(); // Hentikan eksekusi setelah mengarahkan ke halaman home.php
            } else {
                $error = 'Username atau password salah!!';
                header('Location: login.php?error=');
                exit();
            }
        } else {
            $error = 'Data tidak ditemukan !!';
            header('Location: login.php?error=' );
            exit();
        }
    } else {
        $error = 'Email dan password tidak boleh kosong !!';
        header('Location: login.php?error=' );
        exit();
    }
}
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login page</title>
</head>
<body>
<form action="login.php" method="POST">
<p>email	: <input type="text" name="txt_email"></p>
<p>password	: <input type="password" name="txt_pass"></p>
<button type="submit" name="submit">Sign In</button>

</form>	
</body>
</html>