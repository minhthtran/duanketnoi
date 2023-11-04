
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="~/../css/style.css" rel="stylesheet">
    <script src="/css/function.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="row">
        <div id="cardLeft">
            <div class = "formtitle">
                <img src="~/../asset/logoUFM.png" alt="Your Image">
                <div>
                    <label id="title">TRƯỜNG ĐẠI HỌC TÀI CHÍNH - MARKETING </label><br>
                    <label id="content_title">KHOA CÔNG NGHỆ THÔNG TIN </label>
                </div>
            </div><br>
            <div id ="items_show">
                <div id="slideshow">
                    các hình ảnh trong slideshows
                </div>
            </div>
        </div>
        <div id="cardright">
            <div class="title_login">
                <img src="~/../asset/logoKNTT.png" alt="Your Image">
                <div>
                    <label id="title">KẾT NỐI THỰC TẬP </label><br>
                    <label id="title">GIỮA SINH VIÊN VÀ DOANH NGHIỆP IT </label>
                </div>
            </div><br>
            <div style="height: 50px;"></div><br>
            <form id ="formlogin" method="POST" action="ChucNang/CN_DangNhap.php">
                <div id="logintitle_f">
                    <label>Đăng nhập hệ thống</label>
                </div>
                <div id="item_login">
                    <div class="container_item">
                        <label>Nhập mã số</label><br>
                        <input name="input_username" required>
                    </div>
                    <div class="container_item">
                        <label>Mật khẩu</label><br>
                        <div class="password_input_wrapper">
                            <input id="input_password" type="password" name="input_password" required>
                            <span class="toggle_password"></span>
                            <label id="lblquenmk">
                                Quên mật khẩu?
                            </label>
                        </div>
                    </div>
                    <div class="container_item">
                        <button type="submit" name="btn_DangNhap">
                            Đăng nhập
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
    session_start();
    if($_SESSION['isLoggedIn'] == false) {
        echo "<script>toastr.clear(noti); 
            toastr.options = {
            closeButton: true,
            preventDuplicates: true,
            progressBar: true,
            timeOut: 2000,
            positionClass: 'toast-top-center',
            };
            var noti = toastr.error('".$_SESSION['Error']."');</script>";
    }

    ?>

</body>
</html>