<?php
session_start();
$con = new mysqli("localhost","root","","gamer");
?>
<form action="buy.php" method="post">
    <?php
    $cart = $_SESSION['arrProduct'] ;
    if (count($cart) > 0){
        $ids = "";
        foreach ($cart as $row){
            $ids .= $row['id'].",";
        }
        $ids = substr_replace($ids, "",-1);
        echo "<input type='text' name='ids' value='$ids '/>";
    }
    ?>
    <div>
        <label for="fullName">Full Name:</label>
        <input type="text" name="full_name" id="full_name" class="form-control">
    </div>

    <div>
        <label for="fullName">Phone:</label>
        <input type="text" name="phone" id="phone" class="form-control">
    </div>

    <div>
        <label for="fullName">Address:</label>
        <input type="text" name="address" id="address" class="form-control">
    </div>
    <button>ĐẶT HÀNG</button>
</form>
