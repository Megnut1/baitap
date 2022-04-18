<?php
    include('Control.php');
    $get_Data = new Data();
 if (isset($_POST['sub'])) {
     $id = $_GET['id'];
    //Kiểm tra định dạng file (JPEG) 
    if ($_FILES['files']['type'] == 'image/jpeg' || $_FILES['files']['type'] == 'image/png') {
        //Kiểm tra kích thước của file <= 2MB
        if($_FILES['files']['size'] <=  10048576 ){
            //Thực hiện upload file
            $files = move_uploaded_file
            ($_FILES['files']['tmp_name'],"Image/".$_FILES['files']['name']);
            $result = $get_Data->uploadImage($_FILES['files']['name'],$id);
            //Kiểm tra file upload đã thành công hay chưa?
            if ($files && $result) {
                header("location: profiles.php?update=success");
                exit();
            }else{
                header("location: profiles.php?error=failed");
                exit();
            }
        }else{
                header("location: profiles.php?error=maximum");
                exit(); 
            }
    }else{
            header("location: profiles.php?error=filefailed");
            exit(); 
        }
    }

?>