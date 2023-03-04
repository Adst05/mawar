<?php
include_once("../class/User.php");
include_once("../class/Peminjaman.php");
session_start();

$user = new User;
$data_user = $user->find($_SESSION["id"]);

$pengembalian = new Peminjaman;
$data_pengembalian = $pengembalian->findKembali($_SESSION["id"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("../partials/t_script_js.php") ?>
    <title>Riwayat Pengembalian</title>
</head>
<body>
    <?php include("../partials/sidebar_user.php") ?>

    <div class="container" style="margin: 25px;">
    <table border="1" class="table table-striped" id="jquery-tab">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Kondisi Buku Saat Dikembalikan</th>
                    <th>Denda</th>
                </tr>    
            </thead>

            <tbody>
                <?php foreach($data_pengembalian as $key => $p){ 
                ?>
                <tr>   
                    <td><?= $key +1 ?></td>
                    <td><?= $p["judul"] ?></td>
                    <td><?= $p["tanggal_pengembalian"] ?></td>
                    <td><?= $p["kondisi_buku_saat_dikembalikan"] ?></td>
                    <td><?= $p["denda"] ?></tr>
                </tr> 
    
                <?php  }?>
            </tbody>
        </table>
    </div>

    <?php include("../partials/b_script_js.php") ?>
</body>
</html>