<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    unset($_SESSION['arrProduct'][$id]);
}

header("location: show_cart.php");
?>