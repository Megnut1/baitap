<?php
session_start();
// if (!isset($_SESSION['username'])) {
//     header("location: login.php");
// }
include('Control.php');
$get_Data = new Data();

?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>Contact - Zerotype Website Template</title>
    <link rel="stylesheet" href="css/text.css" type="text/css">
	<link rel="stylesheet" href="css/header.css" type="text/css">
	<link rel="stylesheet" href="css/body.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php
    include('header.php');
    ?>
    <div id="contents">
        <div class="contact">
            <div class="card-contact">
                <div class="contact-me">
                    <h1>Contact Me</h1>
                    <div class="userName">
                        <i class="fa fa-user" aria-hidden="true"></i><span>User Name</span><br>
                        <p>Dương Ngô Tùng</p>
                    </div>
                    <div class="userName" >
                        <i class="fa fa-envelope" aria-hidden="true"></i><span>Email</span>
                        <p>dntung2409@gmail.com</p>
                    </div>
                    <div class="userName">
                        <i class="fa fa-phone" aria-hidden="true"></i><span>Number Phone</span>
                        <p>+84971985730</p>
                    </div>
                    <div class="userName">
                        <i class="fa fa-map-marker" aria-hidden="true"></i><span>Address</span>
                        <p>Hoàng Thanh - Hiệp Hòa - Bắc Giang</p>
                    </div>
                </div>
                <div class="contact-us">
                    <h1>Contact</h1>
                        <p>
                        We always overestimate the change that will occur in the next two years and underestimate the change that will occur in the next ten. Don’t let yourself be lulled into inaction.
                        </p>
                        <form action="" method="post" class="message">
                            <input type="text" name="name" placeholder="Name" onFocus="this.select();" onMouseOut="javascript:return false; require " /><br>
                            <input type="text" name="email" placeholder="Email" onFocus="this.select();" onMouseOut="javascript:return false; require" /><br>
                            <input type="text" name="subject" placeholder="Subject" onFocus="this.select();" onMouseOut="javascript:return false; require" /><br>
                            <textarea name="txtMess" placeholder="Note"></textarea><br>
                            <input type="submit" name="btnSend" value="Send" class="send" />
                        </form>
                        <?php
                        $get_Data = new Data(); 
                        if (isset($_POST['btnSend'])) {
                            if (empty($_POST['email'])) {
                                $emailErr = "Email là trường bắt buộc";
                            } else {
                                $insert_contact = $get_Data->IN_CONTACT($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['txtMess']);
                                if ($insert_contact) {
                                    echo "<script>alert('Lien hệ thành công!')</script>";
                                } else {
                                    echo "<script>alert('Lien hệ thất bại!')</script>";
                                }
                            }
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
<?php
include('footer.php');
?>
</body>

</html>