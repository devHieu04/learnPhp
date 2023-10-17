<!-- user_info.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Thông tin người dùng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Thông tin người dùng</h1>

    <?php
    $connection = mysqli_connect('localhost', 'root', 'anhyeuem1902@', 'GKi');

    if (!$connection) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
    }

    if (isset($_GET['id'])) {
        $userId = $_GET['id'];

        // Truy vấn thông tin người dùng
        $query = "SELECT * FROM users WHERE id = $userId";
        $result = mysqli_query($connection, $query);
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            echo "<form action='update.php' method='POST'>";
            echo "<input type='hidden' name='update-id' value='" . $user['id'] . "'>";

            echo "<label for='update-username'>Username:</label>";
            echo "<input type='text' name='update-username' id='update-username' value='" . $user['username'] . "' required><br><br>";

            echo "<label for='update-phone'>Phone:</label>";
            echo "<input type='text' name='update-phone' id='update-phone' value='" . $user['phone'] . "' required><br><br>";

            echo "<label for='update-email'>Email:</label>";
            echo "<input type='email' name='update-email' id='update-email' value='" . $user['email'] . "' required><br><br>";

            echo "<input type='submit' value='Cập nhật'>";
            echo "</form>";
        } else {
            echo "Không tìm thấy người dùng.";
        }
    } else {
        echo "Vui lòng chọn một người dùng để xem thông tin.";
    }

    mysqli_close($connection);
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
