<?php
include_once("../../../class/Kategori.php");
include_once("../../../class/User.php");
session_start();

$user = new User;
$data_user = $user->find($_SESSION['id']);

$kategori = new Kategori;
$data_kategori = $kategori->all()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  include_once("../../../partials/link_css.php");?>
    <title>Data Kategori</title>
</head>
<body>
    <?php include("../../..//partials/sidebar_admin.php") ?>

    <div class="tambah">
        <a href="tambah.php">Tambah Kategori</a>
    </div>
    <div class="container" style="margin: 25px;">
            <table border="1" class="table table-striped" id="table">
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>

            <?php foreach($data_kategori as $key => $b) {?> 
              <tr>
                <td><?= $key +1 ?></td>
                <td><?= $b["nama"] ?></td>
                <td>
                    <a href="edit.php?id=<?= $b["id"] ?>">Edit</a> |
                    <a href="hapus.php?id=<?= $b["id"] ?>">Hapus</a>
                </td>
              </tr>  
            <?php } ?>
        </table>
    </div>
</body>
</html>