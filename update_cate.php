<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
}
include('Control.php');
$get_Data= new Data();
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>Post - Zerotype Website Template</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/paginationpage.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css">
</head>

<body>
    <?php
    include('header_admin.php');
    ?>
    
    <div id="contents">
        
    <?php
if (isset($_GET['id'])&&($_GET['id'])>0) {
    
    $show=$get_Data->select_one_category($_GET['id']);
    if(isset($_POST['update_category'])){
        $id=$_GET['id'];
        $name=$_POST['name'];
        $run=$get_Data->update_cate($id,$name);
        
        if ($run) {
            echo "<script>alert('Sửa thành công');</script>";
            echo "<script>window.location = ('category.php');</script>";
            // exit();
        } else {
            echo "<script>alert('Khong thanh cong!!')</script>";
        }
        
    }
    
    
}

?>        <form  enctype="multipart/form-data"  method="POST" class="message">
        
            <input type="text"  name="name" value="<?php echo $show['category_name'] ?>" />
            <input type="submit"  name="update_category" value="Sửa"  />
           <button>
           <a href="category.php" >thoát</a>
           </button>
        </form>

    </div>
    
    <?php
    include('footer.php');
    ?>
</body>
</html>