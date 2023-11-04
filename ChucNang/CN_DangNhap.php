<?php
require_once "helperLogin.php";

if(isset($_POST['btn_DangNhap']))
{
    session_start();
    $username = $_POST["input_username"];
    $password = $_POST["input_password"];
    $username = trim(strip_tags($username));
    $password = trim(strip_tags($password));

    $helperLG = new helperLogin();
    $rs1 = $helperLG->getToken();

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
        $rs2 = $helperLG->loginPortal($username, $password);
        if($rs2['success'] == 0) {
            echo "<script>toastr.clear(noti); toastr.options = {
            closeButton: false,
            preventDuplicates: true,
            progressBar: false,
            timeOut: 0,
            positionClass: \"toast-top-center\",
            };
            var noti = toastr.error(\"Error\");</script>";
            $_SESSION['isLoggedIn'] = false;
            $_SESSION['Error'] = $rs2['error'];
            header("location: ../index.php");
        } else {
            echo '<script>toastr.clear(noti);</script>';
            $_SESSION['object'] = $rs2['object'];
            $_SESSION['id'] = $rs2['id'];
            $_SESSION['isLoggedIn'] = true;
            if($rs2['object'] == "Student") {
                header("location: ../modules/SinhVien/notification_student.php");
            }
        }
    }
}

?>