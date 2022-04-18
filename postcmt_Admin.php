<?php 
    if(isset($_POST['up'])){
        include('Control.php');
    	$get_Data = new Data();

        $blog_id = $_GET['blog_id'];
        $user_id = $_GET['user_id'];
        $content = $_POST['cmt'];

        $run = $get_Data->insertCMT($content,$user_id,$blog_id);
        if($run){
            $path = "location: ctPost_Admin.php?post_id=".$blog_id;
            header($path);
            exit();
        }
    }
?>