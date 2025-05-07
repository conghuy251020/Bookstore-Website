<style>
    .end {
        background-color: unset !important;
        height: unset !important;
    }

    .container {
        margin-top: 50px !important;
        max-width: 85% !important;
    }

    .history_order {
        font-family: 'Roboto', sans-serif;
        justify-content: center;
    }

    .history_order_1 {
        font-family: 'Roboto', sans-serif;
        justify-content: center;
        margin-bottom: 30px !important;
    }

    .btn-link {
        font-family: 'Roboto', sans-serif !important;
        font-weight: 700 !important;
        color: oklch(62.3% 0.214 259.815) !important;
        font-size: 17px !important;
    }

    .badge-status {
        border-radius: 20px;
        font-family: 'Roboto', sans-serif;
        display: inline-block;
        padding: 6px 12px;
        font-size: 15px;
        font-weight: bold;
        color: white;
        position: relative;
        background: #999;
        line-height: 1.5;
        transition: all 0.3s ease;
    }

    /* Các trạng thái và màu đuôi tương ứng */
    .badge-waiting {
        background-color: oklch(0.905 0.182 98.111);
        color: rgb(133, 100, 4);
        border-color: oklch(0.905 0.182 98.111);
    }

    .badge-confirmed {
        background-color: oklch(0.828 0.111 230.318);
        color: rgb(12, 84, 96);
        border-color: oklch(0.828 0.111 230.318);
    }

    .badge-delivered {
        background-color: oklch(0.897 0.196 126.665);
        color: rgb(21, 87, 36);
        border-color: oklch(0.897 0.196 126.665);
    }

    .badge-cancelled {
        background-color: oklch(0.704 0.191 22.216);
        color: oklch(0.505 0.213 27.518);
        border-color: oklch(0.704 0.191 22.216);
    }

    .infor_status {
        gap: 10px;
        display: flex;
        align-items: center;
    }

    .ml-3,
    .mx-3 {
        margin-left: unset !important;
    }

    .table thead th {
        color: white;
        font-family: 'Roboto', sans-serif;
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }

    .table thead tr {
        background-color: oklch(58.8% 0.158 241.966);
    }

    .table td,
    .table th {
        font-family: 'Roboto', sans-serif;
        font-weight: 450;
        font-size: 17px;
        color: black;
        padding: .75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table tbody tr:nth-child(odd) {
        background-color: #ffffff;
    }

    .table tbody tr:nth-child(even) {
        background-color: oklch(97.7% 0.013 236.62);
    }

    .table tbody tr:hover {
        background-color: #e0e0e0;
    }

    .table thead {
        border-bottom: 3px solid oklch(58.8% 0.158 241.966);
    }

    .table {
        border: 2px solid oklch(58.8% 0.158 241.966);
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
    }

    .btn-primary {
        font-weight: 600 !important;
        font-family: 'Roboto', sans-serif !important;
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-secondary {
        background-color: oklch(63.7% 0.237 25.331) !important;
        color: #fff;
        border-color: unset !important;
        font-family: 'Roboto' !important;
        font-weight: 600 !important;
    }
</style>

<?php
include('db/connect.php');

$id_user = $_SESSION['id_user'] ?? null;
$sql_hoadon_arr = [];

if ($id_user) {
    $result = mysqli_query($con, "SELECT hoadon.*, khachhang.ho_ten FROM hoadon 
    INNER JOIN khachhang ON hoadon.id_khachhang = khachhang.id_khachhang
    INNER JOIN user ON khachhang.id_user = user.id_user
    WHERE user.id_user = '$id_user'") or die("Lỗi truy vấn: " . mysqli_error($con));
    while ($row = mysqli_fetch_assoc($result)) {
        $sql_hoadon_arr[] = $row;
    }
}

// Lọc theo ngày và mã hóa đơn nếu có
$startDate = $_GET['start_date'] ?? '';
$endDate = $_GET['end_date'] ?? '';
$searchId = $_GET['search'] ?? '';

$filtered = array_filter($sql_hoadon_arr, function ($inv) use ($startDate, $endDate, $searchId) {
    if (!empty($searchId) && stripos($inv['ma_hoadon'], $searchId) === false) return false;
    if (!empty($startDate) && $inv['ngay_tao'] < $startDate) return false;
    if (!empty($endDate) && $inv['ngay_tao'] > $endDate) return false;
    return true;
});
?>

<?php
function getStatusClass($status)
{
    return match ($status) {
        'Chờ xác nhận' => 'badge-waiting',
        'Đã xác nhận' => 'badge-confirmed',
        'Đã giao'     => 'badge-delivered',
        'Đã hủy'      => 'badge-cancelled',
        default       => 'badge-status',
    };
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Lịch sử mua hàng</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jsPDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <!-- jQuery & Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js"></script>

</head>

<body>
    <div class="container">
        <h2 class="history_order">🧾 Lịch sử mua hàng</h2>

        <!-- Form lọc -->
        <form class="form-inline history_order_1" method="get" action="index.php">
            <input type="hidden" name="quanly" value="lichsudonhang">
            <input type="text" class="form-control mr-2" name="search" placeholder="🔍 Mã hóa đơn..." value="<?= htmlspecialchars($searchId) ?>">
            <input type="date" class="form-control mr-2" name="start_date" value="<?= htmlspecialchars($startDate) ?>">
            <input type="date" class="form-control mr-2" name="end_date" value="<?= htmlspecialchars($endDate) ?>">
            <button class="btn btn-primary" type="submit">Lọc</button>
            <a href="index.php?quanly=lichsudonhang" class="btn btn-secondary ml-2">Xóa lọc</a>
        </form>

        <div id="invoiceAccordion" class="mt-4">
            <?php if (empty($filtered)): ?>
                <div class="alert alert-warning">Không tìm thấy hóa đơn phù hợp.</div>
            <?php endif; ?>

            <?php $index = 0; ?>
            <?php foreach ($filtered as $row_sanpham): ?>
                <?php
                $id_hoadon = $row_sanpham['id_hoadon'];
                $sql_chitiet = mysqli_query($con, "SELECT chitietdonhang.*, sanpham.ten_sach 
            FROM chitietdonhang
            INNER JOIN sanpham ON chitietdonhang.id_sanpham = sanpham.id_sanpham 
            WHERE chitietdonhang.id_hoadon = '$id_hoadon'
        ");

                // Tạo mảng sản phẩm để dùng cho cả bảng hiển thị và xuất PDF
                $items = [];

                while ($row_chitiet = mysqli_fetch_array($sql_chitiet)) {
                    $items[] = [
                        'name' => $row_chitiet['ten_sach'],
                        'quantity' => $row_chitiet['so_luong'],
                        'price' => $row_chitiet['thanh_tien']
                    ];
                }

                // Dữ liệu đầy đủ cho exportPDF
                $invoiceData = [
                    'ma' => $row_sanpham['ma_hoadon'],
                    'date' => $row_sanpham['ngay_tao'],
                    'total' => $row_sanpham['tong_tien'],
                    'items' => $items
                ];
                ?>
                <div class="card mb-3">
                    <div class="card-header" id="heading<?= $index ?>">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?= $index ?>">
                                    Hóa đơn #<?= $row_sanpham['ma_hoadon'] ?>
                                </button>
                            </h5>
                            <div class="infor_status">
                                <span style="font-weight: 500;color: black;font-family: 'Roboto';font-size: 16px;"><?= $row_sanpham['ngay_tao'] ?></span> |
                                <span style="font-weight: 500;color: black;font-family: 'Roboto';font-size: 16px;"><?= number_format($row_sanpham['tong_tien'], 0, ',', '.') ?>₫</span>
                                <span class="badge-status <?= getStatusClass($row_sanpham['trang_thai']) ?>">
                                    <?= $row_sanpham['trang_thai'] ?>
                                </span>
                                <button class="btn btn-sm btn-success ml-3" style="margin-left: unset !important; font-weight: 500; font-size: 14px; font-family: 'Roboto', sans-serif;"
                                    onclick='exportPDF(<?= json_encode($invoiceData, JSON_UNESCAPED_UNICODE) ?>)'>
                                    📄 Xuất PDF
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="collapse<?= $index ?>" class="collapse" data-parent="#invoiceAccordion">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($items as $item): ?>
                                        <tr>
                                            <td><?= $item['name'] ?></td>
                                            <td><?= $item['quantity'] ?></td>
                                            <td><?= number_format((float)$item['price'] * 1000, 0, ',', '.') ?>₫</td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php $index++; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <script>
        // Hàm loại bỏ dấu tiếng Việt và chuyển "đ" thành "d"
        function removeVietnameseAccents(str) {
            return str
                .normalize("NFD")
                .replace(/[\u0300-\u036f]/g, "")
                .replace(/đ/g, "d")
                .replace(/Đ/g, "D");
        }

        // Hàm định dạng tiền tệ kiểu Việt Nam
        function formatCurrency(number) {
            return Number(number).toLocaleString('vi-VN');
        }

        async function exportPDF(invoiceData) {
            const {
                jsPDF
            } = window.jspdf;
            const doc = new jsPDF();

            // Font và tiêu đề chính
            doc.setFont("Helvetica", "bold");
            doc.setFontSize(20);
            doc.text(removeVietnameseAccents(`HOA DON #${invoiceData.ma}`), 105, 20, {
                align: "center"
            });

            // Thông tin đơn hàng
            doc.setFontSize(12);
            doc.setFont("Helvetica", "normal");
            doc.text(removeVietnameseAccents(`Ngay mua: ${invoiceData.date}`), 14, 35);

            // Nhân 1000 nếu đơn vị lưu là hàng nghìn (ví dụ: 1720.000 → 1.720.000)
            const totalFormatted = formatCurrency(invoiceData.total * 1);
            doc.text(removeVietnameseAccents(`Tong tien: ${totalFormatted}`), 14, 45);

            // Bảng sản phẩm
            const tableData = invoiceData.items.map(item => [
                removeVietnameseAccents(item.name),
                item.quantity,
                `${formatCurrency(item.price * 1000)}`
            ]);

            doc.autoTable({
                head: [
                    [
                        removeVietnameseAccents("San pham"),
                        removeVietnameseAccents("So luong"),
                        removeVietnameseAccents("Don gia"),
                    ]
                ],
                body: tableData,
                startY: 60,
                styles: {
                    font: "Helvetica",
                    fontSize: 10,
                    cellPadding: 3,
                    overflow: "linebreak"
                },
                headStyles: {
                    fillColor: [52, 152, 219],
                    textColor: 255,
                    halign: "center",
                },
                bodyStyles: {
                    halign: "center"
                }
            });

            // Lưu file PDF
            doc.save(`hoadon_${invoiceData.ma}.pdf`);
        }
    </script>


</body>

</html>