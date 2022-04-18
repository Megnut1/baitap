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
	<title>Xác nhận mật khẩu</title>
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
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Vui lòng điền mã xác nhận".'</h6>';
            }elseif($err == "codefailed"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Xác nhận thất bại!".'</h6>';
            }
        }

    ?>
    <h4 style="text-align: center; margin-top:50px;"><?php echo (isset($_GET['email']))?'Mã xác nhận được gửi đến '.$_GET['email']:'' ?></h4>
    <div class="row" style="margin-bottom:140px;">
        <form class="login100-form validate-form" method="POST" action="ac_validateCode.php?email=<?php echo $_GET['email'] ?>">
            <div class="wrap-input100 validate-input m-b-26">
                <span class="label-input100">Mã xác nhận</span>
                <input class="input100" type="text" name="code" placeholder="Nhập mã xác nhận">
                <span class="focus-input100"></span>
            </div>
            <div class="container-login100-form-btn">
                <input type="submit" value="Xác nhận" name="xn" class="login100-form-btn">
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