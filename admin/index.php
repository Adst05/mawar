<?php
session_start();
include_once("../class/User.php");
include_once("../class/Peminjaman.php");
include_once("../class/Buku.php");

$user = new User;
$data_user = $user->find($_SESSION['id']);

if (isset($_SESSION['id'])) {
    $data_user = $user->find($_SESSION['id']);
    if ($data_user['role'] == 'user') {
        header("Location: http://localhost/ssaa/user/index.php");
    } 
}

$data_anggota = $user->getAnggota();

$buku = new Buku;
$data_buku = $buku->all();

$peminjaman = new Peminjaman;
$data_peminjaman = $peminjaman->getPeminjaman();
$data_pengembalian = $peminjaman->getPengembalian();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("../partials/link_css.php") ?>
    <?php include("../partials/t_script_js.php") ?>
    <title>Dashboard Admin</title>
</head>
<body>
    <?php include("../partials/sidebar_admin.php") ?>
    
                <div class="container3">
                    <span class="navbar-brand mb-0 h1">Selamat datang Admin</span>
                </div>
            </nav>
<br>
        <div class="row bawah">
            <!-- biru -->
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body bg-primary">
                            <h5 class="card-title"><?= count($data_anggota) ?></h5>
                            <h6 class="card-subtitle mb-2 kata">Anggota</h6>
                            <a href="http://localhost/ssaa/admin/master_data/data_anggota/index.php" style="color: #000000" class="card-link lihat">Lihat Anggota</a>
                        </div>
                    </div>
                </div>
            <!-- biru -->

            <!-- hijau -->
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body bg-success">
                            <h5 class="card-title"><?= count($data_buku) ?></h5>
                            <h6 class="card-subtitle mb-2 kata">Buku</h6>
                            <a href="http://localhost/ssaa/admin/katalog_buku/data_buku/index.php" style="color: #000000" class="card-link lihat">Lihat Buku</a>
                        </div>
                    </div>
                </div>
            <!-- hijau -->

            <!-- oren -->
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body bg-warning">
                            <h5 class="card-title"><td><?= count($data_peminjaman) ?></td></h5>
                            <h6 class="card-subtitle mb-2 kata">Peminjaman</h6>
                            <a href="http://localhost/ssaa/admin/master_data/data_peminjaman/index.php" style="color: #000000" class="card-link lihat">Lihat Peminjaman</a>
                        </div>
                    </div>
                </div>
            <!-- oren -->

            <!-- merah -->
            <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body bg-danger">
                            <h5 class="card-title"><td><?= count($data_pengembalian) ?></td></h5>
                            <h6 class="card-subtitle mb-2 kata">Pengembalian</h6>
                            <a href="http://localhost/ssaa/admin/master_data/data_peminjaman/index.php" style="color: #000000" class="card-link lihat">Lihat Peminjaman</a>
                        </div>
                    </div>
                </div>
            <!-- merah -->

        </div>
    </div>
    <?php include("../partials/b_script_js.php") ?>
</body>
</html>