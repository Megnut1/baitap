<?php
    session_start();
    if(isset($_SESSION['username'])){
        header("location: index.php");
    }
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/text.css" type="text/css">
	<link rel="stylesheet" href="css/body.css" type="text/css">
    <link rel="stylesheet" href="css/header.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
 <!--===============================================================================================-->  
 <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
 <!--===============================================================================================-->  
 <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="css/util.css">
 <link rel="stylesheet" type="text/css" href="css/main.css">
 <!--===============================================================================================-->
</head>
<body>
<?php 
include('header.php');
?>

<div id="contents">
    <h2 style="text-align: center; margin-top:100px;">Đăng nhập</h2>
    <?php
        if(isset($_GET['erorr'])){
            $err = $_GET['erorr'];
            if($err == "emptyfields"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Vui lòng điền đầy đủ thông tin".'</h6>';
            }elseif($err == "usernamenotfound"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Tài khoản không tồn tại".'</h6>';
            }elseif($err == "wrongpassword"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Mật khẩu không chính xác".'</h6>';
            }
        }

        if(isset($_GET['register'])){
            $mess = $_GET['register'];
            if($mess == "success"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Đăng ký tài khoản thành công!".'</h6>'; 
            }
        }

        if(isset($_GET['mes'])){
            $mess = $_GET['mes'];
            if($mess == "success"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Lấy lại mật khẩu thành công!".'</h6>'; 
            }
        }
    ?>

    <div class="row" style="margin-bottom:140px;">
        <form class="login100-form validate-form" method="POST" action="ac_login.php">
            <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                <span class="label-input100">Tài khoản</span>
                <input class="input100" type="text" name="username" placeholder="Enter username">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                <span class="label-input100">Mật khẩu</span>
                <input class="input100" type="password" name="password" placeholder="Enter password">
                <span class="focus-input100"></span>
            </div>


            <div class="flex-sb-m w-full p-b-30">

                <div>
                    <a href="forgotPassword.php" class="txt1">
                        Quên mật khẩu
                    </a>
                </div>
                <div>
                	<a href="register.php" class="txt1">
						Đăng ký
                	</a>
                </div>
            </div>

            <div class="container-login100-form-btn">
                <input type="submit" value="Login" name="login" class="login100-form-btn">
            </div>
        </form>
    </div>
</div>

<!-- footer -->
<?php 
include('footer.php');
?>
</body>
</html>