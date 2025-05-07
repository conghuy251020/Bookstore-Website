<?php
ob_start();
session_start(); // Bắt đầu session
?>

<style>
    /*KHUNG MÀU CHỮ XANH*/

    .box {
        padding: 7.5px;
        background-color: #075985;
        color: #ffffff;
        text-align: center;
        font-family: 'Lobster', cursive;
    }

    .box-1 {
        font-size: 20px;
    }

    .header {
        height: 115px;
        max-width: 100%;
        margin: 0 auto;
        padding: 10px;
        background-color: #ffffff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid rgb(228, 228, 231);
    }

    /*CHỮ SHOPBOOK*/

    .logo {
        font-size: 50px;
        font-weight: bold;
        color: #075985;
        font-family: 'Lobster', cursive;
        text-decoration: none;
        padding-left: 160px;
    }

    /*MỤC TIÊU ĐỀ*/

    .nav a {
        text-decoration: none;
        color: #06b6d4;
        font-family: 'Lobster', cursive;
        font-size: 25px;
    }

    .nav {
        margin-right: 5px;
    }

    /*TÌM KIẾM SẢN PHẨM*/

    .search {
        display: flex;
        border: 1px solid black;
        border-radius: 30px;
        height: 60px;
        margin-right: 10px;
    }

    .search input {
        width: 160px;
        font-size: 18px;
        height: 30px;
        line-height: 50px;
        outline: none;
        border: none;
        margin: 15px 30px 0px 10px;
    }

    .search i {
        color: black;
        margin: 0px 0px 0px 15px;
        font-size: 27px;
    }

    /*TÀI KHOẢN VÀ GIỎ HÀNG*/

    .icon td a {
        padding-left: 30px;
        text-decoration: none;
        color: #06b6d4;
        font-family: 'Lobster', cursive;
        font-size: 25px;
    }

    /*ICON USER VÀ CART*/

    .icon {
        display: flex;
        padding-right: 200px;
    }

    .icon th i {
        padding-left: 30px;
        font-size: 30px;
        color: #075985;
    }

    .search button {
        background: transparent;
        border: none;
    }

    .icon_account_cart {
        display: flex;
    }

    .account {
        margin-right: 50px;
        display: grid;
    }

    .account i {
        text-align: center;
        font-size: 30px;
        color: #075985;
    }

    .account a {
        text-align: center;
        text-decoration: none;
        color: #06b6d4;
        font-family: 'Lobster', cursive;
        font-size: 25px;
    }

    .cart i {
        text-align: center;
        font-size: 30px;
        color: #075985;
    }

    .cart_1 a {
        text-align: center;
        display: grid;
        text-decoration: none;
        color: #06b6d4;
        font-family: 'Lobster', cursive;
        font-size: 25px;
    }

    .count_holder {
        font-weight: 500;
        font-family: 'Roboto', sans-serif;
        top: 61px;
        right: 340px;
        display: inline-block;
        vertical-align: top;
        background: #c50017;
        color: #fff101;
        font-size: 15px;
        text-align: center;
        position: absolute;
        padding: 3px 5px;
        min-width: 22px;
        height: 22px;
        line-height: 16px;
        border-radius: 50%;
    }

    .box-triangle {
        text-align: center;
        position: absolute;
        top: calc(17% - 15px);
        right: 235px !important;
        z-index: 992;
        margin: 0 auto;
        width: 30px;
        height: 19px;
        background: rgba(0, 0, 0, 0);
        clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        filter: drop-shadow(3px 3px 5px rgba(0, 0, 0, 0.3));
    }

    .box-triangle i {
        margin-right: unset !important;
        text-align: center;
        font-size: 30px;
        color: white;
    }

    .box_header_cart {
        margin-right: 210px;
        display: none;
        /* Ẩn ban đầu */
        width: 530px;
        position: absolute;
        top: calc(17% - -2px);
        left: auto;
        right: -15px;
        z-index: 1158;
        border-radius: 3px;
        background: #fff;
        box-shadow: 0 1px 5px 2px rgba(0, 0, 0, 0.1);
        transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
        opacity: 0;
        transform: translateY(-10px);
    }

    .box_header_cart.show {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }

    .around_box {
        width: 100%;
        max-height: 100%;
        overflow: hidden;
        padding: 25px 25px 0px 25px;
    }

    .header_cart {
        padding-bottom: 15px;
        border-bottom: 1px solid #e7e7e7;
        text-align: center;
    }

    .title_header {
        font-weight: 500;
        font-family: 'Roboto', sans-serif;
        font-size: 25px;
        color: #528b0f;
    }

    .cart_view {
        border-bottom: 1px solid #e7e7e7;
        display: flex;
        padding-bottom: 20px;
        padding-top: 20px;
    }

    .img_product img {
        height: 140px;
        width: 100px;
    }

    .mini_name_category {
        padding-left: 35px;
        display: grid;
        padding-bottom: 20px;
    }

    .mini_quantity_price_view {
        display: flex;
    }

    .name_product_1 {
        width: 320px;
        text-decoration: none;
        padding-bottom: 5px;
        /* display: block; */
        text-transform: uppercase;
        font-weight: 600;
        color: #000000 !important;
        text-align: left !important;
        font-size: 17px !important;
        font-family: 'Roboto', sans-serif !important;
    }

    .category_product {
        display: block;
        font-weight: 400;
        color: #677279;
        font-family: 'Roboto', sans-serif;
        font-size: 17px;
    }

    .mini_quantity_price_view {
        align-items: center;
        padding-left: 35px;
        display: flex;
    }

    .minus_cart_1 {
        float: left;
        font-weight: 600;
        font-size: 21px;
        padding: 0;
        height: 30px;
        width: 30px;
        text-align: center;
        background: #ffffff;
        border: 1px solid #f3f4f4;
        border-radius: 4px;
        outline: none;
    }

    .quantity_input_1 {
        float: left;
        font-weight: 500;
        font-size: 15px;
        width: 30px;
        height: 30px;
        padding: 0;
        background: #fff;
        text-align: center;
        outline: none;
        border: 1px solid #f3f4f4;
        margin: 0 3px;
        border-radius: 4px;
    }

    .plus_cart_1 {
        float: left;
        font-weight: 600;
        font-size: 21px;
        padding: 0;
        height: 30px;
        width: 30px;
        text-align: center;
        background: #ffffff;
        border: 1px solid #f3f4f4;
        border-radius: 4px;
        outline: none;
    }

    .price_cart_product span {
        font-weight: 500;
        color: black;
        font-family: "Roboto", ui-sans-serif;
        font-size: 19px;
    }

    .remove_product i {
        position: absolute;
    }

    .remove_product i {
        margin-right: unset !important;
        right: 20px;
        width: 22px;
        font-size: 20px;
        border: 1px solid #f3f4f4;
        color: black;
        position: absolute;
    }

    .mini_cart {
        margin-top: 20px;
    }

    .box_total_cart {
        display: flex;
        text-align: center;
        justify-content: space-between;
    }

    .title_product_cart {
        font-weight: 500;
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
    }

    .total_product_cart {
        color: red;
        font-weight: 700;
        font-family: 'Roboto', sans-serif;
        font-size: 21px;
    }

    .go_to_cart {
        border-radius: 2px;
        text-decoration: none;
        display: block;
        outline: none;
        font-weight: 500;
        color: white;
        border: none;
        font-family: "Roboto", ui-sans-serif;
        font-size: 16px;
        text-align: center;
        padding: 12px;
        position: relative;
        overflow: hidden;
        background: linear-gradient(to right, red 50%, white 50%);
        background-size: 200% 100%;
        background-position: left;
        transition: background-position 0.4s ease-in-out, color 0.4s ease-in-out, border 0.4s ease-in-out;
    }

    /* Hiệu ứng khi hover */
    .go_to_cart:hover {
        background-position: right;
        color: red;
        border: 1px solid red;
    }



    .mini_view_cart {
        margin-top: 15px;
        margin-bottom: 25px;
    }

    .conghuy {
        align-items: center;
        display: flex;
    }

    .price_cart_product {
        position: absolute;
        right: 20px;
    }

    .hidden {
        display: none;
    }

    .fa-caret-up {
        display: none;
    }

    .cart_empty_order {
        padding: unset !important;
        padding-bottom: 20px !important;
        border-bottom: 1px solid #e7e7e7;
        margin-top: 15px;
        text-align: center !important;
        justify-content: center;
        display: grid;
    }

    .cart_icon_empty i {
        font-weight: 300;
        color: orange;
        font-size: 80px;
    }

    .cart_empty_1 {
        margin-top: 5px;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        font-size: 18px;
    }

    .alert {
        padding: 10px;
        border-radius: 5px;
        text-align: center;
        font-size: 16px;
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    .account:hover .dropdown-content-1 {
        display: block;
    }

    .dropdown-content-1 {
        margin-top: 65px;
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content-1 a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
        border-bottom: 2px solid #06b6d4;
    }

    .dropdown-content-1 a:hover {
        background-color: #f1f1f1;
    }

    .history {
        margin-left: 50px;
        display: grid;
    }

    .history a {
        text-align: center;
        text-decoration: none;
        color: #06b6d4;
        font-family: 'Lobster', cursive;
        font-size: 25px;
    }

    .history i {
        text-align: center;
        font-size: 30px;
        color: #075985;
    }
</style>

<?php
include('db/connect.php');
?>

<?php
if (isset($_POST['themgiohang'])) {
    include 'db/connect.php'; // Kết nối CSDL

    if (!isset($_SESSION['id_user'])) {
        $_SESSION['error'] = "❌ Vui lòng đăng nhập để thêm vào giỏ hàng!";
        header("Location: index.php?quanly=taikhoan");
        exit();
    }

    $id_user = $_SESSION['id_user']; // Lấy id_user từ session
    $tensanpham = mysqli_real_escape_string($con, $_POST['ten_sach']);
    $id_sp = mysqli_real_escape_string($con, $_POST['id_sanpham']);
    $hinh = mysqli_real_escape_string($con, $_POST['img']);
    $gia_khuyen_mai = mysqli_real_escape_string($con, $_POST['gia_khuyen_mai']);
    $so_luong = isset($_POST['so_luong']) ? intval($_POST['so_luong']) : 1;

    // Kiểm tra sản phẩm đã có trong giỏ hàng của user này chưa
    $sql_check = "SELECT * FROM giohang WHERE id_sanpham='$id_sp' AND id_user='$id_user'";
    $query_check = mysqli_query($con, $sql_check);
    $count = mysqli_num_rows($query_check);

    if ($count > 0) {
        $row_sanpham = mysqli_fetch_assoc($query_check);
        $so_luong += $row_sanpham['so_luong'];
        $sql_giohang = "UPDATE giohang SET so_luong = '$so_luong' WHERE id_sanpham ='$id_sp' AND id_user='$id_user'";
    } else {
        $sql_giohang = "INSERT INTO giohang(id_user, ten_sach, gia_khuyen_mai, img, so_luong, id_sanpham) 
                        VALUES ('$id_user', '$tensanpham', '$gia_khuyen_mai', '$hinh', '$so_luong', '$id_sp')";
    }

    if (mysqli_query($con, $sql_giohang)) {
        $_SESSION['success_add'] = "✅ Thêm sản phẩm vào giỏ hàng thành công!";
        header('Location: index.php?quanly=chitietsp&id_sp=' . $id_sp);
        exit();
    } else {
        echo "Lỗi: " . mysqli_error($con);
    }
}

// Xử lý cập nhật số lượng sản phẩm hoặc xóa sản phẩm nếu có request từ AJAX
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_cart'])) {
    $id_sanpham = mysqli_real_escape_string($con, $_POST['id_sanpham']);
    $so_luong = intval($_POST['so_luong']);

    if ($so_luong <= 0) {
        mysqli_query($con, "DELETE FROM giohang WHERE id_sanpham='$id_sanpham'");
        echo json_encode(["status" => "deleted"]);
    } else {
        mysqli_query($con, "UPDATE giohang SET so_luong = '$so_luong' WHERE id_sanpham='$id_sanpham'");
        echo json_encode(["status" => "updated"]);
    }
    exit();
}

