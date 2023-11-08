<!-- header.php -->
<!--Helllo -->
<!DOCTYPE html> 
<html>
<head>
    <link href="../../css/style_khoa.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../../css/global.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body>
    <header>
        <div id ="header_top">
            <a href="#" id="header_left">
                <img src="../../asset/logoKNTT.png" alt="Your Image">
                <label>Quản lý thực tập</label>
            </a>

            <div class="header_right">
                <img src="../../asset/user.png" alt="Your Image">
                <label>Minh Thư</label>

                <div class="modal-setting">
                    <a href="../SinhVien/student_profile.php" class="setting-information">
                        <img src="../../asset/clipboard edit left-2.png" alt="">
                        <div>Thông tin cá nhân</div>
                    </a>
                    <a href="#" class="setting-logout">
                        <img src="../../asset/sign out alt.png" alt="">
                        <div>Đăng xuất</div>
                    </a>
                </div>
            </div>
            <div class="header_contact">
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
                    <a class ="menu-bar" href="dangkydetai.php">Đăng kí đề tài</a>
                    <a class ="menu-bar" href="task.php">Công việc</a>
                    <a class ="menu-bar"href="#">Menu item 3</a>
                </div>
            </div>
        </div>
        <script>

        </script>
    </header>
</body>
</html>