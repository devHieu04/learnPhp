<?php session_start(); ?>
<html>
    <head>
        <title>Danh sach danh muc</title>
    </head>
    <body>
        <?php include('menu.php'); ?>
        <h1>Danh sach danh muc</h1>
        <?php
            $host = "localhost";
            $port = "5432";
            $dbname = "banhang";
            $user = "nguyenduyhieu";
            $password = "";

            $connection = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

            if (!$connection) {
                die("Kết nối không thành công: " . pg_last_error());
            }
            echo "Kết nối thành công";

            $sql = "SELECT * FROM danhmuc";
            $result = pg_query($connection, $sql);

            if (!$result) {
                die("Lỗi truy vấn: " . pg_last_error($connection));
            }

            while ($row = pg_fetch_assoc($result)) {
                echo 'ID: ' . $row['id'] . '<br>';
                echo 'Ten danh muc: <a href="list_product.php?iddm='.$row['id'].'">'.$row['tendanhmuc'] .'</a><br>';
                echo '<hr><br>';
            }
            
            // Đóng kết nối
            pg_close($connection);
        ?>
    </body>
</html>