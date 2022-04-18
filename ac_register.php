<?php
    if(isset($_POST['res'])){
        include('Control.php');
        $get_Data = new Data();
        include('sendMail.php');
        $send = new Send();

        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $check = true;
        $isValidateEmail = $get_Data->checkEmail($email);
        $isValidateUserName = $get_Data->checkUserName($username);

        if(empty($email)||empty($username)||empty($password)||empty($cpassword)){
            $check = false;
            header("location: register.php?erorr=emptyfields");
            exit();
        }elseif($isValidateEmail != 0){
            $check = false;
            header("location: register.php?erorr=emailexits");
            exit();
        }elseif($isValidateUserName != 0){
            $check = false;
            header("location: register.php?erorr=usernameexits");
            exit();
        }elseif($password != $cpassword){
            $check = false;
            header("location: register.php?erorr=passwordincorrect");
            exit();
        }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $check = false;
            header("location: register.php?erorr=isvalidateEmail");
            exit();
        }else{
            $password = md5($password);
            $insert_contact = $get_Data->Register($username,$password,$email);
            if($insert_contact && $check=true){
                header("location: login.php?register=success");
                $send->sendMails($email,$username);
                exit();
            }else{
                header("location: register.php?erorr=registerfailed");
                exit();
            }
        }

    }else{
        header("location: register.php");
        exit();
    }
?>