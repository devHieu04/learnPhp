<!DOCTYPE html>
<html>
<head>
    <title>Trang chủ</title>
</head>
<body>
<?php
    include('menu.php');
    ?>
    <?php
   // session_start();

    // Kiểm tra nếu có COOKIE tồn tại
    if (isset($_COOKIE['username']) && $_COOKIE['username'] !== '') {
        $username = $_COOKIE['username'];
        echo "Xin chào bạn $username!";
    } else {
        echo "Đăng nhập";
    }
    ?>
    <br><br>

    <a href="contact.php">Liên hệ</a>
</body>
</html>

