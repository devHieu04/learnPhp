<!DOCTYPE html>
<html>
<head>
    <title>Quản lý người dùng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Thêm người dùng</h1>
    <form action="process.php" method="POST"  >
        <label for="username"  class="form-label" >Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="phone" class="form-label" >Phone:</label>
        <input type="text" name="phone" id="phone" required><br><br>

        <label for="email" class="form-label" >Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" value="Thêm" class="btn btn-success">
    </form>

    <h1>Danh sách người dùng</h1>
    <table class="table table-bordered table-success" >
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Phone</th>
            <th>Email</th>
            <th>action</th>
            <th>update</th>
        </tr>
        <?php
        $connection = mysqli_connect('localhost', 'root', 'anhyeuem1902@', 'GKi');

        if (!$connection) {
            die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
        }
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>
            <form action='delete.php' method='POST'>
                <input type='hidden' name='id' value='" . $row['id'] . "'>
                <button type='submit' class='btn btn-danger'>Xóa</button>
            </form>
        </td>";
        echo "<td><a href='user_infor.php?id=" . $row['id'] . "' class='btn btn-info'>Xem/Cập nhật</a></td>";

            echo "</tr>";
        }
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
