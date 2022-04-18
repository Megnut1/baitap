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
	<title>News - Zerotype Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- <link rel="stylesheet" href="./css/header.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php 
include('header_admin.php');
?>
	<div id="contents">        
		<div class="main">
			<h1>Bảng tin</h1>
			<ul class="news">
				<?php 
					$run =$get_Data->select_Post_id($_GET['id']);
							echo '
								<li>
									<div class="date">
										<p>
											<span>'.date("m",strtotime($run["createByDate"])).'</span>
											'.date("Y",strtotime($run["createByDate"])).'
										</p>
									</div>
									<h2>'.$run["title"].'<span>'.$run["author"].'</span></h2>
									<p>
										'.$run["shortContent"].'<span><a href="ctPost_Admin.php?post_id='.$run["blog_id"].'" class="more">Read More</a></span>
									</p>
									<span><a href="admin.php" class="more">Back to Manager</a></span>
								</li>
							';
				?>
			</ul>
		</div>
	</div>
<?php 
include('footer.php');
?>
</body>
</html>