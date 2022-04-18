<?php
use Vtiful\Kernel\Format;
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
}
include('Control.php');
$get_Data = new Data();
$CateLists = $get_Data->getAllCategory();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Post - Zerotype Website Template</title>
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
		<?php
		    if(isset($_GET['erorr'])){
            $err = $_GET['erorr'];
            if($err == "emptyfields"){
                echo '<h3 style="text-align: center; margin-top:50px;  ">'."Vui lòng điền đầy đủ thông tin".'</h3>';
            }elseif($err =="inserterorr"){
				echo '<h3 style="text-align: center; margin-top:50px;  ">'."Thêm bài viết thất bại".'</h3>';
			}
        }
		?>
		
        <div class="Upload">
			<?php if(!isset($_GET['blog_id'])){ ?>
				<form action="saveBlog_user.php" method="POST" class="upload-mess">
					<input type="text" placeholder="Nhập tiêu đề" name="title"/>
					<br/>
					<br/>
					<label>Chọn thể loại</label>
					<select name="category">
						<?php foreach($CateLists as $item){ ?>
							<option value="<?php echo $item['category_id']; ?>"><?php echo $item['category_name'] ?></option>
						<?php } ?>
					</select>
					<br/>
					<br/>
					<textarea placeholder="Nhập nội dung ngắn" name="scontent"></textarea>
					<textarea placeholder="Nhập đầy đủ nội dung" name="lcontent"></textarea>
									<script>
                                    CKEDITOR.replace('lcontent',{
	filebrowserBrowseUrl: 'public/ckfinder/ckfinder.html',
	filebrowserUploadUrl: 'public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
});
                                    </script>
					<input type="date" name="date"/>
					<br/>
					<br/>
					<input type="text" placeholder="Tên tác giả" name="author"/>
					<input type="submit" value="Lưu" name="up" class="send-up"/>
				</form>
			<?php }else{ 
				$blogId = $_GET['blog_id'];	
				$Items = $get_Data->getBlogByIdS($blogId);
				

			?>
				<form action="updateBlog.php?blog_id=<?php echo $blogId ?>" method="POST" class="message">
					<?php foreach($Items as $item){ ?>
					<input type="text" placeholder="Nhập tiêu đề" name="title" value="<?php echo $item['title'] ?>"/>
					<br/>
					<br/>
					<label>Chọn thể loại</label>
					<select name="category">
						<?php foreach($CateLists as $cate){ ?>
							<option value="<?php echo $cate['category_id']; ?>" <?php if($item['category_id']==$cate['category_id']){ echo 'selected="selected"';} ?>><?php echo $cate['category_name'] ?></option>
						<?php } ?>
					</select>
					<br/>
					<br/>
					<textarea placeholder="Nhập nội dung ngắn" name="scontent" ><?php echo $item['shortContent'] ?></textarea>
					<textarea placeholder="Nhập đầy đủ nội dung" id="lcontent" name="lcontent" > <?php echo $item['longContent'] ?></textarea>
					<script>
                                    CKEDITOR.replace('lcontent');
                                    </script>
					<input type="date" name="date" value="<?php echo date("Y-m-d",strtotime($item['createByDate']))?>"/>
					<br/>
					<br/>
					<input type="text" placeholder="Tên tác giả" name="author"  value="<?php echo $item['author'] ?>"/>
					<input type="submit" value="Cập nhật" name="up"/>
					<?php }?>
				</form>
			
			<?php }?>

		</div>
	</div>
<?php 
include('footer.php');
?>
</body>
</html>