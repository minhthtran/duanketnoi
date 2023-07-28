<!-- header.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Trang chủ</title>
    <link href="~/../css/style_khoa.css" rel="stylesheet">
</head>
<body>
    <header>
        <div id ="header_top">
            <div id="header_left">
                <img src="~/../asset/logoKNTT.png" alt="Your Image">
                <label>Kết nối thực tập</label>
            </div>
            <div class="header_right">
                <img src="~/../asset/user.png" alt="Your Image">
                <label>Đăng nhập</label>
            </div>
            <div class="header_right">
                <img src="~/../asset/gmail.png" alt="Your Image">
                <label>Liên hệ admin</label>
            </div>
        </div>
        <div id = "menu">
            <a href="#"> <img src="~/../asset/icon_home.png" alt="Your Image"> </a>
            <a href="#">Giới thiệu</a>
            <a href="#">Thông báo</a>
            <a href="#">Đăng kí giảng viên</a>
            <a href="#">Đăng kí doanh nghiệp</a>
            <div class="dropdown-link">
                <a href="#">
                    <img src="~/../asset/more-vertical.png" alt="">
                </a>
                <!-- Thẻ div chứa menu con -->
                <div class="dropdown-content">
                    <a class ="menu-bar" href="#">Menu item 1</a>
                    <a class ="menu-bar" href="#">Menu item 2</a>
                    <a class ="menu-bar"href="#">Menu item 3</a>
                </div>
            </div>
        </div>
    </header>