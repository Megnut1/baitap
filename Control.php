<?php
	include('DBConnection.php');
Class Data{
		public function Register($username,$password,$email){
			global $conn;
			$sql = "insert into user(username, password, email, image,role) values ('$username','$password','$email','avatar.png',1)";
			$run = mysqli_query($conn,$sql);
			return $run;
		}

		public function checkUserName($username){
			global $conn;
			$sql = "select username,password from user where username = '$username'";
			$run = mysqli_query($conn,$sql);
			$result = mysqli_num_rows($run);
			return $result;

		}

		public function checkEmail($email){
			global $conn;
			$sql = "select email from user where email='$email'";
			$run = mysqli_query($conn,$sql);
			$result = mysqli_num_rows($run);
			return $result;
		}

		public function getPassword($username){
			global $conn;
			$sql = "select username,password from user where username = '$username'";
			$list = mysqli_fetch_array(mysqli_query($conn,$sql));
			$password = $list['password'];
			return $password;
		}

		public function getRoles($username,$password){
			global $conn;
			$sql = "select role from user where username = '$username' and password = '$password'";
			$list = mysqli_fetch_array(mysqli_query($conn,$sql));
			$role = $list['role'];
			return $role;
		}

		public function getAvatar($userid){
			global $conn;
			$sql = "select image from user where user_id = ".$userid;
			$list = mysqli_fetch_array(mysqli_query($conn,$sql));
			$image = $list['image'];
			return $image;
		}

		public function uploadImage($nameFile,$id){
			global $conn;
			$sql = "update user set image = '$nameFile' where user_id = ".$id;
			$run = mysqli_query($conn,$sql);
			return $run;
		}

		public function listProfile($id){
			global $conn;
			$sql = "select * from user where user_id = ".$id;
			$list = mysqli_fetch_array(mysqli_query($conn,$sql));
			return $list;
		}

		public function updateProfile($email,$phone, $address,$birthday,$id){
			global $conn;
			$sql = "update user set email = '$email', phoneNumber = '$phone', address = '$address', birthday = '$birthday' where user_id = ".$id;
			$run = mysqli_query($conn,$sql);
			return $run;
		}

		public function getId($username,$password){
			global $conn;
			$sql = "select user_id from user where username = '$username' and password = '$password'";
			$list = mysqli_fetch_array(mysqli_query($conn,$sql));
			$id = $list['user_id'];
			return $id;
		}
		
		public function getAllNews(){
			global $conn;
			$sql = "select * from blog where status_blog = 1 order by  blog_id desc";
			$run = mysqli_query($conn,$sql);
			return $run;
		}

		public function countRows(){
			global $conn;
			$sql = "select * from blog where status_blog = 1";
			$run = mysqli_query($conn,$sql);
			$rowcount = mysqli_num_rows($run);
			return $rowcount;
		}

		public function countRows_Queue(){
			global $conn;
			$sql = "select * from blog where status_blog = 0";
			$run = mysqli_query($conn,$sql);
			$rowcount = mysqli_num_rows($run);
			return $rowcount;
		}

		public function getTop(){
			global $conn;
			$sql="select * from blog where status_blog = 1 order by createByDate desc limit 2";
			$run = mysqli_query($conn,$sql);
			return $run;
		}

		public function getBlogById($blog_id){
			global $conn;
			$sql = "select * from blog where blog_id =".$blog_id;
			$run = mysqli_query($conn,$sql);
			return $run;
		}

		public function insertCMT($content,$userId,$blogId){
			global $conn;
			$sql = "insert into commentsection(content, user_id, blog_id) values ('$content','$userId','$blogId')";
			$run = mysqli_query($conn,$sql);
			return $run;
		}

		 public function getCMTById($blogId)
		{
			global $conn;
			$sql = "select * from commentsection where blog_id = ".$blogId;
			$run = mysqli_query($conn,$sql);
			return $run;
		}

		public function getUserName($userId){
			global $conn;
			$sql = "select username from user where user_id = ".$userId;
			$list = mysqli_fetch_array(mysqli_query($conn,$sql));
			$name = $list['username'];
			return $name;
		}

		public function getUserNameByEmail($email){
			global $conn;
			$sql = "select username from user where email = '$email'";
			$list = mysqli_fetch_array(mysqli_query($conn,$sql));
			$name = $list['username'];
			return $name;
		}

		public function insertCode($code,$email){
			global $conn;
			$sql = "insert into validate(code, email) VALUES ('$code','$email')";
			$run = mysqli_query($conn,$sql);
			return $run;
		}

		public function getCodeByEmail($email){
			global $conn;
			$sql = "select code from validate where email = '$email'";
			$list = mysqli_fetch_array(mysqli_query($conn,$sql));
			$code = $list['code'];
			return $code;
		}

		public function deleteCodeByEmail($email){
			global $conn;
			$sql = "delete from validate where email = '$email'";
			mysqli_query($conn,$sql);
		}

		public function getIdByEmail($email){
			global $conn;
			$sql = "select user_id from user where email = '$email'";
			$list = mysqli_fetch_array(mysqli_query($conn,$sql));
			$id = $list['user_id'];
			return $id;
		}

		public function updatePasswordById($password,$id){
			global $conn;
			$sql = "update user set password = '$password' where user_id = '$id'";
			$run = mysqli_query($conn,$sql);
			return $run;
		}

		public function Old_getDataPagination($limit, $offset){
			global $conn;
			$sql = "select blog_id,title,shortContent,longContent,createByDate,author, status_blog from blog where status_blog = 1 limit $limit offset $offset ";
			$run = mysqli_query($conn,$sql);
			return $run;
		}

		public function Que_getDataPagination($limit, $offset){
			global $conn;
			$sql = "select blog_id,title,shortContent,longContent,createByDate,author, status_blog from blog where status_blog = 0 limit $limit offset $offset ";
			$run = mysqli_query($conn,$sql);
			return $run;
		}

		public function deleteBlog($id){
			global $conn;
			$sql = "delete from blog where blog_id =".$id;
			mysqli_query($conn,$sql);
		}

		public function getAllCategory(){
			global $conn;
			$sql = "select * from category";
			$run = mysqli_query($conn,$sql);
			return $run;
		}

		public function insertBlog($title,$scontent,$lcontent,$date,$category,$author){
			global $conn;
			$sql = "insert into blog(title, shortContent, longContent, createByDate, category_id, author) VALUES ('$title','$scontent','$lcontent','$date',$category,'$author')";
			$run = mysqli_query($conn,$sql);
			return $run;
		}

		public function insertBlog_user($title,$scontent,$lcontent,$date,$category,$author){
			global $conn;
			$sql = "insert into blog(title, shortContent, longContent, createByDate, category_id, author, status_blog) VALUES ('$title','$scontent','$lcontent','$date',$category,'$author', 0)";
			$run = mysqli_query($conn,$sql);
			return $run;
		}

		public function getBlogByIdS($blog_id){
			global $conn;
			$sql = "select * from blog where blog_id = ".$blog_id;
			$run = mysqli_query($conn,$sql);
			return $run;
		}

		public function updateBlogById($blog_id,$title,$scontent,$lcontent,$date,$category,$author){
			global $conn;
			$sql = "UPDATE blog set title='$title', shortContent = '$scontent', longContent = '$lcontent', 
			createByDate = '$date', author = '$author', category_id = $category WHERE blog_id = ".$blog_id;
			$run = mysqli_query($conn,$sql);
			return $run;
		}
		public function public_Post($blog_id,$title,$scontent,$lcontent,$date,$category,$author){
			global $conn;
			$sql = "UPDATE blog SET title='$title', shortContent = '$scontent', longContent = '$lcontent', createByDate = '$date', 
			author = '$author', category_id = $category, status_blog = 1 WHERE blog_id = ".$blog_id;
			$run = mysqli_query($conn,$sql);
			return $run;
		}
		public function IN_CONTACT ($name, $email, $subject, $note) {
			global $conn;
			$sql = "INSERT INTO tb_contact(name, email, subject, note) VALUES ('$name', '$email', '$subject', '$note')";
			$run = mysqli_query($conn, $sql);
			return $run;
		}
		public function delete_Post($id) {
			global $conn;
			$sql = "DELETE FROM blog WHERE blog_id = '$id'";
			$result = mysqli_query($conn, $sql);
			return $result;
		}
		public function insertcategory($category_name){
			global $conn;
			$sql = "insert into category(category_name) values ('$category_name')";
			$run = mysqli_query($conn,$sql);
			return $run;
		}
		public function select_category(){
			global $conn;
			$sql = "select * from category";
			$run = mysqli_query($conn,$sql);
			return $run;
		}
		public function delete_category($id) {
			global $conn;
			$sql = "DELETE FROM category WHERE category_id = '$id'";
			$result = mysqli_query($conn, $sql);
			return $result;
		}
		public function select_one_category($id){
			global $conn;
			$sql = "select * from category where category_id ='$id'";
			$run= mysqli_fetch_array(mysqli_query($conn,$sql));
			return $run;
		}
		public function update_cate($id,$name){
			global $conn;
			$sql = "UPDATE category SET category_name='$name' WHERE category_id = ".$id;
			$run = mysqli_query($conn,$sql);
			return $run;
		}
		public function select_category_blog($id){
			global $conn;
			$sql = "select * from blog where status_blog=1 && category_id=".$id;
			$run = mysqli_query($conn,$sql);
			return $run;
		}
		public function select_covid_blog(){
			global $conn;
			$sql = "select * from blog where status_blog=1 && category_id=8";
			$run = mysqli_query($conn,$sql);
			return $run;
		}
		public function listuser(){
			global $conn;
			$sql = "select * from user where role = 1";
			$list = mysqli_query($conn,$sql);
			return $list;
		}
		public function delete_cmt($id){
			global $conn;
			$sql="DELETE FROM commentsection where user_id=$id";
			$result = mysqli_query($conn, $sql);
			return $result;
		}
		public function delete_user($id){
			global $conn;
			$sql="DELETE FROM user where user_id=$id";
			$result = mysqli_query($conn, $sql);
			return $result;
		}
		public function select_cmt(){
			global $conn;
			$sql="select * FROM commentsection as c join user as u on c.user_id=u.user_id";
			$result = mysqli_query($conn, $sql);
			return $result;
		}
		public function delete_cmt_id($id){
			global $conn;
			$sql="DELETE FROM commentsection where cm_id=$id";
			$result = mysqli_query($conn, $sql);
			return $result;
		}

		public function select_Post_id($id){
			global $conn;
			$sql = "select * from blog where blog_id ='$id'";
			$run= mysqli_fetch_array(mysqli_query($conn,$sql));
			return $run;
		}
		public function delete_blog($id) {
			global $conn;
			$sql = "DELETE FROM blog WHERE category_id = '$id'";
			$result = mysqli_query($conn, $sql);
			return $result;
		}

	}
 ?>
