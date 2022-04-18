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
		<form class="formnew" action="news.php">
		<select name="id" >
		<option value="0"  >Tất cả </option>
			<?php $load_cate=$get_Data->select_category();
			foreach ($load_cate as $cate):
			?>
			<option value="<?php echo $cate['category_id'] ?>" <?php if(isset($_GET['id'])){if (($cate['category_id'])==($_GET['id'])){ echo 'selected';}} ?> ><?php echo $cate['category_name'] ?></option>
			<?php endforeach;?>
	
		</select>
		<input class="submit" type="submit" value="Lọc">
		</form>
		<div class="card-news">    
			<div class="main">
				<br/>
				<h1>Bài viết</h1> 
				<ul class="news">
					<?php 
					if (isset($_GET['id'])&&($_GET['id'])>0) {
						$run = $get_Data->select_category_blog($_GET['id']);
						$count = mysqli_num_rows($run);
						if($count>0){
							while($row = mysqli_fetch_assoc($run)){
								echo '
								<li>
								<div class="card-new">
									<div class="newtime">
										<div class="date">
											<span>'.date("m",strtotime($row["createByDate"])).'
											'.date("Y",strtotime($row["createByDate"])).'</span>
										</div>
										<div class="title-author">
											<div class="title">
												<h5>'.$row["title"].'</h5>
											</div>
											<div class="author">
												<span>Tác giả: '.$row["author"].'</span>
											</div>
										</div>
									</div>
									<div class="infomation">
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
							echo'
								<div class="emty">
									<h3>Thể loại này chưa có tin</h3>
								</div>
							';
						}
					}
					else{
						$count = $get_Data->countRows();
						$run = $get_Data->getAllNews();
						if($count > 0){
							while($row = mysqli_fetch_assoc($run)){
								echo '
									<li>
										<div class="card-new">
											<div class="newtime">
												<div class="date">
													<span>'.date("m",strtotime($row["createByDate"])).'
													'.date("Y",strtotime($row["createByDate"])).'</span>
												</div>
												<div class="title-author">
													<div class="title">
														<h3>'.$row["title"].'</h3>
													</div>
													<div class="author">
														<span>Tác giả: '.$row["author"].'</span>
													</div>
												</div>
											</div>
											<div class="infomation">
												<p>
													'.$row["shortContent"].'<span><a href="post.php?post_id='.$row["blog_id"].'" class="more">Read More</a></span>
												</p>
											</div>
										</div>
									</li>
								';
							}
						}
					}
					?>
				</ul>
			</div>
			<div class="sidebar">
				<h1>Tin mới </h1>
				<ul class="posts">
					<?php 
						$sTop = $get_Data->getTop();
						if($sTop->num_rows>0){
							while($select= mysqli_fetch_assoc($sTop)){
								echo '<li>
								<h4 class="title"><a href="post.php?post_id='.$select["blog_id"].'">'.$select["title"].'</a></h4>
								<p>'.$select["shortContent"].'</p>
							</li>';
							}
						}
					?>
				</ul>
			</div>
		</div> 
	</div>
<?php 
include('footer.php');
?>
</body>
</html>