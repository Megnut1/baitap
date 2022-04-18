<?php
session_start();
// if (!isset($_SESSION['username'])) {
//     header("location: login.php");
// }
include('Control.php');
$get_Data = new Data();

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Post - Zerotype Website Template</title>
	<link rel="stylesheet" href="css/text.css" type="text/css">
	<link rel="stylesheet" href="css/header.css" type="text/css">
	<link rel="stylesheet" href="css/body.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php 
include('header.php');
?>
	<div id="contents">
        <div class="card-post">
            <div class="post1">
                
                <?php 
                    if(isset($_GET['post_id'])){
                        $blogid = $_GET['post_id'];
                        $run = $get_Data->getBlogById($blogid);
                        $listBL = mysqli_fetch_array($run);
                        echo '
                        <div class="datept">
                            <div class="date-post">
                                <span>'.date("m",strtotime($listBL["createByDate"])).'</span>
                                '.date("Y",strtotime($listBL["createByDate"])).'
                            </div>
                            <div class="title-author-post">
                                <div class="title-post">
                                    <h5>'.$listBL["title"].'</h5>
                                </div>
                                <div class="author-post">
                                    <span class="author">Tác giả: '.$listBL["author"].'</span>
                                </div>
                            </div>
                        </div>
                        <div class="long-post">
                            <p>'.$listBL["longContent"].'</p>
                        </div>
                        <div class="back">
                            <span><a href="news.php"  class="more">Back to News</a></span>
                        </div>
                        ';
                    }
                ?>
            </div>
            <div class="post" style="margin-top:40px;">
                <form method="POST" action="postcmt.php?blog_id=<?php echo $_GET['post_id']?>">
                    <textarea name="cmt" rows="9" cols="60"></textarea>
                    <br>
                    <input type="submit" name="up" value="Comment"/>
                </form>
            </div>
            <div class="post" >
                <?php
                    $runcmt = $get_Data->getCMTById($_GET['post_id']);
                    if($run->num_rows>0){
                        while($cmt= mysqli_fetch_assoc($runcmt)){
                            echo '
                                <h3>'.$get_Data->getUserName($cmt['user_id']).'<h3>
                                <p style="font-weight: normal;font-size:14px;">'.$cmt['content'].'</P>
                            '.'<br/>';
                        }
                    }    
                ?>
            </div>
        </div>
	</div>
<?php 
include('footer.php');
?>
</body>
</html>