<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
</head>
<body>
    <ul>
        <li><a href="home.php">Trang chủ</a></li>
        <li><a href="contact.php">Liên hệ</a></li>
        <li>
            <?php
            session_start();

            // Kiểm tra nếu có COOKIE tồn tại hoặc SESSION đã đăng nhập
            if (isset($_COOKIE['username']) && $_COOKIE['username'] !== '') {
                $username = $_COOKIE['username'];
                echo "Xin chào bạn $username!";
            } else {
                echo "<a href='login.php'>Đăng nhập</a>";
            }
            ?>
        </li>
    </ul>
</body>
</html>
