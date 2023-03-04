<?php
include_once("../../../class/User.php");
include_once("../../../class/Peminjaman.php");
session_start();

$user = new User;
$data_user = $user->find($_SESSION['id']);

$peminjaman = new Peminjaman;
$data_peminjaman = $peminjaman->allPinjam();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('../../../partials/link_css.php'); ?>
    <title>Data Peminjaman</title>
</head>
<body>
    <?php include("../../..//partials/sidebar_admin.php") ?>

    <div class="container" style="margin: 25px;">
            <table border="1" class="table table-striped" id="table">
            <tr>
                <th>No</th>
                <th>Nama Anggota</th>
                <th>Judul Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>kondisi Buku Saat Dipinjam</th>
                <th>kondisi Buku Saat Dikembalikan</th>
                <th>Denda</th>
            </tr>

            <?php foreach($data_peminjaman as $key => $b) {?> 
              <tr>
                <td><?= $key +1 ?></td>
                <td><?= $b["nama"] ?></td>
                <td><?= $b["judul"] ?></td>
                <td><?= $b["tanggal_peminjaman"] ?></td>
                <td><?= $b["tanggal_pengembalian"] ?></td>
                <td><?= $b["kondisi_buku_saat_dipinjam"] ?></td>
                <td><?= $b["kondisi_buku_saat_dikembalikan"] ?></td>
                <td><?= $b["denda"] ?></td>
              </tr>  
            <?php } ?>
        </table>
    </div>
</html>