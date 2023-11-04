<?php include '../../header_footer/header.php'; ?>
<meta charset="UTF-8">
<link href="../../css/task.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">

<div class="container-register">
    <div class="add-task">
        <div class="font-tt title-signup">Công việc (27)</div>
        <!--        <a href="" class="btn add-task-button">-->
        <!--            <i class="fa fa-plus"></i>-->
        <!--            <p>Tạo công việc</p>-->
        <!--        </a>-->
    </div>
    <div class="search-bar">
        <input type="text" class="search" placeholder="Tìm kiếm với tiêu đề, mã công việc, ...">
        <i class="fa fa-search"></i>
    </div>
    <!--Table task-->
    <table class="task-table">
        <tr>
            <th></th>
            <th>Ưu tiên</th>
            <th>Người phụ trách</th>
            <th>Tiêu đề</th>
            <th>Ngày bắt đầu</th>
            <th>Ngày đến hạn</th>
            <th>Trạng thái</th>
        </tr>
        <tr>
            <td><input type="checkbox" id="checkbox1"></td>
            <td><div class="low table-task-level">Thấp</div></td>
            <td>Trần Minh Thư</td>
            <td>Nộp báo cáo công việc tuần 1</td>
            <td>20/10/2023</td>
            <td>20/11/2023</td>
            <td><div href="task-detail.php" class="open table-task-status"><a href="task-detail.php">Mở</a></div></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="checkbox1"></td>
            <td><div class="height table-task-level">Cao</div></td>
            <td>Nguyễn Nhật Hoài</td>
            <td>Nộp báo cáo công việc tuần 1</td>
            <td>20/10/2023</td>
            <td>20/11/2023</td>
            <td><div class="inprogress table-task-status">Đang thực hiện</div></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="checkbox1"></td>
            <td><div class="normal table-task-level">Trung bình</div></td>
            <td>Hồ Thạnh Phước</td>
            <td>Nộp báo cáo công việc tuần 1</td>
            <td>20/10/2023</td>
            <td>20/11/2023</td>
            <td><div class="completed table-task-status">Hoàn thành</div></td>
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