if (isset($_GET['xoa'])) {
    $id = mysqli_real_escape_string($con, $_GET['xoa']);
    mysqli_query($con, "DELETE FROM giohang WHERE id_sanpham='$id'");
    $_SESSION['success_remove'] = "Xóa sản phẩm thành công!";
    header("Location: index.php?quanly=giohang"); // Tải lại trang sau khi xóa
    exit();
}

$total = 0;
?>

<?php

$id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : null;

if ($id_user) {
    // Kết nối cơ sở dữ liệu
    $sql_lay_giohang = mysqli_query($con, "SELECT giohang.*, loaisanpham.ten_loai_sach 
        FROM giohang 
        INNER JOIN sanpham ON giohang.id_sanpham = sanpham.id_sanpham
        INNER JOIN loaisanpham ON sanpham.id_loai_spham = loaisanpham.id_loai_spham
        WHERE giohang.id_user = '$id_user' 
        ORDER BY id_giohang DESC");

    $so_sanpham = mysqli_num_rows($sql_lay_giohang);
} else {
    $so_sanpham = 0;
}
?>

<!--NAVBAR-->
<header>
    <marquee class="box">
        <div class="box-1">"Việc đọc rất quan trọng! Nếu bạn biết cách đọc, cả thế giới sẽ mở ra cho bạn." - Barack Obama</div>
    </marquee>

    <div class="header">
        <h1><a href="index.php" class="logo">BookStore</a></h1>
        <div class="nav">
            <ul>
                <li class="dropdown-1">
                    <a href="../html/introduce.html">Về BookStore</a>
                    <div class="dropdown-content">
                        <a href="#">Về BookStore</a>
                        <a href="#">Tìm đồng đội</a>
                    </div>
                </li>
                <li class="dropdown-2">
                    <a href="index.php?quanly=tonghopsach">Sách</a>
                    <div class="dropdown-content">
                        <?php
                        $sql_category = mysqli_query($con, "SELECT * FROM loaisanpham");
                        while ($row_category = mysqli_fetch_array($sql_category)) {
                        ?>
                            <a id="<?php echo $row_category["id_loai_spham"] ?> " href="?quanly=gate_classify&id_loai_spham=<?php echo $row_category["id_loai_spham"] ?>"><?php echo $row_category["ten_loai_sach"] ?></a>
                        <?php
                        }
                        ?>
                    </div>
                </li>
                <li class="dropdown-3">
                    <a href="../html/product.html">Tủ sách</a>
                    <div class="dropdown-content">
                        <a href="../html/product.html">Best seller mọi thời đại</a>
                        <a href="../html/product.html">Sách mới,sách hay</a>
                        <a href="../html/product.html">Nhà quản lí-quản trị</a>
                        <a href="../html/product.html">Ceo đọc sách gì</a>
                        <a href="../html/product.html">Qùa tặng vô giá cho con</a>
                        <a href="../html/product.html">Phong cách sống</a>
                    </div>
                </li>
                <li class="dropdown-4">
                    <a href="../html/product.html">Tác giả Bestseller</a>
                    <div class="dropdown-content">
                        <a href="../html/product.html">Nguyễn Nhật Ánh</a>
                        <a href="../html/product.html">John Seymour</a>
                        <a href="../html/product.html">Michael Scott</a>
                        <a href="../html/product.html">Andrew Matthews</a>
                        <a href="../html/product.html">Stephen Hawking</a>
                        <a href="../html/product.html">Gosinny</a>
                    </div>
                </li>
                <li><a href="../html/product.html">Blog</a></li>
            </ul>
        </div>
        <!-- Tìm kiếm sản phẩm -->
        <form action="index.php?quanly=timkiem" method="POST">
            <div class="search">
                <button type="submit" name="search_button"><i class='bx bx-search'></i></button>
                <input type="text" name="search_product" placeholder="Tìm kiếm sản phẩm" value="<?php echo isset($_POST['search_product']) ? htmlspecialchars($_POST['search_product']) : ''; ?>">
            </div>
        </form>

        <div class="icon">
            <div class="icon_account_cart">
                <div class="account">
                    <a href="index.php?quanly=taikhoan"><i class='bx bx-user'></i></a>
                    <a href="index.php?quanly=taikhoan">
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo htmlspecialchars($_SESSION['username']);
                        } else {
                            echo "Tài khoản";
                        }
                        ?>
                    </a>
                    <div class="dropdown-content-1">
                        <a href="index.php?quanly=taikhoan">Đăng nhập</a>
                        <a href="index.php?quanly=dangxuat">Đăng xuất</a>
                        <a href="#">Đổi mật khẩu</a>
                    </div>
                </div>

                <div class="cart">
                    <div class="cart_1">
                        <a href="javascript:void(0);" id="cart_toggle">
                            <span class="box_cart_icon">
                                <span class="cart_icon">
                                    <i class='bx bx-cart'></i>
                                </span>
                                <span class="count_holder">
                                    <span class="count"><?php echo $so_sanpham; ?></span>
                                </span>
                            </span>
                            <span class="box_cart_text">
                                <span class="cart_text">Giỏ hàng</span>
                            </span>
                        </a>
                        <span class="box-triangle">
                            <i class="fa-solid fa-caret-up"></i>
                        </span>
                    </div>
                    <div class="box_header_cart">
                        <div class="around_box">
                            <div class="frame_cart">
                                <div class="header_cart">
                                    <p class="title_header">GIỎ HÀNG</p>
                                </div>
                                <div class="frame_product">
                                    <?php
                                    if ($so_sanpham > 0) {
                                    ?>
                                        <div class="frame_product_1">
                                            <?php
                                            $total = 0; // Reset tổng tiền
                                            while ($row_sanpham = mysqli_fetch_array($sql_lay_giohang)) {
                                                $gia_khuyen_mai = str_replace('.', '', $row_sanpham['gia_khuyen_mai']); // Xóa dấu chấm
                                                $gia_khuyen_mai = intval($gia_khuyen_mai); // Chuyển thành số nguyên
                                                $so_luong = intval($row_sanpham["so_luong"]); // Chuyển số lượng thành số nguyên

                                                $subtotal = $so_luong * $gia_khuyen_mai; // Tính tổng tiền theo sản phẩm
                                                $total += $subtotal; // Cộng dồn vào tổng tiền

                                                // Định dạng lại số tiền hiển thị
                                                $subtotal = number_format($subtotal, 0, ',', '.');
                                                $gia_hienthi = number_format($gia_khuyen_mai, 0, ',', '.');
                                            ?>
                                                <div class="cart_view">
                                                    <div class="img_product">
                                                        <img src="../img-index/<?php echo htmlspecialchars($row_sanpham["img"]); ?>" alt="">
                                                    </div>
                                                    <div class="information_cart">
                                                        <p class="mini_name_category">
                                                            <a class="name_product_1" href="#"><?php echo htmlspecialchars($row_sanpham["ten_sach"]); ?></a>
                                                            <span class="category_product"><?php echo htmlspecialchars($row_sanpham["ten_loai_sach"]) ?></span>
                                                        </p>
                                                        <div class="mini_quantity_price_view">
                                                            <div class="conghuy">
                                                                <div class="quantity_cart_1">
                                                                    <button class="minus_cart_1" data-id="<?php echo $row_sanpham["id_sanpham"]; ?>">-</button>
                                                                    <input type="text" class="quantity_input_1" data-id="<?php echo $row_sanpham["id_sanpham"]; ?>" value="<?php echo $so_luong; ?>">
                                                                    <button class="plus_cart_1" data-id="<?php echo $row_sanpham["id_sanpham"]; ?>">+</button>
                                                                </div>
                                                                <div class="price_cart_product">
                                                                    <span><?php echo $subtotal . 'đ'; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Nút xóa sản phẩm -->
                                                    <div class="mini_remove">
                                                        <a class="remove_product" href="?quanly=giohang&xoa=<?php echo $row_sanpham["id_sanpham"]; ?>" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?');">
                                                            <i class="fa-solid fa-xmark"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            <?php }
                                            $total = number_format($total, 0, ',', '.'); ?>
                                        </div>
                                        <div class="cart_view_total">
                                            <div class="mini_cart">
                                                <div class="box_total_cart">
                                                    <span class="title_product_cart">TỔNG TIỀN:</span>
                                                    <span class="total_product_cart"><?php echo $total . 'đ'; ?></span>
                                                </div>
                                            </div>
                                            <div class="mini_view_cart">
                                                <div class="view_order_cart">
                                                    <a class="go_to_cart" href="?quanly=giohang">XEM GIỎ HÀNG</a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            <?php
                                    } else {
                            ?>
                                <!-- Giao diện khi giỏ hàng trống -->
                                <div class="cart_empty_order">
                                    <span class="cart_icon_empty">
                                        <i class='bx bx-cart'></i>
                                    </span>
                                    <span class="cart_empty_1">Giỏ hàng của bạn đang trống</span>
                                </div>
                                <div class="cart_view_total">
                                    <div class="mini_cart">
                                        <div class="box_total_cart">
                                            <span class="title_product_cart">TỔNG TIỀN:</span>
                                            <span class="total_product_cart"><?php echo $total . 'đ'; ?></span>
                                        </div>
                                    </div>
                                    <div class="mini_view_cart">
                                        <div class="view_order_cart">
                                            <a class="go_to_cart" href="?quanly=giohang">XEM GIỎ HÀNG</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                    }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="history_order">
                <div class="history">
                    <a href="index.php?quanly=lichsudonhang"><i class="fa-regular fa-file-lines"></i></a>
                    <a href="index.php?quanly=lichsudonhang"><span>Lịch sử</span></a>
                </div>
            </div>

        </div>
    </div>

