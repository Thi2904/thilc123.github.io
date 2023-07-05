<?php
$con = new mysqli("localhost","root","","gamer");
if ($con->connect_error) {
    die("Kết nối thất bại");
}
if (isset($_POST["sign_in"])){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        header("Location: index.php");
        exit();
    } else {
        $error = "Sai username hoặc password";
        header("Location: login.php?error=$error");
        exit();
    }
}
