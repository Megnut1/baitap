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
            header("location: saveOrUpdate_user.php?erorr=emptyfields");
            exit();
        }else{
            if($get_Data->insertBlog_user($title,$scontent,$lcontent,$date,$category,$author)){
                echo "<script>alert('Thanks for your post! Its been submited successfull.!!');</script>";
                echo "<script>window.location = ('saveOrUpdate_user.php?insert=sucess');</script>";
                exit();
            }else{
                echo "<script>alert('Insert fail!!');</script>";
                echo "<script>window.location = ('saveOrUpdate_user.php?erorr=inserterorr');</script>";
                exit();
            }
        }



    }
?>