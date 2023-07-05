<?php
session_start();
$con = new mysqli("localhost","root","","gamer");

$full_name = $_POST["full_name"];
$phone = $_POST["phone"];
$address = $_POST["address"];

$sql = "INSERT INTO orders(full_name,phone_number,address) VALUES ('$full_name','$phone','$address')";
$result = $con->query($sql);

echo "success";
header("location: index.php");