</header>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Xử lý tăng số lượng
        $(".plus_cart_1").click(function() {
            var id = $(this).data("id");
            var input = $(".quantity_input_1[data-id='" + id + "']");
            var newQuantity = parseInt(input.val()) + 1;
            updateCart(id, newQuantity);
        });

        // Xử lý giảm số lượng
        $(".minus_cart_1").click(function() {
            var id = $(this).data("id");
            var input = $(".quantity_input_1[data-id='" + id + "']");
            var newQuantity = parseInt(input.val()) - 1;
            if (newQuantity <= 0) {
                if (confirm("Bạn có chắc muốn xóa sản phẩm này?")) {
                    updateCart(id, 0); // Gửi request xóa sản phẩm
                }
            } else {
                updateCart(id, newQuantity);
            }
        });

        // Xử lý nhập số lượng trực tiếp
        $(".quantity_input_1").on("change", function() {
            var id = $(this).data("id");
            var newQuantity = parseInt($(this).val());
            if (isNaN(newQuantity) || newQuantity < 1) {
                alert("Số lượng không hợp lệ!");
                $(this).val(1);
                return;
            }
            updateCart(id, newQuantity);
        });

        // Hàm cập nhật số lượng giỏ hàng
        function updateCart(id, quantity) {
            $.ajax({
                type: "POST",
                url: window.location.href, // Gửi request đến chính file này
                data: {
                    update_cart: true,
                    id_sanpham: id,
                    so_luong: quantity
                },
                success: function(response) {
                    location.reload(); // Tải lại trang để cập nhật tổng tiền
                }
            });
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const cartToggle = document.getElementById("cart_toggle");
        const cartBox = document.querySelector(".box_header_cart");
        const caretUpIcon = document.querySelector(".fa-caret-up");

        // Đảm bảo icon caret-up luôn ẩn khi tải lại trang
        caretUpIcon.style.display = "none";
        cartBox.classList.remove("show");

        cartToggle.addEventListener("click", function(event) {
            event.preventDefault();
            cartBox.classList.toggle("show"); // Hiển thị/ẩn giỏ hàng
            caretUpIcon.style.display = cartBox.classList.contains("show") ? "inline-block" : "none"; // Hiển thị icon caret-up
        });

        // Ẩn khi click ra ngoài
        document.addEventListener("click", function(event) {
            if (!cartToggle.contains(event.target) && !cartBox.contains(event.target)) {
                cartBox.classList.remove("show");
                caretUpIcon.style.display = "none";
            }
        });
    });
</script>