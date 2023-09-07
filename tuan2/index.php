<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>
    <?php
    session_start();

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            echo "Vui lòng nhập đầy đủ tên và mật khẩu.";
        } else {
            // Kiểm tra tên chỉ chứa ký tự a-z, A-Z và 0-9
            if (preg_match('/^[a-zA-Z0-9]+$/', $username)) {
                if ($password === '123') {
                    // Lưu tên đăng nhập vào COOKIE với thời gian hiệu lực là 10 phút
                    setcookie('username', $username, time() + 600);

                    echo "Đăng nhập thành công. Xin chào bạn $username!";
                } else {
                    echo "Mật khẩu không đúng.";
                }
            } else {
                echo "Tên chỉ được chứa ký tự a-z, A-Z và 0-9.";
            }
        }
    }
    ?>

    <h2>Đăng nhập</h2>
    <form method="POST" action="login.php">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" name="submit" value="Đăng nhập">
    </form>
</body>
</html>
