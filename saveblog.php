<?php
    if(isset($_POST['up'])){
        include('Control.php');
        $get_Data = new Data();

        $title = $_POST['title'];
        $category = $_POST['category'];
        $scontent = str_replace("'", "\'", $_POST['scontent']);
        $lcontent = str_replace("'", "\'", $_POST['lcontent']);
        $date = $_POST['date'];
        $author = $_POST['author'];

        if(empty($title)||empty($scontent)||empty($lcontent)||empty($author)||empty($date)){
            header("location: saveOrUpdate.php?erorr=emptyfields");
            exit();
        }else{
            if($get_Data->insertBlog_user($title,$scontent,$lcontent,$date,$category,$author)){
                echo "<script>alert('Post has been update successfull.!!');</script>";
                echo "<script>window.location = ('news.php?page=1');</script>";
                exit();
            }else{
                echo "<script>alert('Faill!!');</script>";
                echo "<script>window.location = ('saveOrUpdate.php?erorr=inserterorr');</script>";
                exit();
            }
        }



    }
?>