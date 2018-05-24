<?php
session_start();
$_SESSION['message'] = '';

$mysqli = new mysqli('localhost','roott','faryal','accounts');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $sql = 'SELECT username FROM users WHERE $_POST[text]';

    //two passwords are equal to each other
    if($_POST['password'] == $_POST['confirmpassword'])
    {
        //print_r($_FILES); die;

        $username = $mysqli->real_escape_string($_POST['username']);
        $password = md5($_POST['password']); //md5 hash password security



    }
    else
    {
        $_SESSION['message'] = "Passwords do not match.";
    }
}

?>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type+"text">
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
    <div class="module">
        <h1>Login</h1>
        <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
            <input type="text" placeholder="User Name" name="username" required />
            <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
            <input type="submit" value="Login" name="login" class="btn btn-block btn-primary" />
        </form>
    </div>
</div>