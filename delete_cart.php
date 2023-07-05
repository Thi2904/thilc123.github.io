<?php
    session_start();
    $_SESSION["arrProduct"]=NULL;
    header("Location:" . "show_cart.php");