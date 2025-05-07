<?php
include('../../html/db/connect.php');

// --- Cập nhật trạng thái tài khoản ---
if (isset($_POST['id_user']) && isset($_POST['trangthai'])) {
    $id_user = intval($_POST['id_user']);
    $trangthai = $_POST['trangthai'];

    $stmt = $con->prepare("UPDATE user SET trangthai = ? WHERE id_user = ?");
    $stmt->bind_param("si", $trangthai, $id_user);

    if ($stmt->execute()) {
        echo "success_" . $trangthai;
    } else {
        echo "fail";
    }
    exit();
}

// --- Cập nhật vai trò người dùng ---
if (isset($_POST['id_user']) && isset($_POST['role'])) {
    $id_user = intval($_POST['id_user']);
    $role = $_POST['role'];

    $stmt = $con->prepare("UPDATE user SET role = ? WHERE id_user = ?");
    $stmt->bind_param("si", $role, $id_user);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "fail";
    }
    exit();
}

echo "invalid_request";
?>

