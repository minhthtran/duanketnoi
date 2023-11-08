<?php
include '../../header_footer/header.php';
require_once "HelperSinhVien.php";

session_start();

if(empty($_SESSION['id']) && empty($_SESSION['object'])) {
    $_SESSION['isLoggedIn'] = false;
    $_SESSION['Error'] = "Bạn chưa đăng nhập";
    header("Location: ../../index.php");
} elseif ($_SESSION['object'] != "Student") {
    $_SESSION['isLoggedIn'] = false;
    $_SESSION['Error'] = "Tài khoản không thuộc đối tượng sinh viên";
    header("Location: ../../index.php");
}

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
        <span style="font-weight: bold; font-style: italic;"><i class="fa fa-clock-o"></i> Thời gian: <?php echo date("d-m-Y", strtotime($postDetail['date_posted'])); ?></span>
        <br><br>
        <div class="description-noti">
            <?php echo $postDetail['description']; ?>
        </div>
        <div class="content-detail">
            <?php if(count($postDetail['list_attachment'])>0) echo '<br><p style="font-style: italic;">Các tệp tin đính kèm: </p>'; ?>
            <?php for ($i = 0; $i < count($postDetail['list_attachment']); $i++) { ?>
                <a target="_blank" href="https://qlsvtt-fit.dotb.cloud/index.php?entryPoint=downFromPortal&downloadFromApi=true&type=Notes&id=<?php echo $postDetail['list_attachment'][$i]['id']; ?>">
                    (<?php echo ($i+1); ?>) <?php echo $postDetail['list_attachment'][$i]['filename']; echo ' '; echo $postDetail['list_attachment'][$i]['description']; ?>;
                </a>
                <br>
            <?php } ?>
        </div>
        <br>
        <span style="font-weight: bold; font-style: italic;float: right;"><i class="fa fa-user-circle-o"></i> Người đăng: <?php echo $postDetail['full_user_name']; ?></span>
    </div>

    <br>
<?php include '~/../header_footer/footer.php'; ?>