<?php
session_start();
ob_start(); // Ngăn lỗi header bị gửi trước
?>
<style>
    .alert {
        padding: 10px;
        border-radius: 5px;
        text-align: center;
        font-weight: bold;
    }

    .alert-danger {
        font-size: 17px;
        font-family: 'Roboto', sans-serif;
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    .alert-success {
        font-size: 17px;
        font-family: 'Roboto', sans-serif;
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .form-box {
        width: 450px !important;
        height: 600px !important;
        position: relative;
        margin: 6% auto;
        background: white;
        padding: 5px;
        overflow: hidden;
    }

    .toggle-btn {
        font-family: 'Roboto', sans-serif;
        font-weight: 450;
        font-size: 16px !important;
        padding: 10px 35px !important;
        cursor: pointer;
        background: transparent;
        border: 0;
        outline: none;
        position: relative;
    }

    .button-box {
        width: 250px !important;
        margin: 35px auto;
        position: relative;
        box-shadow: 0 0 20px 9px #a5f3fc;
        border-radius: 30px;
    }

    #btn {
        top: 0;
        left: 0;
        position: absolute;
        width: 130px !important;
        height: 100%;
        background: linear-gradient(to right, #06b6d4, #a5f3fc);
        border-radius: 30px;
        transition: .5s;
    }

    .social-icons img {
        width: 35px !important;
        margin: 0 12px;
        box-shadow: 0 0 20px 0 #7f7f7f3d;
        cursor: pointer;
        border-radius: 50%;
    }

    .input-group {
        top: 180px;
        position: absolute;
        width: 330px !important;
        transition: .5s;
    }

    .input-field {
        font-size: 16px;
        width: 100%;
        padding: 10px 0px;
        margin: 12px 0 !important;
        border-left: 0;
        border-top: 0;
        border-right: 0;
        border-bottom: 1px solid #999;
        outline: none;
        background: transparent;
    }

    .chech-box {
        margin: 25px 10px 30px 0px !important;
    }

    .password {
        font-size: 15px !important;
        top: 149px !important;
        color: #777;
        bottom: 68px;
        position: unset !important;
    }

    .submit-btn {
        font-weight: 500;
        font-size: 18px;
        width: 100% !important;
        padding: 15px 23px !important;
        cursor: pointer;
        display: block;
        margin: auto;
        background: linear-gradient(to right, #06b6d4, #a5f3fc);
        border: 0;
        outline: none;
        border-radius: 30px;
    }

    .submit-btn a {
        font-weight: 500;
        font-size: 18px;
        text-decoration: none;
        color: black;
    }

    #login1 {
        left: 60px;
    }

    #register1 {
        left: 450px;
    }

    .submit-btn-1 {
        font-weight: 500;
        font-size: 18px;
        width: 100% !important;
        padding: 15px 23px !important;
        cursor: pointer;
        display: block;
        margin: 30px auto 0px auto !important;
        background: linear-gradient(to right, #06b6d4, #a5f3fc);
        border: 0;
        outline: none;
        border-radius: 30px;
    }

    .return_page {
        align-items: center;
        margin-top: 25px;
        display: flex;
    }

    .return_page i {
        font-size: 20px;
    }

    .login-admin {
        margin-left: 10px !important;
        margin-top: unset !important;
        font-family: 'Roboto', sans-serif;
        color: #777;
        font-size: 18px !important;
        text-decoration: none;
    }
</style>
<?php
if (isset($_POST['dangky'])) {
    include('db/connect.php'); // Kết nối CSDL

    $username = mysqli_real_escape_string($con, strip_tags($_POST['username']));
    $password = password_hash(mysqli_real_escape_string($con, strip_tags($_POST['password'])), PASSWORD_BCRYPT);
    $password1 = mysqli_real_escape_string($con, strip_tags($_POST['password']));
    $repassword = mysqli_real_escape_string($con, strip_tags($_POST['repassword']));
    $email = mysqli_real_escape_string($con, strip_tags($_POST['email']));

    $checkusername = $con->query("SELECT * FROM user WHERE username='$username'");
    $checkemail = $con->query("SELECT * FROM user WHERE email='$email'");

    $dodaimatkhau = strlen($password1);
    $dodaiuser = strlen($username);

    if ($username == "" || $password1 == "" || $email == "") {
        $_SESSION['error'] = "❌ Vui lòng nhập đầy đủ thông tin";
    } elseif (!preg_match("/^[\p{L}\s0-9]+$/u", $username)) {
        $_SESSION['error'] = "❌ Username không chứa kí tự đặc biệt ngoài chữ cái, số và khoảng trắng";
    } elseif ($dodaimatkhau < 6) {
        $_SESSION['error'] = "❌ Mật khẩu phải lớn hơn 6 kí tự";
    } elseif ($dodaiuser < 6) {
        $_SESSION['error'] = "❌ Username phải lớn hơn 6 kí tự";
    } elseif ($password1 !== $repassword) {
        $_SESSION['error'] = "❌ Mật khẩu không khớp";
    } elseif ($checkusername->num_rows !== 0) {
        $_SESSION['error'] = "❌ Username đã tồn tại!";
    } elseif ($checkemail->num_rows !== 0) {
        $_SESSION['error'] = "❌ Email đã tồn tại!";
    } else {
        // Chèn user vào bảng user
        $sql_user = $con->query("INSERT INTO user(username, password, email, role) VALUES ('$username', '$password', '$email', 'customer')");

        if ($sql_user) {
            // Lấy id_user vừa tạo
            $id_user = $con->insert_id;

            // Chèn id_user vào bảng khach_hang
            $sql_khachhang = $con->query("INSERT INTO khachhang(id_user,ho_ten,email) VALUES ('$id_user','$username','$email')");

            if ($sql_khachhang) {
                $_SESSION['success_add'] = "✅ Đăng ký tài khoản thành công!";
                $_SESSION["username"] = $username;
                header("Location: index.php?quanly=taikhoan&username=" . urlencode($username));
                exit();
            } else {
                $_SESSION['error'] = "❌ Lỗi khi tạo khách hàng, vui lòng thử lại!";
            }
        } else {
            $_SESSION['error'] = "❌ Lỗi hệ thống, vui lòng thử lại sau!";
        }
    }
}

if (isset($_POST['dangnhap'])) {
    include('db/connect.php');

    $username = $con->real_escape_string(strip_tags($_POST['username']));
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "❌ Vui lòng nhập đầy đủ thông tin";
    } elseif (!preg_match("/^[\p{L}\s0-9]+$/u", $username)) {
        $_SESSION['error'] = "❌ Username không chứa kí tự đặc biệt ngoài chữ cái, số và khoảng trắng";
    } else {
        $checkvar = $con->query("SELECT * FROM user WHERE username = '$username'")->fetch_array();

        if (empty($checkvar)) {
            $_SESSION['error'] = "❌ Username không tồn tại";
        } elseif ($checkvar['trangthai'] == 'không hoạt động') {
            $_SESSION['error'] = "❌ Tài khoản đã bị khóa. Vui lòng liên hệ quản trị viên.";
        } elseif (!password_verify($password, $checkvar['password'])) {
            $_SESSION['error'] = "❌ Sai mật khẩu";
        } else {
            $_SESSION['username'] = $username;
            $_SESSION['id_user'] = $checkvar['id_user'];
            $_SESSION['role'] = $checkvar['role'];

            if ($checkvar['role'] == 'admin' || $checkvar['role'] == 'nhanvien') {
                header("Location: ../Admin/interface/trangchu.php");
            } else {
                header("Location: index.php");
            }
            exit();
        }
    }
}


ob_end_flush(); // Kết thúc bộ đệm đầu ra
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Admin/Login.html">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Form</title>
</head>

<body>
    <div class="form">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <img src="../img/fb.png" alt="">
                <img src="../img/tw.png" alt="">
                <img src="../img/gp.png" alt="">
            </div>
            <form id="login1" class="input-group" method="POST">
                <?php if (!empty($_SESSION['error'])) { ?>
                    <div class="alert alert-danger"><?= $_SESSION['error'];
                                                    unset($_SESSION['error']); ?></div>
                <?php } elseif (!empty($_SESSION['success_add'])) { ?>
                    <div class="alert alert-success"><?= $_SESSION['success_add'];
                                                        unset($_SESSION['success_add']); ?></div>
                <?php } ?>
                <input type="text" class="input-field" placeholder="Username" name="username" required>
                <input type="password" class="input-field" placeholder="Enter Password" name="password" required>
                <input type="checkbox" class="chech-box"><span class="password">Remember Password</span>
                <button type="submit" class="submit-btn" id="dangnhap" name="dangnhap">Log In</button>
                <div class="return_page">
                    <a href="index.php"><i class="fa-solid fa-house-user" style="color: #fd7b12;"></i></a>
                    <a href="index.php" class="login-admin">Trang chủ</a>
                </div>
            </form>
            <form id="register1" class="input-group" method="POST">
                <input type="text" class="input-field" placeholder="Username" name="username" required>
                <input type="password" class="input-field" placeholder="Password" name="password" required>
                <input type="password" class="input-field" placeholder="RePassword" name="repassword" required>
                <input type="email" class="input-field" placeholder="Email" name="email" required>

                <button type="submit" class="submit-btn-1" id="dangky" name="dangky">Register</button>
            </form>
        </div>
    </div>
    <script>
        var x = document.getElementById("login1");
        var y = document.getElementById("register1");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "60px";
            z.style.left = "120px";
        }

        function login() {
            x.style.left = "60px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>

</html>