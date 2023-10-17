<?php
$connection = mysqli_connect('localhost', 'root', 'anhyeuem1902@', 'GKi');

if (!$connection) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

if (isset($_POST['update-id'])) {
    $id = $_POST['update-id'];
    $username = $_POST['update-username'];
    $phone = $_POST['update-phone'];
    $email = $_POST['update-email'];

    $query = "UPDATE users SET username='$username', phone='$phone', email='$email' WHERE id = $id";

    if (mysqli_query($connection, $query)) {
       header("Location:index.php");
    } else {
        echo "Lỗi khi cập nhật người dùng: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
