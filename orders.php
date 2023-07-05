<?php
    require_once ("connect.php");
    $con = new mysqli(ConnectionInfo::$hostName,ConnectionInfo::$username,ConnectionInfo::$password,ConnectionInfo::$dbName);
    if($con->connect_error){
        die("Connection error");
    }
    if(isset($_POST["orders"])){

        $fullName = $_POST["fullName"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        date_default_timezone_set("asia/Ho_Chi_Minh");
        $dateBuy = date("Y-m-d H:i:s");
    }
    $sql="INSERT INTO orders (full_name,phone_number,address,date_buy) VALUES ('$fullName','$phone','$address','$dateBuy')";
    $result1 = $con->query($sql);
    echo "Insert success";
