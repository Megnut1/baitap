<?php
include ("Control.php");    
$delete_user = new Data();
    $run=$delete_user->delete_cmt($_GET['id']);
$delete = $delete_user->delete_user($_GET['id']);

if ($delete) {
    echo "<script>alert('Your post has been deleted.!!');</script>";
    echo "<script>history.back()</script>";
} else {
    echo "<script>alert('Khong thanh cong!!')</script>";
}
?>