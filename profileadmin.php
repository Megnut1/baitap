<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
}
include('Control.php');
$get_Data = new Data();
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>Profile - Zerotype Website Template</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/text.css" type="text/css">

    <link rel="stylesheet" href="css/styleImg.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
    include('header_admin.php');
    ?>
    <div id="contents">
        <h2 style="text-align: center; margin-top:50px;">Edit profile</h2>
        <?php
        if (isset($_GET['erorr'])) {
            $err = $_GET['erorr'];
            if($err == "failed"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Cập nhật ảnh thất bại".'</h6>';
            }elseif($err == "maximum"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Kích thước đã quá 10MB".'</h6>';
            }elseif($err == "filefailed"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Định dạng ảnh không hợp lệ".'</h6>';
            }elseif($err == "emailfailed"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Định dạng email không hợp lệ".'</h6>';
            }elseif($err == "updatefailed"){
                echo '<h6 style="text-align: center; margin-top:50px;  ">'."Cập nhật thông tin thất bại".'</h6>';
            }
        }

        if (isset($_GET['update'])) {
            $up = $_GET['update'];
            if ($up == "success") {
                echo '<h6 style="text-align: center; margin-top:50px;  ">' . "Cập nhật ảnh thành công" . '</h6>';
            } elseif ($up == "profiles") {
                echo '<h6 style="text-align: center; margin-top:50px;  ">' . "Cập nhật thông tin thành công" . '</h6>';
            }
        }

        ?>
        <div style="width: 950px;height: 600px;">
            <div style="width: 250px;height: 600px;  float:left; text-align:center;">
                <img id="myImg" src="Image/<?php echo $get_Data->getAvatar($_SESSION['userId']) ?>" style="width: 250px; padding-top:120px; object-fit: cover;" />
                <div id="myModal" class="modal">

                    <span class="close">&times;</span>

                    <img class="modal-content" id="img01">

                    <div id="caption"></div>
                </div>

                <form action="uploadImgAdmin.php?id=<?php echo $_SESSION['userId'] ?>" method="POST" enctype="multipart/form-data">
                    <input type="file" name="files" />
                    <input type="submit" name="sub" value="Update">
                </form>
            </div>
            <?php
            if (isset($_SESSION['userId'])) {
                $list = $get_Data->listProfile($_SESSION['userId']);
            }
            ?>
            <div style="width: 700px;height: 600px;  margin-left:250px;">
                <form action="updateprofileadmin.php?id=<?php echo $_SESSION['userId'] ?>" method="POST">
                    <div style="width: 360px;height: 600px; margin-left:250px;  padding-left:30px;">
                        <i style="margin-top:120px;" class="fa fa-envelope" aria-hidden="true"></i><span style="padding-left:10px;">Email</span><br>
                        <input type="text" style="margin-top:10px;width: 360px;height:30px;padding: 10px;" placeholder="Email" value="<?php echo $list['email'] ?>" name="email" />
                        <br>
                        <i style="margin-top:10px;" class="fa fa-phone" aria-hidden="true"></i></i><span style="padding-left:10px;">Phone Number</span><br>
                        <input type="text" style="margin-top:10px;width: 360px;height:30px;padding: 10px;" placeholder="Phone Number" value="<?php echo $list['phoneNumber'] ?>" name="phone" />
                        <br>
                        <i style="margin-top:10px;" class="fa fa-map-marker" aria-hidden="true"></i></i><span style="padding-left:10px;">Address</span><br>
                        <input type="text" style="margin-top:10px;width: 360px;height:30px;padding: 10px;"placeholder="Address" value="<?php echo $list['address'] ?>" name="address" />
                        <br>
                        <i style="margin-top:10px;" class="fa fa-calendar" aria-hidden="true"></i></i><span style="padding-left:10px;" >Birthday</span><br>
                        <input type="date" style="margin-top:10px;width: 360px;height:30px;padding: 10px;" value="<?php echo date("Y-m-d", strtotime($list['birthday'])) ?>" name="birthday" />
                        <br>
                        <input type="submit" value="Update" name="update" style="width: 100px;height: 30px;display: flex;justify-content: center; margin-top: 30px;font-weight: 700;" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
</body>

</html>