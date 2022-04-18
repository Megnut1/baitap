<?php
    if(isset($_POST['xn'])){
        include('Control.php');
        $get_Data = new Data();

        $email = $_GET['email'];
        $code = $_POST['code'];

        $check = true;


        if(empty($code)||empty($email)){
            $check = false;
            header("location: validateCode.php?email=".$email."&erorr=emptyfields");
            exit();
        }else{
            $isvalidateCode = $get_Data->getCodeByEmail($email);
            if($code == $isvalidateCode){
                $id = $get_Data->getIdByEmail($email);
                session_start();
                $_SESSION['userid'] = $id;
                header("location: updatePassword.php");
                $get_Data->deleteCodeByEmail($email);
                exit();
            }else{
                header("location: validateCode.php?email=".$email."&erorr=codefailed");
                exit();
            }
        }

    }
?>