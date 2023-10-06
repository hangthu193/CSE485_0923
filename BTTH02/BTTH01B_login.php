<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="./lib/fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="main-header">
        <div claas = "header">
            <div class = "container__left">
                <img src="index_pic.png" alt="" class="container__left-img">
                <ul class="container__left-list list-unstyled">
                    <li>
                        <a href="#" class="text-decoration-none text-black text-uppercase">Trang chủ</a>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none text-black text-uppercase">Đăng nhập</a>
                    </li>
                </ul>
            </div>
            <div class="container__right">
                <div class="header__input">
                    <input type="text" placeholder="Nội dung cần tìm" class="header__input-content">
                    <input type="text" name="" id="" placeholder="Tìm" class="header__input-search">
                </div>
            </div>
        </div>
        <div class="main">
            <div class="content">
                <div class="top-content">
                    <span class="top-content__text">Sign In</span>
                </div>
                <div class="center-content">
                    <form action="" class="form">
                    <div class="form-group">
                        <div class="form__input-wrap">
                            <div class="form__input-icon-wrap">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <input type="text" name="name" id="name" class="form__input" placeholder="username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__input-wrap">
                            <div class="form__input-icon-wrap">
                                <i class="fa-solid fa-key"></i>
                            </div>
                            <input type="password" name="" id="" class="form__input" placeholder="password">
                        </div>
                        <div class="form-message"></div>
                    </div>
                        <div class="form-group">
                            <input type="checkbox" class="checkbox" name="dn" id="dn"> Remember Me
                        </div>
                        <button type="submit">Login</button>
                    </form>
                </div>
                <div class="bottom-content">
                    <span class="bottom-content__text">Don't have an account? Sign Up</span> <br>
                    <span class="bottom-content__text">Forgot your password</span>
                </div>
            </div>
        </div>
        <div class="footer">
            <span class="footer-title">TLU'S MUSIC GARDEN</span>
        </div>
    </div>
</body>
</html>