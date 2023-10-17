<?php
// Kết nối đến cơ sở dữ liệu
$connection = mysqli_connect('localhost', 'root', 'anhyeuem1902@', 'GKi');

if (!$connection) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

// Xử lý khi người dùng bấm nút "Thêm"
if (isset($_POST['username']) && isset($_POST['phone']) && isset($_POST['email'])) {
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $query = "INSERT INTO users (username, phone, email) VALUES ('$username', '$phone', '$email')";
    if (mysqli_query($connection, $query)) {
        header("refresh:0;url=index.php");
        
    } else {
        echo "Lỗi khi thêm người dùng: " . mysqli_error($connection);
    }
}

// Hiển thị dữ liệu từ cơ sở dữ liệu trên bảng HTML 
// $updatequery = "UPDATE users "

mysqli_close($connection);
?>
