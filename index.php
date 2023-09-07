<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập s2 </h2>
    <form action="process_login.php" method="POST">
        <label for="username">Tên người dùng:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Đăng nhập">
    </form>
</body>
</html>
 