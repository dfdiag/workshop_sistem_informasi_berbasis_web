<?php
require('koneksi.php');
$email = $_GET['user_fullname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>

    <div class="navbar navbar-light bg-primary text-white">
        <div class="container-fluid ">
            <strong>
                <h1>Selamat Datang, <?= $_GET['user_fullname']; ?></h1>
            </strong>
        </div>
    </div>
    <div class="container">
        <table class="table align-middle table-striped table-hover mt-5">
            <tr>
                <th>No</th>
                <th>Email</th>
                <th>Nama</th>
                <th>Aksi</th>

            </tr>
            <!-- START MODAL PHP -->
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
                    <td>
                        <a class="btn btn-success" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a class="btn btn-danger" href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Ingin menghapus data tersebut?')">Hapus</a>

                    </td>
                </tr>
            <?php
                $no++;
            } ?>
            <!-- END MODAL PHP -->
        </table>

    </div>

</body>

</html>