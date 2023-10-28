<?php include '../../header_footer/header.php';
require_once "HelperSinhVien.php";

$helperSV = new HelperSinhVien();
$rs1 = $helperSV->getToken();
$rs2 = array();
if($rs1['success'] == 0) {
    echo "<script>alert('Không truy cập được máy chủ');</script>";
} else {
    $rs2 = $helperSV->getListPosts($rs1['access_token']);
    if($rs2['success'] == 0) {
        echo "<script>alert('Không truy cập được máy chủ');</script>";
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
                <form class="container_listtle">
                    <div class="trailing">
                        <img src="../../asset/img_thongbao.png" alt="Trailing Image">
                    </div>
                    <div class="title">
                        <p><?php echo $rs2['data'][0]['title'] ?></p>
                        <div class="content_title">
                            Tóm tắt nội dung thông báo. Tóm tắt nằm trong khoảng tối đa từ hai đến ba dòng. Tóm tắt nội dung thông báo. Tóm tắt nằm trong khoảng tối đa từ hai đến ba dòng.
                        </div>
                        <div class="footer_title">
                            <label>Người đăng: Nguyễn Văn A</label>
                            <div class="spacer"></div>
                            <label>Thời gian: 3 giờ trước</label>
                        </div>
                    </div>
                </form>
            <?php
                $itemsPerPage = 4; // Số lượng thông báo hiển thị trên mỗi trang
                $totalItems = 10; // Tổng số lượng thông báo
                $totalPages = ceil($totalItems / $itemsPerPage); // Tính tổng số trang

                $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Trang hiện tại, mặc định là trang đầu tiên

                // Xác định vị trí bắt đầu và kết thúc của thông báo trên trang hiện tại
                $startItem = ($currentPage - 1) * $itemsPerPage;
                $endItem = $startItem + $itemsPerPage;

                for ($i = $startItem; $i < $endItem && $i < $totalItems; $i++) {
                    echo '
                    <form class="container_listtle">
                        <div class="trailing">
                            <img src="../../asset/img_thongbao.png" alt="Trailing Image">
                        </div>
                        <div class="title">
                            <p>Tiêu đề thông báo</p>
                            <div class="content_title">
                                Tóm tắt nội dung thông báo. Tóm tắt nằm trong khoảng tối đa từ hai đến ba dòng. Tóm tắt nội dung thông báo. Tóm tắt nằm trong khoảng tối đa từ hai đến ba dòng.
                            </div>      
                            <div class="footer_title">
                                <label>Người đăng: Nguyễn Văn A</label>
                                <div class="spacer"></div>
                                <label>Thời gian: 3 giờ trước</label>
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
                    for ($i = 1; $i < 4; $i++) {
                        echo '  
                        <div class="container_row_list">
                            <icon class="icons"> > </icon>
                            <a href="" class="labeltitlenew">Thông báo mới nhất có tiêu đề Thông báo mới nhất có tiêu đề</a>                          
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