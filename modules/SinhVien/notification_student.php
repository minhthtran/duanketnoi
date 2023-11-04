<?php include '../../header_footer/header.php';
require_once "HelperSinhVien.php";

echo '<script>
    toastr.remove();
    toastr.options = {
        closeButton: false,
        preventDuplicates: true,
        progressBar: false,
        timeOut: 0,
        positionClass: "toast-top-center",
    };
    var noti = toastr.info("Waiting");
    </script>';

$helperSV = new HelperSinhVien();
$rs1 = $helperSV->getToken();
$list_post = array();
if($rs1['success'] == 0) {
    echo "<script>toastr.clear(noti); toastr.options = {
        closeButton: false,
        preventDuplicates: true,
        progressBar: false,
        timeOut: 0,
        positionClass: \"toast-top-center\",
    };
    var noti = toastr.error(\"Error\");</script>";
} else {
    $rs2 = $helperSV->getListPosts($rs1['access_token']);
    if($rs2['success'] == 0) {
        echo "<script>toastr.clear(noti); toastr.options = {
        closeButton: false,
        preventDuplicates: true,
        progressBar: false,
        timeOut: 0,
        positionClass: \"toast-top-center\",
    };
    var noti = toastr.error(\"Error\");</script>";
    } else
    {
        echo '<script>toastr.clear(noti);</script>';
        $list_post = $rs2['data'];
    }
}


?>
<div class="container-nofti">
   <p class="the_p">THÔNG BÁO KHOA CÔNG NGHỆ THÔNG TIN</p>
    <div class="form_inserttb">
        <div class="container">
            <div class="input-wrapper">
                <input class="input_search" placeholder="Tìm kiếm thông báo" type="text">
                <button class="icon-button">
                <span class="icon">
                    <img src="../../asset/searchfill.png" alt="Icon">
                </span>
                </button>
            </div>
            <div class="spacer"></div>
            <form class="selectdate">
                <div >
                    <label class="lable_select">Năm </label>
                    <select class="font form-drop">
                        <!-- Các tùy chọn trong dropdown -->
                        <option class="font" value="option1">Tất cả</option>
                        <option class="font" value="option2">2021</option>
                        <option class="font" value="option3">2022</option>
                        <option class="font" value="option4">2023</option>
                    </select>
                    <label class="lable_select">Học kì</label>
                    <select class="font form-drop">
                        <!-- Các tùy chọn trong dropdown -->
                        <option class="font" value="option1">Tất cả</option>
                        <option class="font" value="option2">2021</option>
                        <option class="font" value="option3">2022</option>
                        <option class="font" value="option4">2023</option>
                    </select>
                </div>
            </form>
        </div>
        <div id ="content_notification">
            <div id ="list_thongbao">
            <?php
                $itemsPerPage = 4; // Số lượng thông báo hiển thị trên mỗi trang
                $totalItems = count($list_post); // Tổng số lượng thông báo
                $totalPages = ceil($totalItems / $itemsPerPage); // Tính tổng số trang

                $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Trang hiện tại, mặc định là trang đầu tiên

                // Xác định vị trí bắt đầu và kết thúc của thông báo trên trang hiện tại
                $startItem = ($currentPage - 1) * $itemsPerPage;
                $endItem = $startItem + $itemsPerPage;

                for ($i = $startItem; $i < $endItem && $i < $totalItems; $i++) {
                    if(empty($list_post[$i]['post_image']))
                        $src = "../../asset/img_thongbao.png";
                    else $src = "https://qlsvtt-fit.dotb.cloud/upload/resize/". $list_post[$i]['post_image'];
                    echo '
                    <form class="container_listtle" data-key="'.$list_post[$i]['id'].'">
                        <div class="trailing">
                            <img src="'.$src.'" alt="Trailing Image">
                        </div>
                        <div class="title">
                            <p>'.$list_post[$i]['title'].'</p>
                            <div class="content_title">'.$list_post[$i]['short_description'].'</div>      
                            <div class="footer_title">
                                <label>Người đăng: '.$list_post[$i]['full_user_name'].'</label>
                                <div class="spacer"></div>
                                <label>Thời gian: '.$list_post[$i]['date_posted'].'</label>
                            </div>    
                        </div>
                    </form>';
                }
                // Tạo phân trang
                echo '<div class="pagination">';
                for ($page = 1; $page <= $totalPages; $page++) {
                    echo '<a href="?page=' . $page . '">' . $page . '</a>';
                }
                echo '</div>';
                ?>
            </div>
            <div class="css_notification_news">
                   <p class="title_notinew"> Thông báo mới nhất </p>
                   <div>
                    <?php
                    for ($i = 0; $i < 4 && $i < $totalItems; $i++) {
                        echo '  
                        <div class="container_row_list">
                            <icon class="icons"> > </icon>
                            <a href="" data-key="'.$list_post[$i]['id'].'" class="labeltitlenew">'.$list_post[$i]['title'].'</a>                          
                        </div>
                    ';
                    }
                    ?>
                   </div>
            </div>
        </div>
    </div>
</div>
<?php include '../../header_footer/footer.php'; ?>
<script>
    $(".container_listtle").on("click", function(event) {
        toastr.remove();
        toastr.options = {
            closeButton: false,
            progressBar: false,
            positionClass: 'toast-top-center',
        };
        toastr.info('Waiting')
        var formKey = $(this).data("key");
        $.ajax({
            type: "POST",
            url: "handleAjaxSinhVien.php",
            data: {
                type: "getDetailPost",
                post_id: formKey,
            },
            success: function (data) {
                debugger
                toastr.remove();
                data = JSON.parse(data);
            }
        });
    });
    $(".container_listtle").on("click", function(event) {
        var formKey = $(this).data("key");
        window.location.href = "notification_detail_student.php?id=" + formKey;
    });
    $(".labeltitlenew").on("click", function(event) {
        var dataKey = $(this).data("key");
        window.location.href = "notification_detail_student.php?id=" + dataKey;
    });
</script>
