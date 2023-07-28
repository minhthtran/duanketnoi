<?php include '../../header_footer/header.php'; ?>
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Đăng kí giảng viên</title>-->
<!--    <link rel="stylesheet" href="~/../css/dangkygiangvien.css">-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<!--</head>-->
<!--<body>-->
<!--    -->
<!--</body>-->
<!--</html>-->
    <div class="body">
        <div class="title-signup">Đăng kí giảng viên</div>
        <div class="search-filter">
            <div class="search-bar">
                <input type="text" class="search" placeholder="Tìm kiếm giảng viên">
                <i class="fa fa-search"></i>
            </div>
            <div class="filter">
                <p class="filter__year">Năm học</p>
                <p class="filter__semester">Học kì</p>
            </div>
        </div>
        <div class="total">Tổng số giảng viên:</div>
        <!--Start list-->
        <div class="list-teacher">
            <div class="teacher">
                <div class="teacher__img">
                    <img src="../../asset/GV001_NGUYENTHANHCONG.png" alt="">
                </div>
                <div class="teacher__info">
                    <p class="info__name">Trương Thành Công</p>
                    <div class="info__content">
                        <div class="content__degree">Học vị:</div>
                        <div class="content__position">Chức vụ:</div>
                        <div class="content__target">Chỉ tiêu:</div>
                        <div class="content__register">Số lượng đăng ký</div>
                    </div>
                </div>
                <div class="info__btn">
                    <button class="btn__register">Đã đăng ký
                        <i class="fa fa-check"></i>
                    </button>
                    <button class="btn__see-detail">Xem chi tiết
                        <i class="fa fa-ellipsis-v"></i>
                    </button>
                </div>
            </div>
        </div>
        <!--End list-->
        <div class="paging">

        </div>
    </div>
<?php include '../../header_footer/footer.php'; ?>