<?php
    session_start();
    if(isset($_POST['uppass'])){
        include('Control.php');
        $get_Data = new Data();

        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $check=true;
        if(empty($password)||empty($cpassword)){
            $check = false;
            header("location: updatePassword.php?erorr=emptyfields");
            exit();
        }elseif($password != $cpassword){
            $check = false;
            header("location: updatePassword.php?erorr=passwordincorrect");
            exit();
        }else{
            $password = md5($password);
            $run = $get_Data->updatePasswordById($password,$_SESSION['userid']);
            session_unset();
            session_destroy();
            header("location: login.php?mes=success");
            exit();
        }


    }
?>