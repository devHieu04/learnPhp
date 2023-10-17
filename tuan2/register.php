<!DOCTYPE html>
<html>
<head>
    <title>Form Đăng ký</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <h2>Form Đăng ký</h2>
    <form method="POST" action="process.php">
        <label for="fullname">Họ và tên:</label>
        <input type="text" name="fullname" id="fullname" required><br><br>

        <label>Giới tính:</label>
        <input type="radio" name="gender" value="Nam" id="nam"><label for="nam">Nam</label>
        <input type="radio" name="gender" value="Nữ" id="nu"><label for="nu">Nữ</label><br><br>

        <label>Ngôn ngữ yêu thích:</label>
        <input type="checkbox" name="languages[]" value="Tiếng Anh" id="english"><label for="english">Tiếng Anh</label>
        <input type="checkbox" name="languages[]" value="Tiếng Pháp" id="french"><label for="french">Tiếng Pháp</label>
        <input type="checkbox" name="languages[]" value="Tiếng Tây Ban Nha" id="spanish"><label for="spanish">Tiếng Tây Ban Nha</label><br><br>

        <label for="country">Quốc gia:</label>
        <select name="country" id="country">
            <option value="Vietnam">Việt Nam</option>
            <option value="USA">Hoa Kỳ</option>
            <option value="France">Pháp</option>
            <option value="Spain">Tây Ban Nha</option>
        </select><br><br>

        <input type="submit" name="submit" value="Đăng ký">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
