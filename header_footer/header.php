<!-- header.php -->
<!--Helllo -->
<!DOCTYPE html> 
<html>
<head>
    <link href="../../css/style_khoa.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../../css/dangkydoanhnghiep.css" rel="stylesheet">
    <link href="../../css/global.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body>
    <header>
        <div id ="header_top">
            <div id="header_left">
                <img src="../../asset/logoKNTT.png" alt="Your Image">
                <label>Kết nối thực tập</label>
            </div>
            <a href="student_profile.php" class="header_right">
                <img src="../../asset/user.png" alt="Your Image">
                <label>Đăng nhập</label>

            </a>
            <div class="header_right">
                <img src="../../asset/gmail.png" alt="Your Image">
                <label>Liên hệ admin</label>
            </div>
        </div>

        <div id = "menu">
            <a href="homepage_std.php"> <img src="../../asset/icon_home.png" alt="Your Image"> </a>
            <a href="#">Giới thiệu</a>
            <a href="notification_student.php">Thông báo</a>
            <a href="dangkygiangvien.php">Đăng kí giảng viên</a>
            <a href="dangkydoanhnghiep.php">Đăng kí doanh nghiệp</a>
            <div class="dropdown-link">
                <a href="#">
                    <img src="../../asset/more-vertical.png" alt="">
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
</body>
</html>