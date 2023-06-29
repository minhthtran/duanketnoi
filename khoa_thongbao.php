<?php include '~/../header_footer/header.php'; ?>

<div >
   <p class="the_p">QUẢN LÝ THÔNG BÁO</p>
    <div class="form_inserttb">
        <div class="container">
            <div class="input-wrapper">
                <input class="input_search" placeholder="Tìm kiếm thông báo" type="text">
                <button class="icon-button">
                <span class="icon">
                    <img src="~/../asset/searchfill.png" alt="Icon">
                </span>
                </button>
            </div>
            <div class="spacer"></div>
            <form class="selectdate">
                <button class="icon-button">
                    <span class="icon">
                        <img src="~/../asset/date.png" alt="Icon">
                    </span>
                </button>
                <input placeholder="from"></input>
                -
                <input placeholder="to"></input>
            </form>
        </div><br>
        <div class ="container">
            <label>Tổng số lượng: 23</label>
            <div class="spacer"></div>
            <button class="create_tb0"> 
                <span class="icon">
                        <img src="~/../asset/announcement_fill.png" alt="Icon">
                </span>
                Tạo thông báo
            </button>
        </div>
        <div id ="list_thongbao">
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
                        <img src="~/../asset/img_thongbao.png" alt="Trailing Image">
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
                    <div class="leading">
                        <button class="create_tb1">Xóa thông báo</button>
                        <button class="create_tb2">Xem chi tiết</button>
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
    </div>
</div><br><br>
<?php include '~/../header_footer/footer.php'; ?>