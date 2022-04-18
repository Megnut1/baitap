<?php 
    include('Control.php');
    $get_Data = new Data();
    if(isset($_GET['id'])){
        $get_Data->deleteBlog($_GET['id']);
        header('location:admin.php?login=success&page=1');
        exit();
    }
?>