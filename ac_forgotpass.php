<?php

if(isset($_POST['fg'])){
    include('Control.php');
    $get_Data = new Data();
    include('sendMail.php');
    $send = new Send();
    $email = $_POST['email'];

    $check = true;
    $isValidateEmail = $get_Data->checkEmail($email);
    $username = $get_Data->getUserNameByEmail($email);
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
    $code = substr(str_shuffle($permitted_chars), 0, 6);

 
    if(empty($email)){
        $check = false;
        header("location: forgotPassword.php?erorr=emptyfields");
        exit();
    }elseif($isValidateEmail == 0){
        $check = false;
        header("location: forgotPassword.php?erorr=emailexits");
        exit();
    }else{
        $run = $get_Data->insertCode($code,$email);
        if($check==true && $run){
            header("location: validateCode.php?email=".$email);
            $send->sendCode($email,$username,$code);
            exit();
        }else{
            header("location: forgotPassword.php?erorr=emailisnotsent");
            exit();
        }
    }
}

?>