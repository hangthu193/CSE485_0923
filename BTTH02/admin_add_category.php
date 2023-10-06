<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category</title>
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
            <div class="main_text">Thêm mới thể loại</div>
            <div class="center-content">
                    <form action="process_add.php" method="post">
                        <div class="form-group">
                            <div class="form__input-wrap">
                                <div class="form__input-icon-wrap">
                                    <span>Tên thể loại</span>
                                </div>
                                <input type="text" name="name" id="name" class="form__input" placeholder="">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success" name="sbmSave">Save</button>
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