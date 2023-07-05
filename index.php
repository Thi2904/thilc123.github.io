<?php
session_start();

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
        <div class="app__container">
            <div class="nav_roll">
                <ul class="nav_roll-list">
                    <li class="nav_roll_item">
                        <a href="show_cart.php" class="link_cart">
                            <span class="nav_roll-name">
                                Giỏ hàng
                            </span>
                            <i class="nav_roll_icon fa-solid fa-cart-shopping"></i>
                        </a>
                    </li>                    
                    <li class="nav_roll_item">
                        <a href="" class="link_phone">
                            <span class="nav_roll-name">
                                Điện thoại
                            </span>
                            <i class="nav_roll_icon fa-solid fa-phone"></i>
                        </a>
                    </li>
                    <li class="nav_roll_item">
                        <a href="" class="link_mess">
                             <span class="nav_roll-name">
                                Tin nhắn
                            </span>
                            <i class="nav_roll_icon fa-brands fa-facebook-messenger"></i>
                        </a>
                    </li>
                    <li class="nav_roll_item">
                        <a href="" class="link_twit">
                            <span class="nav_roll-name">
                                Twitter
                            </span>
                            <i class="nav_roll_icon fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav_roll_item">                            
                        <a class="nav_roll-link" href="javascript:void(0)" onclick="jQuery('html,body').animate({scrollTop: 0},1000);">

                            <i class="nav_roll_icon_mx fa fa-angle-up"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="img">
                <a href="#" class="img__link">
                    <img src="assest/img/dc174fbdf1ca2f9476db.jpg" alt="" height="100%" width="100%">
                </a>
            </div>
            <div class="slidebar">
                <h3 class="slidebar__name">
                    SẢN PHẨM MỚI
                </h3>
                <div class="slidebar_content">
                    <a href="product__show.php" class="slidebar_content_link">
                        <img src="assest\img\aopolos.jpg" alt="" class="slidebar_content_img">
                    </a>
                    <a href="product__show.php" class="slidebar_content_link">
                        <img src="assest\img\jean.jpg" alt="" class="slidebar_content_img">
                    </a>
                    <a href="product__show.php" class="slidebar_content_link">
                        <img src="assest\img\aosomi.jpg" alt="" class="slidebar_content_img">
                    </a>
                    <a href="product__show.php" class="slidebar_content_link">
                        <img src="assest\img\aothun.jpg" alt="" class="slidebar_content_img">
                    </a>
                    <a href="product__show.php" class="slidebar_content_link">
                        <img src="assest\img\aokhoac.jpg" alt="" class="slidebar_content_img">
                    </a>
                </div>
            </div>
            <div class="product">
                <h4 class="product__name">
                    CÁC LOẠI SẢN PHẨM
                </h4>
                <ul class="product__list">
                    <li class="product__item">
                        <a href="product__show.php" class="product__item-link">
                            <img src="assest/img/aothun.jpg" alt="" class="product__item-img">
                        </a>
                        <span class="product__item-name">ÁO THUN</span>
                    </li>                    
                </ul>
            </div>
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