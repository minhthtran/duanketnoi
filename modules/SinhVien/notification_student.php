<?php
include '../../header_footer/header.php';
require_once "HelperSinhVien.php";

session_start();

if (empty($_SESSION['id']) && empty($_SESSION['object'])) {
    $_SESSION['isLoggedIn'] = false;
    $_SESSION['Error'] = "Bạn chưa đăng nhập";
    header("Location: ../../index.php");
} elseif ($_SESSION['object'] != "Student") {
    $_SESSION['isLoggedIn'] = false;
    $_SESSION['Error'] = "Tài khoản không thuộc đối tượng sinh viên";
    header("Location: ../../index.php");
}

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
if ($rs1['success'] == 0) {
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
    if ($rs2['success'] == 0) {
        echo "<script>toastr.clear(noti); toastr.options = {
        closeButton: false,
        preventDuplicates: true,
        progressBar: false,
        timeOut: 0,
        positionClass: \"toast-top-center\",
    };
    var noti = toastr.error(\"Error\");</script>";
    } else {
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
                <input id="input_search" class="input_search" placeholder="Tìm kiếm thông báo" type="text">
                <button id="btn_search" class="icon-button">
                <span class="icon">
                    <img src="../../asset/searchfill.png" alt="Icon">
                </span>
                </button>
            </div>
            <div class="spacer"></div>
            <form class="selectdate">
                <div>
                    <label class="lable_select">Năm </label>
                    <select id="select_year" class="font form-drop">
                        <option class="font" value="all">Tất cả</option>
                    </select>
                    <label class="lable_select">Học kì</label>
                    <select id="select_semester" class="font form-drop">
                        <option class="font" value="all">Tất cả</option>
                        <option class="font" value="Học kỳ 1">Học kỳ 1</option>
                        <option class="font" value="Học kỳ 2">Học kỳ 2</option>
                        <option class="font" value="Học kỳ 3">Học kỳ 3</option>
                    </select>
                </div>
            </form>
        </div>
        <div id="content_notification">
            <div id="list_thongbao">
                <?php
                $itemsPerPage = 6; // Số lượng thông báo hiển thị trên mỗi trang
                $totalItems = count($list_post); // Tổng số lượng thông báo
                $totalPages = ceil($totalItems / $itemsPerPage); // Tính tổng số trang

                $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Trang hiện tại, mặc định là trang đầu tiên

                // Xác định vị trí bắt đầu và kết thúc của thông báo trên trang hiện tại
                $startItem = ($currentPage - 1) * $itemsPerPage;
                $endItem = $startItem + $itemsPerPage;

                for ($i = $startItem; $i < $endItem && $i < $totalItems; $i++) {
                    if (empty($list_post[$i]['post_image']))
                        $src = "../../asset/img_thongbao.png";
                    else $src = "https://qlsvtt-fit.dotb.cloud/upload/resize/" . $list_post[$i]['post_image'];
                    echo '
                    <form class="container_listtle" data-key="' . $list_post[$i]['id'] . '">
                        <div class="trailing">
                            <img src="' . $src . '" alt="Trailing Image">
                        </div>
                        <div class="title">
                            <p>' . $list_post[$i]['title'] . '</p>
                            <div class="content_title">' . $list_post[$i]['short_description'] . '</div>      
                            <div class="footer_title">
                                <label>Người đăng: ' . $list_post[$i]['full_user_name'] . '</label>
                                <div class="spacer"></div>
                                <label>Thời gian: ' . date("d-m-Y", strtotime($list_post[$i]['date_posted'])) . '</label>
                            </div>    
                        </div>
                    </form>';
                }
                // Tạo phân trang
                echo '<div class="pagination">';
                for ($page = 1; $page <= $totalPages && $page < 5; $page++) {
                    echo '<a href="?page=' . $page . '">' . $page . '</a>';
                }
                echo '</div>';
                ?>
            </div>
            <div class="css_notification_news">
                <p class="title_notinew"> Thông báo mới nhất </p>
                <div>
                    <?php
                    for ($i = 0; $i < 5 && $i < $totalItems; $i++) {
                        echo '  
                        <div class="container_row_list">
                            <icon class="icons"> > </icon>
                            <a href="notification_detail_student.php?id=' . $list_post[$i]['id'] . '"  class="labeltitlenew">' . $list_post[$i]['title'] . '</a>                          
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
    $("#btn_search").on("click", function () {
        toastr.remove();
        toastr.options = {
            closeButton: false,
            preventDuplicates: true,
            progressBar: false,
            timeOut: 0,
            positionClass: "toast-top-center",
        };
        var noti = toastr.info("Waiting");

        var search = $("#input_search").val();
        if (search == "") {
            window.location.href = "notification_student.php";
        } else {
            $("#list_thongbao").empty();
            $.ajax({
                type: "POST",
                url: "handleAjaxSinhVien.php",
                data: {
                    type: "searchPosts",
                    search: search,
                },
                success: function (data) {
                    data = JSON.parse(data);
                    if (!data['success']) {
                        toastr.clear(noti);
                        toastr.options = {
                            closeButton: true,
                            preventDuplicates: true,
                            progressBar: true,
                            timeOut: 2000,
                            positionClass: 'toast-top-center',
                        };
                        var noti = toastr.error(data['error']);
                    } else {
                        debugger
                        toastr.clear(noti);
                        $('#list_thongbao').html(data['htmlContent']);
                    }
                },
            });
        }
    })

    $(".container_listtle").on("click", function (event) {
        var formKey = $(this).data("key");
        window.location.href = "notification_detail_student.php?id=" + formKey;
    });

    setInterval(function () {
        $.ajax({
            url: '../../ChucNang/keep-alive.php',
            success: function (response) {
                console.log(response);
            },
        });
    }, 1400000);

    const currentYear = new Date().getFullYear();
    for (let i = 0; i < 3; i++) {
        const year = currentYear - i;
        $("#select_year").append($('<option>', {
            class: "font",
            value: year,
            text: year,
        }));
    }

    $("#select_year, #select_semester").on("change", function () {
        toastr.remove();
        toastr.options = {
            closeButton: false,
            preventDuplicates: true,
            progressBar: false,
            timeOut: 0,
            positionClass: "toast-top-center",
        };
        var noti = toastr.info("Waiting");
        var year = $("#select_year").val();
        var hk = $("#select_semester").val();
        $.ajax({
            type: "POST",
            url: "handleAjaxSinhVien.php",
            data: {
                type: "searchPosts_Time",
                year: year,
                hk: hk,
            },
            success: function (data) {
                data = JSON.parse(data);
                if (!data['success']) {
                    toastr.clear(noti);
                    toastr.options = {
                        closeButton: true,
                        preventDuplicates: true,
                        progressBar: true,
                        timeOut: 2000,
                        positionClass: 'toast-top-center',
                    };
                    var noti = toastr.error(data['error']);
                } else {
                    toastr.clear(noti);
                    $('#list_thongbao').html(data['htmlContent']);
                }
            }
        })
    });
</script>
