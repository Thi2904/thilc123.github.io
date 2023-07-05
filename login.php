<?php
if(isset($_GET['err'])){
    $err = $_GET['err'];
    if($err == 'invalid'){
        echo "<script> alert('Mật khẩu không trùng rồi nhập lại đi bạn ơi')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="new.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assest/font/fontawesome-free-6.4.0-web/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <input type="checkbox" id="click">
    <div class="main-container">
        <div class="form-container">
            <div class="sign-in">
                <form action="sign_in.php" method="post">
                    <h1>Sign In</h1>
                    <div class="social-container">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or your account</span>
                    <input type="text" placeholder="Username" name="username">
                    <input type="password" placeholder="Password" name="password" required>
                    <a href="#" class="forgot-pass">Forgot your password?</a>
                    <button name="sign_in">Sign In</button>
                    <?php
                    session_start();
                    if (isset($_GET['error'])) {
                        $error = $_GET['error'];
                        echo $error;
                    }
                    ?>
                </form>
            </div>
            <div class="sign-up">
                <form action="sign_up.php" method="post">
                    <h1>Create Account</h1>
                    <div class="social-container">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or your email for registration</span>
                    <input type="text" name="username" placeholder="Username">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <input type="password" name="re_password" placeholder="Re-Password">
                    <button name="sign_up">Sign Up</button>
                </form>
                <?php
                if (isset($_GET['error'])) {
                    $error = $_GET['error'];
                    echo $error;
                }
                ?>
            </div>

            <div class="slide-container">
                <div class="slide-panel">
                    <div class="slide-left">
                        <h1>Hello, Friend</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <label for="click" class="slide">Sign Up</label>
                    </div>
                    <div class="slide-right">
                        <h1>Welcome back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <label for="click" class="slide">Sign In</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>