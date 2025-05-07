<?php
session_start();
?>

<?php
include('../../html/db/connect.php');

if (isset($_POST['id_user']) && isset($_POST['username']) && isset($_POST['email'])) {
    $id_user = intval($_POST['id_user']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $current_password = $_POST['current_password'] ?? '';
    $new_password = $_POST['new_password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Kiểm tra độ dài username
    if (mb_strlen($username) < 6) {
        echo "Username phải dài hơn 6 ký tự!";
        exit;
    }

    // Regex: chỉ cho phép chữ, số và khoảng trắng
    if (!preg_match("/^[\p{L}\s0-9]+$/u", $username)) {
        echo "Username chỉ được chứa chữ cái, số và khoảng trắng!";
        exit;
    }

    // Kiểm tra email trùng (trừ chính mình)
    $stmt = $con->prepare("SELECT id_user FROM user WHERE email = ? AND id_user != ?");
    $stmt->bind_param("si", $email, $id_user);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        echo "Email đã tồn tại!";
        exit;
    }
    $stmt->close();

    // Kiểm tra username trùng (trừ chính mình)
    $stmt = $con->prepare("SELECT id_user FROM user WHERE username = ? AND id_user != ?");
    $stmt->bind_param("si", $username, $id_user);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        echo "Họ tên đã tồn tại!";
        exit;
    }
    $stmt->close();

    // Xử lý ảnh
    $img_filename = null;
    if (isset($_FILES['img_file']) && $_FILES['img_file']['error'] == 0) {
        $target_dir = "../../img/";
        $img_filename = basename($_FILES["img_file"]["name"]);
        $target_file = $target_dir . $img_filename;

        if (!move_uploaded_file($_FILES["img_file"]["tmp_name"], $target_file)) {
            echo "fail_upload";
            exit;
        }
    }

    // Kiểm tra đổi mật khẩu
    $hashed_new_password = null;
    if (!empty($current_password) || !empty($new_password)) {
        if (mb_strlen($new_password) < 6) {
            echo "Mật khẩu mới phải dài hơn 6 ký tự!";
            exit;
        }

        if ($new_password !== $confirm_password) {
            echo "Mật khẩu xác nhận không khớp!";
            exit;
        }

        // Lấy mật khẩu cũ để xác thực
        $stmt = $con->prepare("SELECT password FROM user WHERE id_user = ?");
        $stmt->bind_param("i", $id_user);
        $stmt->execute();
        $stmt->bind_result($hashed_password);
        $stmt->fetch();
        $stmt->close();

        if (!password_verify($current_password, $hashed_password)) {
            echo "wrong_password";
            exit;
        }

        $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);
    }

    // Cập nhật dựa trên các giá trị có
    if ($img_filename && $hashed_new_password) {
        $stmt = $con->prepare("UPDATE user SET username = ?, email = ?, img = ?, password = ? WHERE id_user = ?");
        $stmt->bind_param("ssssi", $username, $email, $img_filename, $hashed_new_password, $id_user);
    } elseif ($img_filename) {
        $stmt = $con->prepare("UPDATE user SET username = ?, email = ?, img = ? WHERE id_user = ?");
        $stmt->bind_param("sssi", $username, $email, $img_filename, $id_user);
    } elseif ($hashed_new_password) {
        $stmt = $con->prepare("UPDATE user SET username = ?, email = ?, password = ? WHERE id_user = ?");
        $stmt->bind_param("sssi", $username, $email, $hashed_new_password, $id_user);
    } else {
        $stmt = $con->prepare("UPDATE user SET username = ?, email = ? WHERE id_user = ?");
        $stmt->bind_param("ssi", $username, $email, $id_user);
    }

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "fail_db";
    }

    $stmt->close();
} else {
    echo "invalid_data";
}
?>


<?php
if (isset($_POST['themnguoidung'])) {
    $username = mysqli_real_escape_string($con, strip_tags($_POST['username']));
    $password_raw = $_POST['password'];
    $repassword = $_POST['repassword'];
    $email = mysqli_real_escape_string($con, strip_tags($_POST['email']));
    $img_name = "";

    // Regex kiểm tra username
    if (!preg_match("/^[\p{L}\s0-9]+$/u", $username)) {
        $_SESSION['error'] = "❌ Username chỉ được chứa chữ cái, số và khoảng trắng!";
        header("Location: ../../html/index.php?quanly=taikhoan");
        exit();
    }

    if (strlen($username) <= 6) {
        $_SESSION['error'] = "❌ Username phải dài hơn 6 ký tự!";
        header("Location: ../../html/index.php?quanly=taikhoan");
        exit();
    }

    if ($password_raw !== $repassword) {
        $_SESSION['error'] = "❌ Mật khẩu không khớp!";
        header("Location: ../../html/index.php?quanly=taikhoan");
        exit();
    }

    if (strlen($password_raw) <= 6) {
        $_SESSION['error'] = "❌ Mật khẩu phải dài hơn 6 ký tự!";
        header("Location: ../../html/index.php?quanly=taikhoan");
        exit();
    }

    $password = password_hash(mysqli_real_escape_string($con, strip_tags($password_raw)), PASSWORD_BCRYPT);

    // Xử lý upload ảnh nếu có
    if (!empty($_FILES['img_file']['name'])) {
        $img_name = time() . "_" . $_FILES['img_file']['name'];
        move_uploaded_file($_FILES['img_file']['tmp_name'], "../../img/" . $img_name);
    }

    // Kiểm tra email đã tồn tại
    $check_email = $con->query("SELECT * FROM user WHERE email = '$email'");
    if ($check_email && $check_email->num_rows > 0) {
        $_SESSION['error'] = "❌ Email đã tồn tại!";
        header("Location: ../../html/index.php?quanly=taikhoan");
        exit();
    }

    // Kiểm tra username đã tồn tại
    $check_username = $con->query("SELECT * FROM user WHERE username = '$username'");
    if ($check_username && $check_username->num_rows > 0) {
        $_SESSION['error'] = "❌ Username đã tồn tại!";
        header("Location: ../../html/index.php?quanly=taikhoan");
        exit();
    }

    // Thêm vào bảng user
    $sql_user = $con->query("INSERT INTO user(username, password, email, img, role) 
                            VALUES ('$username', '$password', '$email', '$img_name', 'khachhang')");

    if ($sql_user) {
        $id_user = $con->insert_id;
        $sql_khachhang = $con->query("INSERT INTO khachhang(id_user, ho_ten, email) 
                                      VALUES ('$id_user', '$username', '$email')");

        if ($sql_khachhang) {
            $_SESSION['success_add'] = "✅ Thêm người dùng thành công!";
            header("Location: ../../Admin/interface/account.php");
            exit();
        } else {
            $_SESSION['error'] = "❌ Lỗi khi tạo khách hàng!";
        }
    } else {
        $_SESSION['error'] = "❌ Lỗi khi thêm người dùng!";
    }

    header("Location: ../../Admin/interface/account.php");
    exit();
}
?>

<?php
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Xoá bản ghi trong bảng user
    $delete_user = $con->query("DELETE FROM user WHERE id_user = $id");

    // Xoá thêm ở bảng khachhang nếu có (nếu bạn muốn)
    $delete_khachhang = $con->query("DELETE FROM khachhang WHERE id_user = $id");

    if ($delete_user) {
        $_SESSION['success_add'] = "✅ Xóa người dùng thành công!";
    } else {
        $_SESSION['error'] = "❌ Xóa người dùng thất bại!";
    }

    header("Location: ../../Admin/interface/account.php");
    exit();
}
?>

