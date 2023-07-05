<?php
session_start();
?>
<?php
    $con= new mysqli('localhost','root','','gamer');
    if($con->connect_error){
        echo "Connect failed";
    }
    $sql = "SELECT * FROM account";
    $result  = $con->query($sql);
?>
<?php

if(isset($_POST['account']) && isset($_POST['password'])) {

    if ($result->num_rows > 0) {
        while ($row1 = $result->fetch_assoc()) {
            $username = $row1["username"];
            $pass = $row1["password"];
            if ($_POST['account'] == "$username" && $_POST['password'] == "$pass") {


                $_SESSION['ACCOUNT'] = true;

                header('Location: index.php');
                exit;
            }
            else {

                header('Location: login.php?err=invalid');
            }
        }

    }
}
?>
