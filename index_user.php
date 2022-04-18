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
 $arr =$get_Data->listuser();
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

    <a  href="add_category.php" role="button">
				 Thêm mới
				</a>
     
        <table class="table">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>ADDRESS</th>
                <th>BIRTHDAY</th>
                <th>Delete</th>
            </tr>
            <?php foreach($arr as $ar){ ?>
                <tr>
                    <td><?php echo $ar['user_id'] ?></td>
                    <td><?php echo $ar['username'] ?></td>
                    <td><?php if ($ar['email']=="") {
                       echo 'chưa cập nhật';
                    }else echo $ar['email'] ?></td>
                    <td><?php if ($ar['address']=="") {
                       echo 'chưa cập nhật';
                    }else echo $ar['address'] ?></td>
                    <td><?php if ($ar['birthday']=="") {
                       echo 'chưa cập nhật';
                    }else echo $ar['birthday'] ?></td>
                    
                    <td style="text-align: center;"><a href="delete_user.php?id=<?php echo $ar['user_id']?>" onclick="return (confirm('You may want to delete?'))"><i class="fas fa-times"></i></a></td>

                </tr>
            <?php } ?>


        </table>

        <div class="pagination">
            <ul>
                <?php 
                    if($page_number>=2){
                        echo '<li><a href="admin.php?login=success&page='.($page_number-1).'">'.'<i class="fa fa-backward" aria-hidden="true"></i>'.'</a></li>';
                    }else{
                        echo '<li><a href="#">'.'<i class="fa fa-backward" aria-hidden="true"></i>'.'</a></li>';
                    }
                    for($i=1;$i<=$total_pages;$i++){ 
                        echo '<li><a href="admin.php?login=success&page='.$i.'">'.$i.'</a></li>';
                    }
                    if($page_number<$total_pages){
                        echo '<li><a href="admin.php?login=success&page='.($page_number+1).'">'.'<i class="fa fa-forward" aria-hidden="true"></i>'.'</a></li>';
                    }else{
                        echo '<li><a href="#">'.'<i class="fa fa-forward" aria-hidden="true"></i>'.'</a></li>';
                    }
                ?>
            </ul>
        </div>
	</div>
<?php 
include('footer.php');
?>
</body>
</html>