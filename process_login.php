<?php
// Lấy dữ liệu từ form đăng nhập
$username = $_POST['username'];
$password = $_POST['password'];

// Kiểm tra thông tin đăng nhập (thay thế bằng kiểm tra thực tế)
if ($username === 'hieu1902@' && $password === 'hieu1902@') {
    // Đăng nhập thành công, có thể thực hiện các hành động sau đây
    echo "Đăng nhập thành công!";
} else {
    // Đăng nhập không thành công, thông báo lỗi
    echo "Sai tên đăng nhập hoặc mật khẩu. Vui lòng thử lại.";
}
?>
