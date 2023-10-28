<?php include '../../header_footer/header.php'; ?>
    <meta charset="UTF-8">
<link href="../../css/dangkydetai.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">

<div class="container-register">
    <div class="font-tt title-signup">Đăng kí đề tài</div>
    <!--Thông tin đề tài đăng ký-->
    <div class="infor-topic">
        <div class="infor-topic-student">
            <div class="user-icon-bg">
                <img class="user-icon" alt="" src="../../asset/user-1@2x.png" />
            </div>
            <div class="student-info">
                <p class="font-tt">Trần Minh Thư</p>
                <p>MSSV: 2021010309</p>
            </div>
        </div>
        <hr>
        <div class="infor-topic-type">
            <p>Loại đề tài: </p>
            <select>
                <option value="option1">Quản lý bán hàng</option>
                <option value="option2">Quản lý nhân sự</option>
                <option value="option3">Quản lý kinh doanh</option>
            </select>
        </div>
        <div class="infor-topic-name">
            <p>Tên đề tài: </p>
            <input type="text" class="input-field" placeholder="Nhập tên đề tài cụ thể">
        </div>
        <div class="btn btnRegister">
            <i class="fa fa-file-text"></i>
            <p>Đăng ký</p>
        </div>
    </div>
    <!--Đề tài gợi ý-->
    <div class="recommend-topic">Đề tài gợi ý</div>
    <table class="recommended-topic-table">
        <tr>
            <th>STT</th>
            <th>Tên đề tài</th>
            <th>Số lượng đăng ký</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Quản lý bán hàng</td>
            <td>30 lượt đăng ký</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Quản lý nhân sự</td>
            <td>30 lượt đăng ký</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Quản lý quan hệ khách hàng</td>
            <td>30 lượt đăng ký</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Quản lý kinh doanh trực tuyến</td>
            <td>30 lượt đăng ký</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Quản lý bệnh viện</td>
            <td>30 lượt đăng ký</td>
        </tr>
    </table>
    <!--Tạo phân trang-->
    <div class="paging">
        <ul class="list--paging">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
        </ul>
    </div>
</div>
<?php include '../../header_footer/footer.php'; ?>