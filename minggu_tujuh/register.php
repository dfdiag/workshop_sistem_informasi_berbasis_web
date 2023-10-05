<?php
require('koneksi.php');

if(isset($_POST['register'])){
    $userMail = $_POST['text_email'];
    $userPass = $_POST['text_pass'];
    $userName = $_POST['text_nama'];

    // Use a prepared statement to safely insert data
    $query = "INSERT INTO user_detail (`id`, `user_email`, `user_password`, `user_fullname`, `level`) VALUES (NULL, ?, ?, ?, 2)";

    $stmt = mysqli_prepare($koneksi, $query);

    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "sss", $userMail, $userPass, $userName);

    // Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        // Redirect to the login page after successful registration
        header('Location: login.php');
    } else {
        // Handle the error if the query fails
        echo "Registration failed: " . mysqli_error($koneksi);
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
}
?>
<html>
<head>
    <form action="register.php" method="POST">
        <p>email: <input type="text" name="text_email" required></p>
        <p>password: <input type="password" name="text_pass" required></p>
        <p>name: <input type="text" name="text_nama" required></p>
        <button type="submit" name="register">Sign Up</button>
    </form>
    <p><a href="login.php">Login</a></p>
</body>
</html>
