<?php
require('koneksi.php');
session_start();

$error = ''; // Initialize the error variable

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
        header('Location: home.php?user_fullname=' . $userName);
        exit();
      } else {
        $error = 'User atau password salah!!';
      }
    } else {
      $error = 'User tidak ditemukan!!';
    }
  } else {
    $error = 'Email dan password tidak boleh kosong!!';
  }
}
?>

<html>

<head>
  <title>Login Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/custom.css">
</head>

<body class="bg-light">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-info text-center">
            <h1>Login</h1>
          </div>
          <div class="card-body">

            <!-- START Display error alert -->

            <?php if (!empty($error)) : ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert" id="error-alert">
                <?php echo $error; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif; ?>

            <!-- END Display error alert -->
            <form action="login.php" method="POST">
              <div class="form-group">
                <label for="text_email">Email</label>
                <input type="email" class="form-control" name="text_email" required>
              </div>
              <div class="form-group">
                <label for="text_pass">Password</label>
                <input type="password" class="form-control" name="text_pass" required>
              </div>
              <div class="d-grid gap-2 mt-4">
                <button class="btn btn-info" type="submit" name="submit">Sign in</button>
              </div>
              <div class="mt-4 text-center">
                Let's Go <a href="register.php">Sign up</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer mt-5 text-center">
    Copyright &copy; 2023 &mdash; Dimas Fajar Kurniawan
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script>

  </script>
</body>

</html>