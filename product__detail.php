<?php
session_start();

?>
<?php
    $id= $_GET["id"];
    $con = new mysqli('localhost','root','','gamer');
    if($con->connect_error) {
        echo "Connect failed!";
    }
    $sql = "SELECT * FROM product WHERE id = $id";
    $result = $con->query($sql);
    $row = null;
    if($result->num_rows >0){
        while($obj = $result->fetch_assoc()){
            $row=$obj;
        }
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assest/css/main.css">
    <link rel="stylesheet" href="assest/css/base.css">
    <link rel="stylesheet" href="assest/css/normalize.css">
    <link rel="stylesheet" href="assest/font/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <?php
            echo "<title>".$row["name"]."</title>";
        ?>
</head>
<body>
<header class="header">
    <div class="header-item">
        <div class="header-left-item">
            <a href="index.php" class="header-logo-item-link">
                <img src="assest/img/cover.png" alt="logo" class="header-logo-item" >
            </a>
        </div>
        <div class="header-center-item">
            <a href="#" class="header-main-web-link">TẤT CẢ SẢN PHẨM</a>
        </div>
        <div class="header-right-item">
            <div class="header-with-search">
                <input type="text" placeholder="Tìm kiếm" class="search-item-input">
                <a href="search_product_item.php" class="search-item-link">
                    <i class="search-item-logo fa-solid fa-magnifying-glass"></i>
                </a>
            </div>
            <div class="user-item">
                <?php
                if(isset($_SESSION['username']))  {
                    $username=$_SESSION["username"];
                    if($username!=''){
                        echo "
                                    <form action='log_out.php' method='post'>
                                        <span>".$username."</span>
                                        <button name='out'>Log out</button>
                                    </form>
                                    ";
                    }
                    else{
                        echo "
                                    <i class='user-item-logo fa-regular fa-user'>
                                    </i>
                                    <div class='user__register-login'>
                                        <ul class='modal-list'>
                                            <li class='modal-item'>
                                                <a href='login.php' class='modal-item-login'>LOGIN & REGISTER</a>
                                            </li>
                                            <li class='modal-item'>
                                                <span class='modal-item-choice'>
                                                    Hoặc đăng nhập bằng
                                                </span>                                                
                                            </li>
                                            <li class='modal-item'>
                                                <a href='#' class=' modal-item-facebook'>Facebook</a>
                                                <i class='modal-item-facebook-logo fa-brands fa-facebook'></i>
                                            </li>
                                        </ul>
                                    </div>
                                    ";
                    }

                }
                else{
                    echo "
                                    <i class='user-item-logo fa-regular fa-user'>
                                    </i>
                                    <div class='user__register-login'>
                                        <ul class='modal-list'>
                                            <li class='modal-item'>
                                                <a href='login.php' class='modal-item-login'>LOGIN & REGISTER</a>
                                            </li>
                                            <li class='modal-item'>
                                                <span class='modal-item-choice'>
                                                    Hoặc đăng nhập bằng
                                                </span>                                                
                                            </li>
                                            <li class='modal-item'>
                                                <a href='#' class=' modal-item-facebook'>Facebook</a>
                                                <i class='modal-item-facebook-logo fa-brands fa-facebook'></i>
                                            </li>
                                        </ul>
                                    </div>
                                    ";
                }

                ?>
            </div>
            <!--          Category              -->
            <a class="cart-item" href="show_cart.php">
                <i class="cart-item-logo fa-solid fa-cart-shopping"></i>
                <div class="cart__add-product">
                    <i class="cart__add-product-item fa-solid fa-xmark"></i>
                    <span class="cart__add-product-name">
                                    GIỎ HÀNG
                                </span>
                    <p class="cart__add-product-no-item">Giỏ hàng của bạn chưa có sản phẩm nào</p>
                </div>
            </a>
        </div>
    </div>
    <div class="header__navbar">
        <div class="header__navbar-item">
            <ul class="header__navbar-list">
                <li class="header-list-item">
                    <a href="#" class="list-item-link">TRANG CHỦ</a>
                </li>
                <li class="header-list-item">
                    <a href="#" class="list-item-link">GIỚI THIỆU</a>
                </li>
                <li class="header-list-item">
                    <a href="#" class="list-item-link">SẢN PHẨM MỚI</a>
                </li>
                <li class="header-list-item list-item-link-1">
                    <a href="#" class="list-item-link ">
                        <span class="name__item">ÁO</span>
                        <div class="khung__ao">
                            <ul class="khung__ao-list">
                                <li class="khung__ao-item">
                                    <a href="#" class="khung__ao-item-link">ÁO THUN</a>
                                </li>
                                <li class="khung__ao-item">
                                    <a href="#" class="khung__ao-item-link">ÁO SƠ MI </a>
                                </li>
                                <li class="khung__ao-item">
                                    <a href="#" class="khung__ao-item-link">ÁO POLOS </a>
                                </li>
                                <li class="khung__ao-item">
                                    <a href="#" class="khung__ao-item-link">ÁO HOODIE-SWEATER </a>
                                </li>
                                <li class="khung__ao-item">
                                    <a href="#" class="khung__ao-item-link">ÁO KHOÁC </a>
                                </li>
                            </ul>
                        </div>
                    </a>
                </li>
                <li class="header-list-item list-item-link-2">
                    <a href="#" class="list-item-link ">
                        <span class="name__item">QUẦN</span>
                        <div class="khung__quan">
                            <ul class="khung__quan-list">
                                <li class="khung__quan-item">
                                    <a href="#" class="khung__quan-item-link">JEANS</a>
                                </li>
                                <li class="khung__quan-item">
                                    <a href="#" class="khung__quan-item-link">QUẦN LỬNG</a>
                                </li>
                                <li class="khung__quan-item">
                                    <a href="#" class="khung__quan-item-link">KAKI</a>
                                </li>
                                <li class="khung__quan-item">
                                    <a href="#" class="khung__quan-item-link">JOGGERS</a>
                                </li>
                                <li class="khung__quan-item">
                                    <a href="#" class="khung__quan-item-link">UNDERWARE</a>
                                </li>
                                <li class="khung__quan-item">
                                    <a href="#" class="khung__quan-item-link">QUẦN NGỦ</a>
                                </li>
                                <li class="khung__quan-item">
                                    <a href="#" class="khung__quan-item-link">QUẦN TÂY</a>
                                </li>
                            </ul>
                        </div>
                    </a>
                </li>
                <li class="header-list-item  list-item-link-3">
                    <a href="#" class="list-item-link ">
                        <span class="name__item">PHỤ KIỆN</span>
                        <div class="khung__phu-kien">
                            <ul class="khung__phu-kien-list">
                                <li class="khung__phu-kien-item">
                                    <a href="#" class="khung__phu-kien-item-link">TẤT-VỚ</a>
                                </li>
                                <li class="khung__phu-kien-item">
                                    <a href="#" class="khung__phu-kien-item-link">BALO</a>
                                </li>
                                <li class="khung__phu-kien-item">
                                    <a href="#" class="khung__phu-kien-item-link">NÓN</a>
                                </li>
                                <li class="khung__phu-kien-item">
                                    <a href="#" class="khung__phu-kien-item-link">TÚI</a>
                                </li>
                                <li class="khung__phu-kien-item">
                                    <a href="#" class="khung__phu-kien-item-link">THẮT LƯNG</a>
                                </li>
                                <li class="khung__phu-kien-item">
                                    <a href="#" class="khung__phu-kien-item-link">VÍ</a>
                                </li>
                                <li class="khung__phu-kien-item">
                                    <a href="#" class="khung__phu-kien-item-link">GIÀY</a>
                                </li>
                                <li class="khung__phu-kien-item">
                                    <a href="#" class="khung__phu-kien-item-link">DÉP</a>
                                </li>
                            </ul>
                        </div>
                    </a>
                </li>
                <li class="header-list-item list-item-link-4">
                    <a href="#" class="list-item-link ">
                        <span class="name__item">BỘ SƯU TẬP</span>
                        <div class="khung__collection">
                            <ul class="khung__collection-list">
                                <li class="khung__collection-item">
                                    <a href="#" class="khung__collection-item-link">PRE-FALL COLLECTION</a>
                                </li>
                                <li class="khung__collection-item">
                                    <a href="#" class="khung__collection-item-link">WINTER COLLECTION</a>
                                </li>
                                <li class="khung__collection-item">
                                    <a href="#" class="khung__collection-item-link">TẾT COLLECTION</a>
                                </li>
                            </ul>
                        </div>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</header>
    <div class="action">
        <a href="product__show.php" class="action__link">
            <span class="action__name-bold">
                Quay lại
            </span>
        </a>
        <a href="index.php" class="action__link">
            <span class="action__name">
                Trang chủ >
            </span>
        </a>
        <a href="product__show.php" class="action__link">
            <span class="action__name">
                Sản phẩm >
            </span>
        </a>
        <a href="product__show.php" class="action__link">
            <span class="action__name">
                Nam
            </span>
        </a>
    </div>
    <div class="show__product-detail">
        <?php
                    echo
                "<div class='show__product-detail-all'>
                    <div class='show__product_details'>
                            <p>
                                <img width='500px' height='600px' src=product/image_product/" . $row["image"] . " alt=''>
                            </p>"
                        . "<div class='show__product-name-price'>
                            <p class='show__product-name'>" . $row["name"] . "
                            </p>"
                        . "<p class='show__product-id'>Mã sản phẩm-" . $row["id"] . "
                                <div class='quantity'>
                                <form action=''>
                                    <label for='quantity'>Quantity:</label>
                                    <input type='number' id='quantity' require name='quantity' min='1' max='100' step='1' value='1'>
                                </form>
                            </div>
                            </p>"
                        . "<p class='show__product-price'>
                                <span class='show__product-price-name'>Giá:</span>" . $row["price"] . "đ
                            </p>
                            <a type='submit' href='#' class='show__product-btn'>Đặt mua ngay</a>
                            <br>
                            <a  href='add_product_success.php?id=" . $row["id"] . "'' class='show__product-btn'>Add to Cart</a>
                            <div>
                    </div>
                </div>

            
";

        ?>

    </div>
</body>
</html>