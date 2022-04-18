<?php
    if(isset($_POST['update'])){
        include('Control.php');
        $get_Data = new Data();
        $id = $_GET['id'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $birthday = $_POST['birthday'];

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            header("location: profileadmin.php?error=emailfailed");
            exit();
        }else{
            $update= $get_Data->updateProfile($email,$phone,$address,$birthday,$id);
            if($update){
                header("location: profileadmin.php?update=profiles");
                exit();
            }else{
                header("location: profileadmin.php?error=updatefailed");
                exit();
            }
        }
    }


?>