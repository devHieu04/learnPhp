<!DOCTYPE html>
<html>
<head>
    <title>Xử lý thông tin đăng ký</title>
</head>
<body>
    <h2>Thông tin đăng ký</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST["fullname"];
        $gender = $_POST["gender"];
        $languages = isset($_POST["languages"]) ? $_POST["languages"] : [];
        $country = $_POST["country"];

        echo "Họ và tên: $fullname<br>";
        echo "Giới tính: $gender<br>";

        if (!empty($languages)) {
            echo "Ngôn ngữ yêu thích: " . implode(", ", $languages) . "<br>";
        } else {
            echo "Ngôn ngữ yêu thích: Không có<br>";
        }

        echo "Quốc gia: $country<br>";
    }
    ?>
</body>
</html>

