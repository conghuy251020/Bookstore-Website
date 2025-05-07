<style>
    .text-product-1 {
        text-align: left;
        width: 220px;
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
if (isset($_POST['search_button'])) {
    $tukhoa = mysqli_real_escape_string($con, $_POST['search_product']);
} else {
    $tukhoa = "";
}

// Truy vấn lấy sản phẩm và thông tin nhà xuất bản từ bảng nhaxuatban
$sql_product = mysqli_query($con, "
    SELECT sanpham.*, nhaxuatban.ten_nha_xuat_ban, giatien.gia, giatien.gia_khuyen_mai, giatien.phan_tram_khuyen_mai  
    FROM sanpham 
    JOIN nhaxuatban ON sanpham.id_nhaxuatban = nhaxuatban.id_nhaxuatban
    INNER JOIN giatien ON sanpham.id_sanpham = giatien.id_sanpham
    INNER JOIN loaisanpham ON sanpham.id_loai_spham = loaisanpham.id_loai_spham
    INNER JOIN tacgia ON sanpham.id_tacgia = tacgia.id_tacgia 
    WHERE sanpham.trangthai = 1 AND sanpham.ten_sach LIKE '%$tukhoa%'
");
?>

<div class="home-product">
    <div class="grid__row">
        <?php while ($row_sanpham = mysqli_fetch_array($sql_product)) { ?>
            <div class="grid__column-2-2">
                <div class="home-product-item">
                    <a href="?quanly=chitietsp&id_sp=<?php echo $row_sanpham['id_sanpham']; ?>">
                        <img class="image-2" src="../img-index/<?php echo $row_sanpham['img']; ?>" alt="">
                    </a>
                    <div class="text-product">
                        <h1 class="text-product-1"><?php echo $row_sanpham["ten_nha_xuat_ban"]; ?> </h1> <!-- Đã thay đổi -->
                        <p class="text-product-2">
                            <a href="#"><?php echo $row_sanpham["ten_sach"]; ?> </a>
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
        <?php } ?>
    </div>
</div>
</div>
</div>
</div>