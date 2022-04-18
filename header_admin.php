<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/header_admin.css">
    <script src="public/ckeditor/ckeditor.js"></script>
    <script src="public/ckfinder/ckfinder.js"></script>
</head>
<body>
<div id="header">
    <div id="header-box">
        <div class="logo">
            <a href="admin.php">Zero Type</a>
        </div>
        <div class="manager">
            <a href="admin.php">Manager</a>
        </div>
        <div class="qeue">
            <a href="queue.php">Waitting</a>
        </div>
        <div class="qeue">
            <a href="category.php">Category</a>
        </div>
        <div class="qeue">
            <a href="index_user.php">User</a>
        </div>
        <div class="qeue">
            <a href="index_cmt.php">Comment</a>
        </div>
        <div id="MenuCustom">
            <ul>
                <?php
                if (isset($_SESSION['username'])) {
                    $path = $get_Data->getAvatar($_SESSION['userId']);
                    echo '
                                <li>
                                    <img src="Image/' . $path . '" alt="Avatar" class="avatar" style="object-fit: cover;" >
                                    <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn">' . $_SESSION['username'] . ' <i class="fa fa-caret-down"></i></button>
                                        <div id="myDropdown" class="dropdown-content">
                                            <a href="profileadmin.php">Thông tin cá nhân</a>
                                            <a href="logout.php">Đăng xuất</a>
                                        </div>
                                    </div>
                                </li>
                            ';
                } else {
                    echo '
                                <li>
                                    <a href="login.php">Đăng nhập</a>
                                </li>
                                <li>
                                    <a href="register.php">Đăng ký</a>
                                </li>
                            ';
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>
</body>
</html>
