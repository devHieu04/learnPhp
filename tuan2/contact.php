<!DOCTYPE html>
<html>
<head>
    <title>Liên hệ</title>
</head>
<body>
   
  
    <?php
   // session_start();
    include('menu.php');

    // Kiểm tra nếu có COOKIE tồn tại
    if (isset($_COOKIE['username']) && $_COOKIE['username'] !== '') {
        $username = $_COOKIE['username'];
        echo "Xin chào bạn $username!";
    } else {
        echo "Đăng nhập";
    }
    ?>
    <br><br>

    Liên hệ chúng tôi tại đây.
</body>
</html>
