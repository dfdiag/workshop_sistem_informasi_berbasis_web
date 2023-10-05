<?php
require('koneksi.php');
session_start();

if (isset($_POST['submit'])) {
  $email = $_POST['text_email'];
  $pass = $_POST['text_pass'];

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
        exit();
      } else {
        $error = 'User atau password salah!!';
      }
    } else {
      $error = 'User tidak ditemukan!!';
    }
  } else {
    $error = 'Data tidak boleh kosong!!';
  }

  header('Location: login.php?');
  exit();
}
?>

<html>

<head>
  <title>Login Page</title>
</head>

<body>
  <form action="login.php" method="POST">
    <p>Email: <input type="text" name="text_email"></p>
    <p>Password: <input type="password" name="text_pass"></p>
    <button type="submit" name="submit">Sign In</button>
    <p>
      <a href="register.php">registrasi</a>
    </p>
  </form>
</body>

</html>