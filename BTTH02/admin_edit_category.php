<?php
if (isset($_GET['ma_tloai'])) {
    $matl = $_GET['ma_tloai'];
    try {
        $conn = new PDO("mysql:host=localhost; dbname=btth01_cse485", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql_check = "SELECT * FROM theloai WHERE ma_tloai = :matl";
        $stmt = $conn->prepare($sql_check);
        $stmt->bindParam(':matl', $matl, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>
<?php
// Kiểm tra xem biến $user đã được khởi tạo và không null
if (isset($user) && is_array($user) && count($user) >= 3) {
    $matl = $user['ma_tloai'];
    $username = $user['ten_tloai'];
} else {
    // Xử lý trường hợp biến $user không tồn tại hoặc không hợp lệ
    // Điều này có thể làm cho biểu mẫu không hiển thị hoặc xử lý lỗi một cách thích hợp
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="admin_add.css">
    <link rel="stylesheet" href="./lib/fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.css">
</head>
<body>
    <div class="main-header">
        <div claas = "header">
            <div class = "container__left">
                <span class="container__left-text">Administration</span>
                <ul class="container__left-list list-unstyled">
                    <li>
                        <a href="#" class="text-decoration-none text-black text-uppercase">Trang chủ</a>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none text-black text-uppercase">Trang ngoài</a>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none text-black text-uppercase">Thể loại</a>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none text-black text-uppercase">Tác giả</a>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none text-black text-uppercase">Bài viết</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="main_text">Sửa thông tin thể loại</div>
            <div class="center-content">
                    <form action="" class="form">
                        <div class="form-group">
                            <div class="form__input-wrap">
                                <div class="form__input-icon-wrap">
                                    <span>Mã thể loại</span>
                                </div>
                                <input type="text" name="matl" id="name" class="form__input" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__input-wrap">
                                <div class="form__input-icon-wrap">
                                    <span>Tên thể loại</span>
                                </div>
                                <input type="text" name="tentl" id="name" class="form__input" placeholder="">
                            </div>
                        </div>
                        <button class="btn btn-success">Lưu lại</button>
                        <button class=" btn close">Quay lại </button>
                    </form>
            </div>
        </div>
        <div class="footer">
            <span class="footer-title">TLU'S MUSIC GARDEN</span>
        </div>
    </div>
</body>
</html>