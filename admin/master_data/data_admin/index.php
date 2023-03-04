<?php
include_once("../../../class/User.php");

$user = new User;
$data_user = $user->find(1);

$data_admin = $user->getAdmin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('../../../partials/link_css.php'); ?>
    <?php include_once('../../../partials/t_script_js.php'); ?>
    <title>Data Administrator</title>
</head>
<body>
    <?php include("../../../partials/sidebar_admin.php") ?>
    <h1>Data Admin</h1>
    <div class="tambah">
        <a href="tambah.php">Tambah Anggota</a>
    </div>
    <div class="container" style="margin: 25px;">
            <table border="1" class="table table-striped" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Terakhir Login</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($data_admin as $key => $b) {?> 
                  <tr>
                    <td><?= $key +1 ?></td>
                    <td><?= $b["fullname"] ?></td>
                    <td><?= $b["username"] ?></td>
                    <td><?= $b["password"] ?></td>
                    <td><?= $b["terakhir_login"] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $b["id"] ?>">Edit</a> |
                        <a href="hapus.php?id=<?= $b["id"] ?>">Hapus</a>
                    </td>
                  </tr>  
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php include_once('../../../partials/b_script_js2.php'); ?>
</body>
</html>