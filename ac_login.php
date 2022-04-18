<?php 
    if(isset($_POST['login'])){
        include('Control.php');
    	$get_Data = new Data();

        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username)||empty($password)){
            header("location: login.php?erorr=emptyfields");
            exit();
        }else{
            $password = md5($password);
            $result = $get_Data->checkUserName($username);

    		
            if ($result == 0) {
                header("location: login.php?erorr=usernamenotfound");
                exit();
            }else{
                if ($password != $get_Data->getPassword($username)) {
                    header("location: login.php?erorr=wrongpassword");
                    exit();
                }else{
                    session_start();
                    $_SESSION['username'] = $username;
                    $permission = $get_Data->getRoles($username,$password);
                    $user_id = $get_Data->getId($username,$password);
                    $_SESSION['userId'] = $user_id;
                    if($permission == 1){
                        header("location:home.php?login=success");
                        exit();
                    }else{
                        header('location:admin.php?login=success&page=1');
                        exit();
                    }
                }
            }
        }
    }else{
        header("location: login.php");
        exit();
    }
?>