<?php
if (isset($_POST['magiamgia'])) {
    include 'db/connect.php'; // Kết nối CSDL

    $username = $_SESSION['username'];

    // Lấy id_user từ bảng user
    $sql_user = "SELECT id_user FROM user WHERE username = ?";
    $stmt_user = mysqli_prepare($con, $sql_user);
    mysqli_stmt_bind_param($stmt_user, "s", $username);
    mysqli_stmt_execute($stmt_user);
    $result_user = mysqli_stmt_get_result($stmt_user);

    if ($row_user = mysqli_fetch_assoc($result_user)) {
        $id_user = $row_user['id_user'];

        // Lấy id_khachhang từ bảng khachhang
        $sql_khachhang = "SELECT id_khachhang FROM khachhang WHERE id_user = ?";
        $stmt_khachhang = mysqli_prepare($con, $sql_khachhang);
        mysqli_stmt_bind_param($stmt_khachhang, "i", $id_user);
        mysqli_stmt_execute($stmt_khachhang);
        $result_khachhang = mysqli_stmt_get_result($stmt_khachhang);

        if ($row_khachhang = mysqli_fetch_assoc($result_khachhang)) {
            $id_khachhang = $row_khachhang['id_khachhang'];

            // Kiểm tra hóa đơn "Đang xử lí"
            $sql_check_invoice = "SELECT id_hoadon FROM hoadon WHERE id_khachhang = ? AND trang_thai = 'Đang xử lí' LIMIT 1";
            $stmt_check_invoice = mysqli_prepare($con, $sql_check_invoice);
            mysqli_stmt_bind_param($stmt_check_invoice, "i", $id_khachhang);
            mysqli_stmt_execute($stmt_check_invoice);
            $result_check_invoice = mysqli_stmt_get_result($stmt_check_invoice);

            if ($row_invoice = mysqli_fetch_assoc($result_check_invoice)) {
                $id_hoadon = $row_invoice['id_hoadon'];

                if ($_POST['magiamgia'] === 'remove') {
                    // Xóa mã giảm giá
                    $sql_update = "UPDATE hoadon SET magiamgia = NULL WHERE id_hoadon = ?";
                    $stmt_update = mysqli_prepare($con, $sql_update);
                    mysqli_stmt_bind_param($stmt_update, "i", $id_hoadon);
                    $_SESSION['magiamgia'] = null; // Xóa khỏi session
                    // Xóa mã giảm giá và tổng tiền áp dụng giảm giá, cập nhật lại tổng tiền về giá trị ban đầu
                    unset($_SESSION['totalPrice']); // Xóa tổng tiền đã giảm giá trong session
                } else {
                    // Áp dụng mã giảm giá
                    $discountCode = mysqli_real_escape_string($con, strip_tags($_POST["magiamgia"]));
                    $sql_update = "UPDATE hoadon SET magiamgia = ? WHERE id_hoadon = ?";
                    $stmt_update = mysqli_prepare($con, $sql_update);
                    mysqli_stmt_bind_param($stmt_update, "si", $discountCode, $id_hoadon);
                    $_SESSION['magiamgia'] = $discountCode; // Lưu vào session
                }

                // Lưu tổng tiền vào session
                if (isset($_POST['totalPrice'])) {
                    $_SESSION['totalPrice'] = $_POST['totalPrice'];
                }

                if (mysqli_stmt_execute($stmt_update)) {
                    echo ($_POST['magiamgia'] === 'remove') ? "Mã giảm giá đã được áp dụng!" : "Mã giảm giá đã được xóa!";
                } else {
                    echo "Lỗi khi cập nhật mã giảm giá!";
                }
            } else {
                echo "Không tìm thấy hóa đơn 'Đang xử lí'!";
            }
        } else {
            echo "Không tìm thấy khách hàng!";
        }
    } else {
        echo "Không tìm thấy người dùng!";
    }
}
?>


<div class="order_summary_cart_2">
    <div class="frame_discount">
        <div class="order_discount">
            <div class="order_discount_1">
                <div class="input_discount">
                    <input class="code_discount" id="discountInput" placeholder="Mã giảm giá"
                        value="<?php echo isset($_SESSION['magiamgia']) ? $_SESSION['magiamgia'] : ''; ?>">
                </div>
                <button class="btn_discount" id="applyDiscount" name="magiamgia">
                    <span class="use_discount">Sử dụng</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="order_summary_cart_3">
    <div>
        <div class="choose_coupon">
            <span class="icon_coupon"><i class="fa-solid fa-ticket" style="color: #74C0FC;"></i></span>
            <span class="viewcoupon">Xem thêm mã giảm giá</span>
        </div>
        <div class="list_coupon">
            <span class="select_discount">
                <span class="discount_coupon" id="viewfreeship" data-code="FREESHIP">Giảm Ship 100%</span>
            </span>
        </div>
    </div>
</div>

<div class="order_summary_cart_4">
    <div>
        <div class="calculate">
            <span class="title_calculate">Tạm tính</span>
            <span class="money_order"><?php echo $total . 'đ'; ?></span>
        </div>
        <div class="code_freeship" id="discountBox" style="display: <?php echo isset($_SESSION['magiamgia']) ? 'flex' : 'none'; ?>;">
            <div class="code_freeship_1">
                <span class="freeship_code">Mã giảm giá </span>
                <p class="tag_icon">
                    <i class="fa-solid fa-tag fa-rotate-90" style="color: #3fa2ee;"></i>
                    <span><?php echo $_SESSION['magiamgia'] ?? ''; ?></span>
                    <i class="fa-solid fa-xmark" style="cursor:pointer;" id="closeCodefree"></i>
                </p>
            </div>
            <span class="money_freeship" id="discountAmount">50.000đ</span>
        </div>
        <div class="shipping">
            <span class="shipping_fee">Phí vận chuyển</span>
            <span class="money_shipping" id="shippingFee">
                <?php
                // Kiểm tra nếu phí vận chuyển đã được lưu trong session
                if (isset($_SESSION['shippingFee'])) {
                    echo number_format($_SESSION['shippingFee'], 0, ',', '.') . 'đ';
                } else {
                    echo '-';
                }
                ?>
            </span>
        </div>

        <div class="total_money">
            <span class="money_cart">Tổng cộng</span>
            <span class="money_total" id="totalPrice">
                <?php
                $totalPrice = isset($_SESSION['totalPrice']) ? number_format($_SESSION['totalPrice'], 0, ',', '.') . 'đ' : $total . 'đ'; // Giá trị ban đầu
                // Thêm phí vận chuyển nếu có
                echo $totalPrice;
                ?>
            </span>
        </div>

    </div>
</div>

