<?php
    session_start();
$con = new mysqli("localhost","root","","gamer");

if(isset($_POST['id']) && isset($_POST['quantity'])) {
    $id = $_POST['id'];
    $quantity = $_POST['quantity'];

    if($quantity > 0) {
        $_SESSION['arrProduct'][$id]['quantity'] = $quantity;
    } else {
        unset($_SESSION['arrProduct'][$id]);
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@100;300;400;500;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="assest/font/fontawesome-free-6.4.0-web/css/all.min.css">
    <title>Fashionable</title>
</head>
<body>
    <div class="app">
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
                        if(isset($_SESSION['username'])){
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
        <div class="container">
            <?php
            $sum=0;
            if(isset($_SESSION["arrProduct"]) && $_SESSION["arrProduct"] != NULL) {
                $arrProduct = $_SESSION["arrProduct"];
                echo "
            <div class='category_header'>
                <div class='category_name'>
                    <h3>Shopping Cart</h3>
                </div>
                <ul class='cate-del-pri'>
                    <li class='cate_delete'>
                        <a href='delete_cart.php' class='cate_delete_link'>Deselect all items</a>
                    </li>
                    <li class='cate_price'>
                        <div class='cate_price-name'>
                            <span>Price</span>
                        </div>
                    </li>
                </ul>
            </div>
        ";
                foreach ($arrProduct as $key => $value) {
                    $id = $value['id'];
                    $tien = intval($value["price"]);
                    $quantity = $value["quantity"];
                    $image = $value['image'];
                    $name = $value["name"];
                    echo "
                <div class='show_add'>
                    <image class='product_image' src='$image'>
                    <div class='show_name_price'>
                        <div class='show_name'>
                            <h3>$name</h3>                         
                            <p>Mã sp: $id</p>  
                            <form action='' method='post'>
                                Số lượng: <input type='number' required min='1' max='99' name='quantity' value='$quantity'>
                                <input type='hidden' name='id' value='$id'>
                                <button type='submit' name='update'>Update Quantity</button>
                            </form>  
                                <a class='trash_item_link' href='delete_cart_each.php?id=$id'><i class='fa-solid fa-trash-can'></i></a>                        </div> 
                        <div class='show_price'>
                            <p>$tien đ</p>
                        </div>
                    </div>
                </div>";
                    $sum += ($tien * $quantity);
                }

                echo "
            <div class='product_total'>
                <span class='product_total_item'>Total: $sum đ </span>                    
            </div>";
                echo "<a class='back_to_shop' href='product__show.php'>Trở lại mua hàng</a>
                <br><br>
                <a href='buy_product.php'><button>mua hêt</button></a>";

            } else {
                echo "
            <div class='no_item_cart'>
                <p>Chưa có sản phẩm</p>
                <a class='back_to_shop' href='product__show.php'>Trở lại mua hàng</a>
            </div>
        ";
            }

            ?>

        </div>

        <footer class="footer">
            <div class="all">
                <div class="start_f">
                    <div class="before_name-f"></div>
                    <span class="name_footer">
                        hỗ trợ - chính sách mua hàng
                    </span>
                    <div class="after_name-f"></div>
                </div>
                <div class="down_name_footer">
                    <div class="support">                        
                        <ul class="footer_list">
                        <h3 class="footer_name">Hỗ Trợ Khách Hàng</h3>
                            <li class="footer_item">
                                <a href="" class="footer_item_link">Phương thức thanh toán</a>
                            </li>
                            <li class="footer_item">
                                <a href="" class="footer_item_link">Chính sách giao hàng</a>
                            </li>
                        </ul>
                    </div>                    
                    <div class="support">                        
                        <ul class="footer_list">
                        <h3 class="footer_name">Chính sách mua hàng</h3>
                            <li class="footer_item">
                                <a href="" class="footer_item_link">Chính sách đổi hàng</a>
                            </li>
                            <li class="footer_item">
                                <a href="" class="footer_item_link">Chính sách trả hàng</a>
                            </li>
                            <li class="footer_item">
                                <a href="" class="footer_item_link">Chính sách thanh toán</a>
                            </li>
                        </ul>
                    </div>                    
                    <div class="support">                        
                        <ul class="footer_list">
                        <h3 class="footer_name">Địa chỉ cửa hàng - Liên hệ</h3>
                            <li class="footer_item">
                                <a href="" class="footer_item_link">Thông tin liên hệ</a>
                            </li>
                            <li class="footer_item">
                                <a href="" class="footer_item_link">Hệ thống cửa hàng</a>
                            </li>
                            <li class="footer_item">
                                <a href="" class="footer_item_link">Giới thiệu</a>
                            </li>
                            <li class="footer_item">
                                <a href="" class="footer_item_link">Tuyển dụng</a>
                            </li>
                            <li class="footer_item">
                                <a href="" class="footer_item_link">Tin tức</a>
                            </li>
                        </ul>
                    </div>                    
                    <div class="support">                        
                        <ul class="footer_list">
                        <h3 class="footer_name">Cộng đồng</h3>
                            <li class="footer_item">
                                <a href="" class="footer_item_link">
                                <i class="fa-solid fa-location-dot"></i>
                                    Địa Chỉ Cửa Hàng
                                </a>
                            </li>
                            <li class="footer_item">
                                <a href="" class="footer_item_link">
                                <i class="fa-solid fa-phone"></i>
                                    (028) 36.222.000
                                </a>
                            </li>
                            <li class="footer_item">
                                <a href="" class="footer_item_link">
                                <i class="fa-brands fa-facebook"></i>
                                    Fashionable Việt Nam
                                </a>
                            </li>
                            <li class="footer_item">
                                <a href="" class="footer_item_link">
                                <i class="fa-brands fa-youtube"></i>
                                    Fashionable Media
                                </a>
                            </li>
                            <li class="footer_item">
                                <a href="" class="footer_item_link">
                                <i class="fa-brands fa-twitter"></i>
                                    Fashionable Hội
                                </a>
                            </li>
                            <li class="footer_item">
                                <a href="" class="footer_item_link">
                                <i class="fa-brands fa-instagram"></i>
                                fashionable.1984</a>
                            </li>
                            <li class="footer_item">
                                <a href="" class="footer_item_link">
                                <i class="fa-brands fa-tiktok"></i>
                                    Tiktok
                                </a>
                            </li>
                        </ul>
                    </div>    
                    <div class="support">
                        <ul class="footer_list">
                            <li class="item-logo">
                                <a href="" class="footer_item_link"><img class="logo-img" src="assest\img\logo-bct.png" alt=""></a>
                            </li>
                            <li class="item-logo">
                                <span class="text_item-name">LIÊN HỆ HỢP TÁC VÀ MUA HÀNG: thi@fashionable.com.vn</span>
                            </li>
                            <li class="item-logo">
                                <span class="text_item-name">LIÊN HỆ KINH DOANH ĐẠI LÝ:tu@fashionable.com.vn</span>
                            </li>
                        </ul>
                    </div>                
                </div> 
            </div>
            <div class="end">
                <div class="all_end">
                    <div class="copyright">
                        <span class="copyright_name">Copyright © 2020 <b>The BS.</b> All rights reserved.</span>
                    </div>
                    <div class="rule_private">
                        <span class="rule">Chính sách quy định</span>
                        <span class="private">Chính sách bảo mật</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>



