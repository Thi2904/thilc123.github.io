<?php
session_start();

$id = $_GET["id"];
$con = new mysqli('localhost','root','','gamer');
if($con->connect_error){
    echo "Connect failed";
}
$sql = "SELECT * FROM product WHERE id='$id'";
$result = $con->query($sql);
$obj = null;
if($result -> num_rows>0){
    while($row=$result->fetch_assoc()){
        $obj=$row;
    }
}

$id = $obj['id'];
$name = $obj['name'];
$price = $obj['price'];
$quantity = $obj['quantity'];
$img = "product/image_product/".$obj["image"];


$product = array();
$product["id"]=$id;
$product["image"]=$img;
$product["price"]=$price;
$product["quantity"]=1;
$product["name"]=$name;

// coi hàng có trong giỏ chưa
if(isset($_SESSION['arrProduct'][$id])) {
    // có thì +1
    $_SESSION['arrProduct'][$id]['quantity']++;
} else {
    // chưa thì cho vào =1
    $_SESSION['arrProduct'][$id] = $product;
}
header("Location:" . "show_cart.php");
?>

