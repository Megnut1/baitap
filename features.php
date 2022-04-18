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
	<title>News - Zerotype Website Template</title>
	<link rel="stylesheet" href="css/text.css" type="text/css">
	<link rel="stylesheet" href="css/header.css" type="text/css">
	<link rel="stylesheet" href="css/body.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php 
include('header.php');
?>
	<div id="contents">  
		<div class="feature">
			<h1>Bản tin COVID</h1>      
			<br/>
			<ul class="newsf">
				<?php 
					$run = $get_Data->select_covid_blog();
					$count = mysqli_num_rows($run);
					if($count>0){
						while($row = mysqli_fetch_assoc($run)){
							echo '
								<li>
									<div class="card-newf">
										<div class="newtimef">
											<div class="datef">
												<span>'.date("m",strtotime($row["createByDate"])).'
												'.date("Y",strtotime($row["createByDate"])).'</span>
											</div>
											<div class="title-authorf">
												<div class="titlef">
													<h4>'.$row["title"].'</h4>
												</div>
												<div class="authorf">
													<span>Tác giả: '.$row["author"].'</span>
												</div>
											</div>
										</div>
										<div class="infomationf">
											<p>
												'.$row["shortContent"].'<span><a href="post.php?post_id='.$row["blog_id"].'" class="more">Read More</a></span>
											</p>
										</div>
									</div>
								</li>
							';
						}
					
					}
					else {
						echo'<h1>Chưa có bài viết</h1>';
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