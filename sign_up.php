<?php
$con = new mysqli("localhost","root","","gamer");
if ($con->connect_error) {
    die("Kết nối thất bại");
}
if (isset($_POST['sign_up'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    if ($password == $re_password) {
        $sql = "INSERT INTO account(username,email,password) VALUES ('$username','$email','$password')";
        if ($con->query($sql) === TRUE) {
            header("Location: index.php");
        } else {
            echo "ERROR: " . $sql . "<br>" . $con->error;
        }
    } else {
        header("Location: login.php?err=invalid");
    }
}
?>