<!-- header.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Trang chủ</title>
    <link href="~/../css/style.css" rel="stylesheet">
    <script src="~/../css/function.js"></script>
    <style>
        footer{
            display: flex;
            justify-content: center;
             align-items: center;
            background-color: rgba(51, 51, 51, 1);
            height:300px;
        }
        #header_top{
            width:100%;
            height: 60px;
            background-color: rgba(255, 201, 71, 1);
        }
        #header_left{
            float: left;
            display: flex;
             align-items: center;
        }
        #header_left img{
            margin-left: 15px;
            margin-top: 5px;
            margin-bottom: 5px;
            width: 45px;
            height: 45px;
        }
        #header_left label{
            margin-left: 10px;
            display: block;
            font-family: Arial;
            font-size: 25px;
            font-weight: 700;
            text-transform: uppercase;
            color: rgba(3, 37, 108, 1);
        }
        .header_right{
            height: 60px;
            float: right;
            display: flex;
            align-items: center;
        }
        .header_right label{
            margin-left: 10px;
            margin-right: 20px;
            font-family: Arial;
            font-size: 16px;
            font-weight: 400;
            line-height: 23px;
            letter-spacing: 0em;
            text-align: left;
            color: rgba(3, 37, 108, 1);
        }
        #menu{
            width: 100%;
            height: 50px;
            background-color: rgba(51, 51, 51, 1);
            display: flex; 
            justify-content: center; 
            align-items: center;
        }
        #menu a{
            font-family: Arial;
            font-size: 15px;
            font-weight: 700;
            letter-spacing: 0em;
            text-align: left;
            margin-left: 30px;
            margin-right: 30px;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            text-decoration: none;
        }
        #menu a img{
            width: 30px;
            height: 30px;
        }
        .group_info{
            width: 24%;
            height: 230px;
            margin:30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .group_row{
            width: 150px;
            color: white;
            margin-top: 10px;
            display: flex;
            align-items: center;
            width: 100%;
        }
        #title{
            font-family: Arial;
            font-size:  12px;
            font-weight: 700;
        }
        #content_title{
            font-family: Arial;
            font-size:  12px;
            font-weight: 500;
        }
        .group_row img{
            margin: 10px;
            width: 35px;
            height: 35px;
        }
        .group_info h2{
            color: white;
        }
        .group_info label{

            color: white;
        }
    </style>
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
        </div>
    </header>