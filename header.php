 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/header.css">
    <script src="public/ckeditor/ckeditor.js"></script>
    <script src="public/ckfinder/ckfinder.js"></script>
</head>
<body>
    <div id="header">
		<div id="header-box">
            <ul>
                <li class="logo"><a href="home.php"></a></li>
                <li><a href="home.php">Home</a></li>
                <li><a href="features.php">Features</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="saveOrUpdate_user.php">Upload post</a></li>
                <li><a href="profiles.php">Profile</a></li>
                <li>
                    <?php
                    if (isset($_SESSION['username'])) {
                        $path = $get_Data->getAvatar($_SESSION['userId']);
                        echo '
                                    <li>
                                        <img src="Image/' . $path . '" alt="Avatar" class="avatar" style="object-fit: cover;" >
                                        <div class="dropdown">
                                        <button onclick="myFunction()" class="dropbtn">' . $_SESSION['username'] . ' <i class="fa fa-caret-down"></i></button>
                                            <div id="myDropdown" class="dropdown-content">

                                                <a href="logout.php">Đăng xuất</a>
                                            </div>
                                        </li>
                                    ';
                        } else {
                            echo '
                                    <div class="login">
                                        <li>
                                            <a href="login.php" >Login</a>
                                        </li>
                                        <li>
                                            <a href="register.php">Register</a>
                                        </li>
                                    </div>
                                    ';
                        }
                    ?>
                 </li>
            </ul>
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


