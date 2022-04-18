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
	<title>Forgot password</title>
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
    <h2 style="text-align: center; margin-top:150px;">Quên mật khẩu</h2>
    <?php
        
        if(isset($_GET['erorr'])){
            $err = $_GET['erorr'];
            if($err == "emptyfields"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Vui lòng điền đầy đủ thông tin".'</h6>';
            }elseif($err == "emailexits"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Email không tồn tại".'</h6>';
            }elseif($err == "emailisnotsent"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Không thể gửi được mã xác nhận".'</h6>';
            }
        }
    ?>

    <div class="row" style="margin-bottom:140px;">
        <form class="login100-form validate-form" method="POST" action="ac_forgotpass.php">
            <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                <span class="label-input100">Email</span>
                <input class="input100" type="email" name="email" placeholder="Nhập địa chỉ email">
                <span class="focus-input100"></span>
            </div>
            <div class="container-login100-form-btn">
                <input type="submit" value="Forgot password" name="fg" class="login100-form-btn">
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