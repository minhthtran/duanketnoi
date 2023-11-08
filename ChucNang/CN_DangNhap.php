<?php
require_once "helperLogin.php";

if(isset($_POST['btn_DangNhap']))
{
    session_start();
    $username = $_POST["input_username"];
    $password = $_POST["input_password"];
<<<<<<< HEAD

    //Gửi api với tham số truyenf vào là ...

    //api trả về dữ liệu


    $sql = "select * from tbkhoa where Username='$username' and Password='$password' ";
    $user = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if (mysqli_num_rows($user) > 0)
    {
        $row_user = mysqli_fetch_assoc($user);
        $magv = $row_user['MaGV'];
        $quyen = $row_user['Quyen'];
        $_SESSION['quyen'] = $quyen;
        $_SESSION['magv'] = $magv;
        $_SESSION['isLoggedIn'] = true;
        header("location: ../home_khoaaddthongbao.php");
    }
    else
    {
        $_SESSION['logginFalse'] = true;
        header("location: ../index.php");

        // echo '<html><head>
        // <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        // </head>
        // <body>
        // <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        // <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        // <script>
        //   toastr.remove();
        //   toastr.options = {
        //     closeButton: true,
        //     progressBar: true,
        //     positionClass: "toast-top-center",
        //     timeOut: 2000
        //   };
        //   toastr.error("Đăng nhập thất bại");
        // </script></body></html>';

        // echo'<script language="javascript">alert("Kiểm tra lại username và password!");
        // history.back();
        // </script>';
=======
    $username = trim(strip_tags($username));
    $password = trim(strip_tags($password));

    $helperLG = new helperLogin();
    $rs1 = $helperLG->getToken();

    if($rs1['success'] != 0) {
        $rs2 = $helperLG->loginPortal($username, $password);
        if($rs2['success'] == 0) {
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
    } else {
        $_SESSION['isLoggedIn'] = false;
        $_SESSION['Error'] = "Không thể truy cập vào máy chủ";
        header("location: ../index.php");
>>>>>>> 2f49fdf7f36e9d1716c7f0f575eeb866bfa436e1
    }
}

?>