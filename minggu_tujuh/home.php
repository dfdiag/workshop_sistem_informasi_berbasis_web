<?php
require ('koneksi.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <title>Home</title>
</head>
<body>
    <div class="header">
    <h1>Selamat Datang, <?= $_GET['user_fullname']; ?></h1>
    </div>
    <table class="table table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Email</th>
            <th>Nama</th>
            <th>Aksi</th>
            
        </tr>

        <?php
        $query = "SELECT * FROM user_detail";
        $result = mysqli_query($koneksi, $query);
        $no = 1;
        while ($row = mysqli_fetch_array($result)) {
            $userMail = $row['user_email'];
            $userName = $row['user_fullname'];
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $userMail; ?></td>
                <td><?php echo $userName; ?></td>
                <td class="action-links"><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
                </td >
            </tr>
            <?php
            $no++;
        } ?>
    </table>
 
</body>
</html>