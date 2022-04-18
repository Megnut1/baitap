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
	<title>Đăng ký tài khoản</title>
	<link rel="stylesheet" href="css/header.css" type="text/css">

	<!-- <link rel="stylesheet" href="css/style.css" type="text/css"> -->
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
<!-- Header -->
<?php 
include('header.php');
?>

<div id="contents">
    <h2 style="text-align: center; margin-top:100px;">Đăng ký tài khoản</h2>
    <?php
        if(isset($_GET['erorr'])){
            $err = $_GET['erorr'];
            if($err == "emptyfields"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Vui lòng điền đầy đủ thông tin".'</h6>';
            }elseif($err == "emailexits"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Email tồn tại".'</h6>';
            }elseif($err == "usernameexits"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Tên đăng nhập đã tồn tại".'</h6>';
            }elseif($err == "passwordincorrect"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Mật khẩu không trùng khớp".'</h6>';
            }elseif($err == "isvalidateEmail"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Email không đúng định dạng".'</h6>';
            }elseif($err == "registerfailed"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Đăng ký thất bại".'</h6>';
            }
        }
    ?>
    <div class="row">
        <form class="login100-form validate-form" method="POST" action="ac_register.php">
            <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                <span class="label-input100">Email</span>
                <input class="input100" type="email" name="email" placeholder="Nhập địa chỉ email">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                <span class="label-input100">Tài khoản</span>
                <input class="input100" type="text" name="username" placeholder="Tên đăng nhập">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                <span class="label-input100">Mật khẩu</span>
                <input class="input100" type="password" name="password" placeholder="Nhập mật khẩu">
                <span class="focus-input100"></span>
            </div>


            <div class="wrap-input100 validate-input m-b-18" data-validate = "Confirm Password is required">
                <span class="label-input100">Nhập lại mật khẩu</span>
                <input class="input100" type="password" name="cpassword" placeholder="Nhập lại mật khẩu">
                <span class="focus-input100"></span>
            </div>

            <div class="flex-sb-m w-full p-b-30">

                <div>
                	<a href="login.php" class="txt1">
                		Đã có tài khoản
                	</a>
                </div>
            </div>

            <div class="container-login100-form-btn">
                <input type="submit" value="Đăng ký" class="login100-form-btn" name='res'>
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