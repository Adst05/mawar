<?php
include_once("class/User.php");
include_once("class/Login.php");

session_start();

$user = new User;

if (isset($_SESSION['id'])) {
    $data_user = $user->find($_SESSION['id']);
    if ($data_user['role'] == 'admin') {
        header("Location: admin/index.php");
    } elseif ($data_user['role'] == 'user') {
        header("Location: user/index.php");
    }
}

$login = new Login;
if (isset($_POST['submit'])) {
    $login->authLogin(
        [
            "username" => $_POST['username'],
            "password" => $_POST['password'],
        ]
    );
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("partials/link_css.php") ?>
    <title>Login Page</title>
   </head>
<body>
<br><br><br>
    <div class="card container" style="width: 18rem;">
    <img src="assets/7fa6967aa1e685855c2e80cf6c36db74.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <form action="" method="post">
            <div>
                <label>Username</label>
                <input type="text" name="username">
            </div>

            <div>
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <button class="but1"type="submit" name="submit">Login</button>
            <button class="but2"><a href="register.php" ></a>Register Akun</button>
        </form>    
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>