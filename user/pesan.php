<?php 
include_once("../class/Pesan.php");
include_once("../class/User.php");
session_start();

$pesan = new Pesan;
$data_pesan = $pesan->findByUserId($_SESSION["id"]);

$user = new User;
$data_user = $user->find($_SESSION["id"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <title>Pesan</title>
</head>
<body>
    <?php include("../partials/sidebar_user.php") ?>

    <div class="table">
        <h3>Pesan Masuk</h3>
        
        <table border="1">
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>

            <?php 
            foreach($data_pesan as $key => $p){
            ?>

            <tr>
                <td><?= $key+1 ?></td>
                <td><?= $p["judul"] ?></td>
                <td><?= $p["status"] ?></td>
                <td>
                    <a href="baca.php?id=<?= $p["id"] ?>">Lihat</a>
                </td>
            </tr>

            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>
