<?php

include_once("../../../class/User.php");

$user = new User;
$data_user = $user->find(1);

$data_anggota = $user->getAnggota();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("../../../partials/link_css.php") ?>
    <?php include("../../../partials/t_script_js.php") ?>
    <title>Data Anggota</title>
</head>
<body>

    <?php include("../../../partials/sidebar_admin.php") ?>

    <div class="tambah">
        <a href="tambah.php">Tambah Anggota</a>
    </div>
    <div class="container" style="margin: 25px;">
            <table border="1" class="table table-striped" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Anggota</th>
                    <th>NIS</th>
                    <th>Nama Lengkap</th>
                    <th>Nama Kelas</th>
                    <th>Nama Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($data_anggota as $key => $b) {?> 
                  <tr>
                    <td><?= $key +1 ?></td>
                    <td><?= $b["kode"] ?></td>
                    <td><?= $b["nis"] ?></td>
                    <td><?= $b["fullname"] ?></td>
                    <td><?= $b["kelas"] ?></td>
                    <td><?= $b["alamat"] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $b["id"] ?>">Edit</a> |
                        <a href="hapus.php?id=<?= $b["id"] ?>">Hapus</a>
                    </td>
                  </tr>  
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php include("../../../partials/b_script_js2.php") ?>
</body>
</html>