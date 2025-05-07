<?php
session_start();
include('../../html/db/connect.php');

$action = $_GET['action'] ?? '';

switch ($action) {

    case 'update_status':
        if (isset($_POST['id_hoadon']) && isset($_POST['trang_thai'])) {
            $id_hoadon = mysqli_real_escape_string($con, $_POST['id_hoadon']);
            $trang_thai = mysqli_real_escape_string($con, $_POST['trang_thai']);

            $query = "UPDATE hoadon SET trang_thai = '$trang_thai' WHERE id_hoadon = '$id_hoadon'";
            if (mysqli_query($con, $query)) {
                echo "Cập nhật thành công";
            } else {
                echo "Lỗi cập nhật: " . mysqli_error($con);
            }
        } else {
            echo "Dữ liệu không hợp lệ";
        }
        break;

    case 'delete_with_reason':
        if (isset($_POST['submit_delete_reason'])) {
            $id = intval($_POST['id_hoadon']);
            $ly_do = mysqli_real_escape_string($con, $_POST['ly_do_xoa']);

            $result = mysqli_query($con, "SELECT * FROM hoadon WHERE id_hoadon = $id");
            $row = mysqli_fetch_assoc($result);

            if ($row) {
                $columns = array_keys($row);
                $values = array_map(function ($val) use ($con) {
                    return "'" . mysqli_real_escape_string($con, $val) . "'";
                }, array_values($row));

                $columns[] = 'deleted_at';
                $columns[] = 'ly_do_xoa';
                $values[] = "NOW()";
                $values[] = "'" . $ly_do . "'";

                $sql_insert = "INSERT INTO hoadon_daxoa (" . implode(',', $columns) . ")
                               VALUES (" . implode(',', $values) . ")";
                if (!mysqli_query($con, $sql_insert)) {
                    echo "Lỗi khi thêm hóa đơn đã xóa: " . mysqli_error($con);
                    exit();
                }

                $result_detail = mysqli_query($con, "SELECT * FROM chitietdonhang WHERE id_hoadon = $id");
                while ($row_detail = mysqli_fetch_assoc($result_detail)) {
                    $columns_detail = array_keys($row_detail);
                    $values_detail = array_map(function ($val) use ($con) {
                        return "'" . mysqli_real_escape_string($con, $val) . "'";
                    }, array_values($row_detail));

                    $columns_detail[] = 'deleted_at';
                    $values_detail[] = "NOW()";

                    $sql_insert_detail = "INSERT INTO chitietdonhang_daxoa (" . implode(',', $columns_detail) . ")
                                          VALUES (" . implode(',', $values_detail) . ")";
                    mysqli_query($con, $sql_insert_detail);
                }

                mysqli_query($con, "DELETE FROM chitietdonhang WHERE id_hoadon = $id");
                $stmt = $con->prepare("DELETE FROM hoadon WHERE id_hoadon = ?");
                $stmt->bind_param("i", $id);
                $stmt->execute();

                $_SESSION['success_add'] = "✅ Xóa hóa đơn thành công!";
            } else {
                $_SESSION['error'] = "❌ Không tìm thấy hóa đơn!";
            }

            header("Location: ../../Admin/interface/donhang.php");
            exit();
        }
        break;

    case 'delete_direct':
        if (isset($_GET['id_hoadon'])) {
            $id = intval($_GET['id_hoadon']);
            mysqli_query($con, "DELETE FROM chitietdonhang WHERE id_hoadon = $id");
            mysqli_query($con, "DELETE FROM hoadon WHERE id_hoadon = $id");
            $_SESSION['success_add'] = "✅ Xóa hóa đơn trực tiếp thành công!";
            header("Location: ../../Admin/interface/donhang.php");
            exit();
        }
        break;

    default:
        echo "Không xác định được action hợp lệ!";
        break;

    case 'delete_restore_data':
        // Kiểm tra quyền
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
            echo "not_admin";
            exit();
        }

        if (isset($_POST['id_hoadon'])) {
            $id = intval($_POST['id_hoadon']);

            $stmt = $con->prepare("DELETE FROM hoadon_daxoa WHERE id_hoadon = ?");
            $stmt->bind_param("i", $id);
            $success = $stmt->execute();

            if ($success) {
                echo "success";
            } else {
                echo "error";
            }
        }
        break;
}
?>
