<?php
require('koneksi.php');

if (isset($_POST['update'])) {
    $userId = $_POST['txt_id'];
    $userPass = $_POST['txt_pass'];
    $userName = $_POST['txt_nama'];

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

<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <form action="edit.php" method="POST">
        <input type="hidden" name="txt_id" value="<?php echo $id; ?>">
        <p>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_email" value="<?php echo $userMail; ?>" readonly></p>
        <p>Password: <input type="password" name="txt_pass" value="<?php echo $userPass; ?>"></p>
        <p>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_nama" value="<?php echo $userName; ?>"></p>
        <button type="submit" name="update">Update</button>
    </form>
    <p><a href="home.php">Kembali</a></p>
</body>
</html>

<?php } ?>