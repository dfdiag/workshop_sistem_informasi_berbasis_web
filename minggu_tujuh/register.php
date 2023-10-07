<?php
require('koneksi.php');

$SuccessMessage="";
$errorMessage="";

if (isset($_POST['register'])) {
    $userMail = $_POST['text_email'];
    $userPass = $_POST['text_pass'];
    $userName = $_POST['text_name'];

    // Use a prepared statement to safely insert data
    $query = "INSERT INTO user_detail (`id`, `user_email`, `user_password`, `user_fullname`, `level`) VALUES (NULL, ?, ?, ?, 2)";

    $stmt = mysqli_prepare($koneksi, $query);

    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "sss", $userMail, $userPass, $userName);

    // Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        // Redirect to the login page after successful registration
        $SuccessMessage = "Registration successful. You can now login.";
    } else {
        // Handle the error if the query fails
        $ErrorMessage = "Registration failed: " . mysqli_error($koneksi);   
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Register</title>
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
                        <h1>Register</h1>
                    </div>
                    <div class="card-body">
                        <!-- START Display error alert -->
                        <?php if (!empty($SuccessMessage)) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert" id="error-alert">
                                <?php echo $SuccessMessage; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>
                        <!-- END Display error alert -->
                        <form action="register.php" method="POST">
                            <div class="form-group">
                                <label for="text_email">Email</label>
                                <input type="email" class="form-control" name="text_email" required>
                            </div>
                            <div class="form-group">
                                <label for="text_pass">Password</label>
                                <input type="password" class="form-control" name="text_pass" required>
                            </div>
                            <div class="form-group">
                                <label for="text_name">Full Name</label>
                                <input type="text" class="form-control" name="text_name" required>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <button class="btn btn-info" type="submit" name="register">Sign up</button>
                            </div>
                            <div class="mt-4 text-center">
                                Already have account? <a href="login.php">Sign in</a>
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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>

</script>

</html>