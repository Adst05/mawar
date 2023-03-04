<?php
include_once("../../../class/User.php");

$id = $_GET["id"];

$user = new User;
$data_user = $user->find($id);

if(isset($_POST["submit"])){
    $data = [
        "kode" => $_POST["kode"],
        "fullname" => $_POST["fullname"],
        "username" => $_POST["username"],
        "password" => $_POST["password"],
        "role" => $_POST["role"],
        "join_date" => $_POST["join_date"],
    ];

    $user->update($id, $data);

    header(("location: index.php"));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Tambah Admin</title>
</head>
<body>
    <?php include("../../../partials/sidebar_admin.php") ?>
    <div class="form">
        <form action="" method="post">
            <input type="hidden" disabled value="<?= $data_user["id"] ?>">

            <div>
                <label>Kode</label>
                <input type="text" name="kode" value="<?= $data_user["kode"] ?>">
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
                <input type="password" name="password" value="" placeholder="Password belum diubah">
            </div>

            <div>
                <label>Foto</label>
                <input type="file" name="foto" value="">
            </div>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>