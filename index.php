<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="~/../css/style.css" rel="stylesheet">
    <script src="/css/function.js"></script>
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
            <form id ="formlogin">
                <div id="logintitle_f">
                    <label>Đăng nhập hệ thống</label>
                </div>
                <div id="item_login">
                    <div class="container_item">
                        <label>Nhập mã số</label><br>
                        <input>
                    </div>
                    <div class="container_item">
                        <label>Mật khẩu</label><br>
                        <div class="password_input_wrapper">
                            <input id="input_password" type="password">
                            <span class="toggle_password"></span>
                            <label id="lblquenmk">
                                Quên mật khẩu?
                            </label>
                        </div>
                    </div>
                    <div class="container_item">
                        <button>
                            Đăng nhập
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>