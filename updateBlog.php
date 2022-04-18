<?php
    if(isset($_POST['up'])){
        include('Control.php');
        $get_Data = new Data();

        $blog_id = $_GET['blog_id'];
        $title = $_POST['title'];
        $category = $_POST['category'];
        $scontent = $_POST['scontent'];
        $lcontent = $_POST['lcontent'];
        $date = $_POST['date'];
        $author = $_POST['author'];

        if(empty($title)||empty($scontent)||empty($lcontent)||empty($author)||empty($date)){
            header("location: saveOrUpdate.php?erorr=emptyfields");
            exit();
        }else{
            if($get_Data->updateBlogById($blog_id,$title,$scontent,$lcontent,$date,$category,$author)){
                header('location:admin.php?page=1');
                exit();
            }else{
                header("location: saveOrUpdate.php?erorr=inserterorr");
                exit();
            }
        }



    }
?>