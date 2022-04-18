<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
}
include('Control.php');
$get_Data = new Data();

?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>Post - Zerotype Website Template</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/text.css" type="text/css">

    <link rel="stylesheet" href="css/paginationpage.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css">
</head>

<body>
    <?php
    include('header_admin.php');
    ?>
    
    <div id="contents">
        
        <?php
        if (isset($_POST['add_category'])) {
         
            $name = $_POST['name'];
            $run = $get_Data->insertcategory($name);
            $thongbao="thêm thành công";
        }
        ?>
       
        <form method="POST" class="message">
        
            <input type="text" placeholder="Tên thể loại" name="name" value="" />
            <input type="submit" name="add_category" value="Thêm"  />

        </form>
        <?php
			if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
		?>
        


    </div>
    
    <?php
    include('footer.php');
    ?>
</body>
</html>