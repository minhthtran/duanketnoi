<?php
include '../../header_footer/header.php';
require_once "HelperSinhVien.php";

if (isset($_GET['id'])) {
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
    $id = $_GET['id'];
    $helperSV = new HelperSinhVien();
    $rs1 = $helperSV->getToken();
    if($rs1['success'] != 0) {
        $rs2 = $helperSV->getDetailPost($rs1['access_token'], $id);
        if ($rs2['success'] != 0) {
            $postDetail = $rs2['data'][0];
            echo '<script>toastr.clear(noti);</script>';
        } else {
            echo '
            <script>
            alert("Không tìm thấy thông báo")
            window.location.href = "notification_student.php";
            </script>';
        }
    } else {
        echo '
    <script>
        alert("Kết nối không thành công")
        window.location.href = "notification_student.php";
    </script>';
    }
} else {
    echo '
    <script>
        alert("Không tìm thấy thông báo")
        window.location.href = "notification_student.php";
    </script>';
}
?>
    <div class="container_detail_noti">
        <div class="the_ps">THÔNG BÁO KHOA CÔNG NGHỆ THÔNG TIN </div>
        <div class="the_ps">></div>
        <div class="the_ps">THÔNG BÁO CHI TIẾT</div>
    </div>
    <div class="fr-detail">
        <!-- title của chi tiết thông báo -->
        <h2><?php echo $postDetail['title']; ?></h2>
        <div class="description-noti">
            <?php echo $postDetail['description']; ?>
        </div>
            <div class="content-detail">
                <p>Xem thêm: </p>
                <?php for ($i = 1; $i <= count($postDetail['list_attachment']); $i++) { ?>
                    <a href="https://qlsvtt-fit.dotb.cloud/upload/063d1698-7562-11ee-a17f-baad63d197a2" download="Mau_nhanxetcua_dvthuctap.docx" type="application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                        (<?php echo $i; ?>) file-<?php echo $i; ?>;
                    </a>
                    <br>
                <?php } ?>
            </div>
        <!-- <div class= "content-detail">
            <h3> Tiêu đề con của thông báo<h3>
            <div>
            (1) Có bằng Tiến sĩ có chuyên ngành đào tạo phù hợp với vị trí việc làm cần tuyển; 
            (2) Có bằng Thạc sĩ được đào tạo bằng tiếng Anh, có chuyên ngành đào tạo phù hợp với vị trí việc làm cần tuyển; 
            (3) Có bằng Thạc sĩ có ngành/chuyên ngành đào tạo phù hợp tốt nghiệp tại các trường thành viên thuộc Đại học Quốc gia Hà Nội, Đại học Quốc gia TP. Hồ Chí Minh;
             trường đại học Kinh tế TP. HCM, Học viện Công nghệ Bưu chính Viễn thông. Ở bậc đại học phải tốt nghiệp đạt từ loại Khá trở lên.
            </div>

        </div> -->
    </div>

    <br>
<?php include '~/../header_footer/footer.php'; ?>