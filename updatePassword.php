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
            }elseif($err == "passwordincorrect"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Mật khẩu không trùng khớp".'</h6>';
            }
        }
    ?>

    <div class="row" style="margin-bottom:140px;">
        <form class="login100-form validate-form" method="POST" action="ac_updatepassword.php">
        <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                <span class="label-input100">Mật khẩu mới</span>
                <input class="input100" type="password" name="password" placeholder="Nhập mật khẩu">
                <span class="focus-input100"></span>
            </div>


            <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                <span class="label-input100">Nhập lại mật khẩu</span>
                <input class="input100" type="password" name="cpassword" placeholder="Nhập lại mật khẩu">
                <span class="focus-input100"></span>
            </div>

            <div class="container-login100-form-btn">
                <input type="submit" value="Update" name="uppass" class="login100-form-btn">
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