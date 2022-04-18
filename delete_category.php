<?php
include ("Control.php");    
$delete_Post = new Data();
$run=$delete_Post->delete_blog($_GET["id"]);
$delete = $delete_Post->delete_category($_GET["id"]);

if ($delete) {
    echo "<script>alert('Your post has been deleted.!!');</script>";
    echo "<script>history.back()</script>";
} else {
    echo "<script>alert('Khong thanh cong!!')</script>";
}
?>