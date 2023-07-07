<?php 
require_once '../connect.php';
if(isset($_POST['btn_DangNhap']))
{
    session_start();
    $username = $_POST["input_username"];
    $password = $_POST["input_password"];
    $username = trim(strip_tags($username));
    $password = trim(strip_tags($password));
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

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
    }
}

?>