<?php
require('koneksi.php');

if (isset($_POST['update'])) {
    $userId = $_POST['txt_id'];
    $userPass = $_POST['txt_pass'];
    $userName = $_POST['txt_name'];

    $query = "UPDATE user_detail SET user_password=?, user_fullname=? WHERE id=?";
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, "ssi", $userPass, $userName, $userId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('Location: home.php');
    exit();
}

$id = $_GET['id'];
$query = "SELECT * FROM user_detail WHERE id='$id'";
$result = mysqli_query($koneksi, $query) or die(mysqli_connect_error());

while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $userMail = $row['user_email'];
    $userPass = $row['user_password'];
    $userName = $row['user_fullname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-info text-center text-white">
                        <h1>Edit User</h1>
                    </div>
                    <div class="card-body">
                        <form action="edit.php" method="POST">
                            <input type="hidden" name="txt_id" value="<?php echo $id; ?>">
                            <div class="form-group">
                                <label for="text_email">Email</label>
                                <input type="email" class="form-control" name="text_email" value="<?= $userMail; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="text_pass">Password</label>
                                <input type="password" class="form-control" name="txt_pass" value="<?= $userPass; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="text_name">Full Name</label>
                                <input type="text" class="form-control" name="txt_name" value="<?= $userName; ?>">
                            </div>
                            <button class="btn btn-info" type="submit" name="update">Update</button>
                            <a href="home.php" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
}
?>
