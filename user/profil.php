<?php
include_once("../class/User.php");
session_start();

$user = new User;
$data_user = $user->find($_SESSION["id"]);

if(isset($_POST["submit"])){
    $data = [
        "id" => $_POST["id"],
        "nis" => $_POST["nis"],
        "fullname" => $_POST["fullname"],
        "username" => $_POST["username"],
        "password" => $_POST["password"],
        "kelas" => $_POST["kelas"],
        "alamat" => $_POST["alamat"],
        "foto" => $_FILES["foto"],
    ];

    $user->updateFotou($_POST["id"], $data);

    header("location: profil.php");
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <?php include("../partials/sidebar_user.php") ?>

    <div class="form">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $data_user["id"] ?>">
            <div>
                <label>Foto</label>
                <input type="file" name="foto"> 
                <img width="200" src="<?= $data_user["foto"] ?>">
            </div>
            <div>
                <label>Kode Anggota</label>
                <input type="text" name="kode" disabled value="<?= $data_user["kode"] ?>">
            </div>

            <div>
                <label>NIS</label>
                <input type="text" name="nis" value="<?= $data_user["nis"] ?>">
            </div>

            <div>
                <label>Nama Lengkap</label>
                <input type="text" name="fullname" value="<?= $data_user["fullname"] ?>">
            </div>

            <div>
                <label>Username</label>
                <input type="text" name="username" value="<?= $data_user["username"] ?>">
            </div>

            <div>
                <label>Password</label>
                <input type="password" name="password" value="<?= $data_user["password"] ?>">
            </div>

            <div>
                <label>Kelas</label>
                <input type="text" name="kelas" value="<?= $data_user["kelas"] ?>">
            </div>

            <div>
                <label>Alamat</label>
                <input type="text" name="alamat" value="<?= $data_user["alamat"] ?>">
            </div>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>