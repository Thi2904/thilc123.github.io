<?php
session_start();
$con = new mysqli("localhost","root","","gamer");
if($con->connect_error){
    die("Connection error");
}
if(isset($_POST["out"])){
    $_SESSION['username'] = '';
    header ('Location: index.php');
}
?>
