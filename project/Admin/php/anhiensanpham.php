<?php
include('../../html/db/connect.php');

$action = $_POST['action'] ?? null;
$id_sanpham = $_POST['id_sanpham'] ?? null;

if (!$action || !$id_sanpham) {
    echo json_encode(['success' => false, 'message' => 'Thiếu thông tin']);
    exit;
}

// ======= 1. Ẩn/Hiện sản phẩm =======
if ($action === 'toggle') {
    $force_hide = $_POST['force_hide'] ?? false;

    $get = mysqli_query($con, "SELECT trangthai FROM sanpham WHERE id_sanpham = '$id_sanpham'");
    $row = mysqli_fetch_assoc($get);
    $current = $row['trangthai'];
    $new_status = ($current == 1) ? 0 : 1;

    if (!$force_hide && $current == 1) {
        $sql_check = mysqli_query($con, "
            SELECT hoadon.*, chitietdonhang.so_luong, chitietdonhang.thanh_tien, sanpham.ten_sach
            FROM chitietdonhang
            INNER JOIN hoadon ON chitietdonhang.id_hoadon = hoadon.id_hoadon
            INNER JOIN sanpham ON chitietdonhang.id_sanpham = sanpham.id_sanpham
            WHERE chitietdonhang.id_sanpham = '$id_sanpham'
        ");

        $hoadon_arr = [];
        while ($row = mysqli_fetch_assoc($sql_check)) {
            $ma = $row['ma_hoadon'];
            $hoadon_arr[$ma]['ma_hoadon'] = $ma;
            $hoadon_arr[$ma]['ngay_tao'] = $row['ngay_tao'];
            $hoadon_arr[$ma]['tong_tien'] = $row['tong_tien'];
            $hoadon_arr[$ma]['items'][] = [
                'name' => $row['ten_sach'],
                'quantity' => $row['so_luong'],
                'price' => $row['thanh_tien']
            ];
        }

        if (!empty($hoadon_arr)) {
            echo json_encode([
                'has_invoice' => true,
                'hoadon' => array_values($hoadon_arr),
                'action' => 'hide'
            ]);
            exit;
        }
    }

    $update = mysqli_query($con, "UPDATE sanpham SET trangthai = '$new_status' WHERE id_sanpham = '$id_sanpham'");

    echo json_encode([
        'success' => $update,
        'new_status' => $new_status,
        'action' => ($new_status == 0) ? 'hide' : 'show'
    ]);
    exit;
}

// ======= 2. Kiểm tra sản phẩm có trong hóa đơn =======
if ($action === 'check_invoice') {
    $sql = mysqli_query($con, "
        SELECT * FROM chitietdonhang 
        WHERE id_sanpham = '$id_sanpham' 
        LIMIT 1
    ");
    $in_invoice = mysqli_num_rows($sql) > 0;
    echo json_encode(['in_invoice' => $in_invoice]);
    exit;
}

// ======= 3. Xóa sản phẩm nếu chưa bán =======
if ($action === 'delete') {
    // Kiểm tra ID có đúng không
    if (!$id_sanpham || !is_numeric($id_sanpham)) {
        echo json_encode(['success' => false, 'message' => 'ID sản phẩm không hợp lệ']);
        exit;
    }

    // Kiểm tra có nằm trong hóa đơn không
    $sql = mysqli_query($con, "
        SELECT * FROM chitietdonhang 
        WHERE id_sanpham = '$id_sanpham' 
        LIMIT 1
    ");
    if (mysqli_num_rows($sql) > 0) {
        echo json_encode([
            'success' => false,
            'message' => 'Sản phẩm đã tồn tại trong hóa đơn, không thể xóa.'
        ]);
        exit;
    }

    // Thử xóa và kiểm tra kết quả rõ ràng
    $delete_query = "DELETE FROM sanpham WHERE id_sanpham = '$id_sanpham'";
    $delete = mysqli_query($con, $delete_query);

    if (!$delete) {
        echo json_encode([
            'success' => false,
            'message' => 'Lỗi MySQL: ' . mysqli_error($con),
            'query' => $delete_query
        ]);
    } else {
        echo json_encode(['success' => true]);
    }
    exit;
}

echo json_encode(['success' => false, 'message' => 'Hành động không hợp lệ']);
?>
