<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
}
include('Control.php');
$get_Data = new Data();

$total_rows = $get_Data->countRows_Queue();
if(!isset($_GET['page'])){
    $page_number = 1;
}else{
    $page_number = $_GET['page']; 
}
$limit = 5;
$initial_page = ($page_number-1)*$limit;
$total_pages = ceil($total_rows/$limit);
 $arr =$get_Data->select_category();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Admin - Zerotype Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/text.css" type="text/css">
    <link rel="stylesheet" href="css/bodyadmin.css" type="text/css">
    <link rel="stylesheet" href="css/paginationpage.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>
<?php 
include('header_admin.php');
?>
<div class="header" style="text-align: center;">
    <h3>Posts are waiting....</h3>
</div>
	<div id="contents"> 
         <?php
			if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
		?>
    <a  href="add_category.php" role="button">
				 Thêm mới
				</a>
     
        <table class="table">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>UPDATE</th>
                <th>Delete</th>
            </tr>
            <?php foreach($arr as $ar){ ?>
                <tr>
                    <td><?php echo $ar['category_id'] ?></td>
                    <td><?php echo $ar['category_name'] ?></td>
                    <td><a href="update_cate.php?id=<?php echo $ar['category_id'] ?>"><i class="fal fa-edit"></i></td>
                    <td style="text-align: center;"><a href="delete_category.php?id=<?php echo $ar['category_id']?>" onclick="return (confirm('You may want to delete?'))"><i class="fas fa-times"></i></a></td>

                </tr>
            <?php } ?>


        </table>

        <!--  -->
	</div>
<?php 
include('footer.php');
?>
</body>
</html>