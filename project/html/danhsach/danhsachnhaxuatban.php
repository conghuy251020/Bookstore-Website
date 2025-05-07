<style>
    .text-product-1 {
        width: 220px;
        text-align: left;
        margin-left: 72px;
        text-transform: uppercase;
        font-size: 16px;
        margin-right: 70px;
        font-weight: 50px;
        padding-top: 7px;
        color: #0369a1;
        font-family: 'Roboto', sans-serif;
    }
</style>


<?php

// Lấy danh sách ID nhà xuất bản từ URL (nếu có)
$selected_publishers = isset($_GET['id']) ? $_GET['id'] : "";

echo '<div class="grid__row">';

if (!empty($selected_publishers)) {
    // Chuyển danh sách ID thành mảng số nguyên
    $id_nhaxuatban_list = array_map('intval', explode(",", $selected_publishers));

    // Ghép ID thành chuỗi để sử dụng trong câu lệnh SQL
    $id_nhaxuatban_str = implode(",", $id_nhaxuatban_list);

    // Truy vấn sản phẩm dựa trên nhà xuất bản
    $sql_sanpham = mysqli_query($con, "SELECT sanpham.*, nhaxuatban.ten_nha_xuat_ban, giatien.gia, giatien.gia_khuyen_mai, giatien.phan_tram_khuyen_mai  
                                       FROM sanpham 
                                       INNER JOIN nhaxuatban ON sanpham.id_nhaxuatban = nhaxuatban.id_nhaxuatban
                                       INNER JOIN giatien ON sanpham.id_sanpham = giatien.id_sanpham 
                                       WHERE sanpham.id_nhaxuatban IN ($id_nhaxuatban_str)");
} else {
    // Nếu không chọn nhà xuất bản nào, hiển thị tất cả sản phẩm
    $sql_sanpham = mysqli_query($con, "SELECT sanpham.*, nhaxuatban.ten_nha_xuat_ban, giatien.gia, giatien.gia_khuyen_mai, giatien.phan_tram_khuyen_mai  
                                       FROM sanpham 
                                       INNER JOIN nhaxuatban ON sanpham.id_nhaxuatban = nhaxuatban.id_nhaxuatban
                                       INNER JOIN giatien ON sanpham.id_sanpham = giatien.id_sanpham ");
}

// Kiểm tra lỗi truy vấn SQL
if (!$sql_sanpham) {
    die("Lỗi truy vấn: " . mysqli_error($con));
}

// Hiển thị sản phẩm
while ($row_sanpham = mysqli_fetch_array($sql_sanpham)) {
?>
    <div class="grid__column-2-2">
        <div class="home-product-item">
            <a href="?quanly=chitietsp&id_sp=<?php echo $row_sanpham['id_sanpham']; ?>">
                <img class="image-2" src="../img-index/<?php echo $row_sanpham['img']; ?>" alt="Hình ảnh sản phẩm">
            </a>
            <div class="text-product">
                <h1 class="text-product-1"><?php echo $row_sanpham["ten_nha_xuat_ban"]; ?></h1>
                <p class="text-product-2">
                    <a href="#"><?php echo $row_sanpham["ten_sach"]; ?></a>
                </p>
            </div>
            <div class="price-product">
                <p class="price-product-1"><?php echo $row_sanpham["gia_khuyen_mai"] . 'đ'; ?></p>
                <p class="price-product-2"><?php echo $row_sanpham["gia"] . 'đ'; ?></p>
            </div>
            <div class="star-product">
                <p>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </p>
            </div>
        </div>
    </div>
<?php
}

echo '</div>'; // Đóng div .grid__row
?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>