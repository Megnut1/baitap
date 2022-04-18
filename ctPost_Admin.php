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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php 
include('header_admin.php');
?>
	<div id="contents">
		<div class="post">
            <?php 
                if(isset($_GET['post_id'])){
                    $blogid = $_GET['post_id'];
                    $run = $get_Data->getBlogById($blogid);
                    $listBL = mysqli_fetch_array($run);
                    echo '
                    <div class="date">
                        <p>
                            <span>'.date("m",strtotime($listBL["createByDate"])).'</span>
                            '.date("Y",strtotime($listBL["createByDate"])).'
                        </p>
                    </div>
                    <h1>'.$listBL["title"].'<span class="author">'.$listBL["author"].'</span></h1>
                    <p style = "line-height: 40px; text-indent: 50px; text-align: justify;
                    text-justify: inter-word;">'.$listBL["longContent"].'</p>
                    <span><a href="post_Admin.php?id='.$_GET['post_id'].'" class="more">Back to News</a></span>
                    ';
                }
            ?>
		</div>
        
        <div class="post" style="margin-top:20px;">
            <?php
                $runcmt = $get_Data->getCMTById($_GET['post_id']);
                if($run->num_rows>0){
                    while($cmt= mysqli_fetch_assoc($runcmt)){
                        echo '
                            <h3>'.$get_Data->getUserName($cmt['user_id']).'<h3>
                            <p>'.$cmt['content'].'</P>
                        '.'<br/>';
                    }
                }    
            ?>
        </div>
	</div>
<?php 
include('footer.php');
?>
</body>
</html>