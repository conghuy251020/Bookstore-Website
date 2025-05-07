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
$selected_price = isset($_GET['id']) ? array_filter(explode(",", $_GET['id']), 'strlen') : [];
$selected_publisher = isset($_GET['publisher']) ? array_filter(explode(",", $_GET['publisher']), 'strlen') : [];
$selected_category = isset($_GET['category']) ? array_filter(explode(",", $_GET['category']), 'strlen') : [];
$selected_author = isset($_GET['author']) ? array_filter(explode(",", $_GET['author']), 'strlen') : [];

echo '<div class="grid__row">';
$conditions = [];

if (!empty($selected_price)) {
    $price_conditions = [];
    foreach ($selected_price as $price) {
        switch ($price) {
            case "1":
                $price_conditions[] = "(CAST(REPLACE(giatien.gia_khuyen_mai, '.', '') AS UNSIGNED) <100000)";
                break;
            case "2":
                $price_conditions[] = "(CAST(REPLACE(giatien.gia_khuyen_mai, '.', '') AS UNSIGNED) BETWEEN 100000 AND 300000)";
                break;
            case "3":
                $price_conditions[] = "(CAST(REPLACE(giatien.gia_khuyen_mai, '.', '') AS UNSIGNED) BETWEEN 300000 AND 500000)";
                break;
            case "4":
                $price_conditions[] = "(CAST(REPLACE(giatien.gia_khuyen_mai, '.', '') AS UNSIGNED) BETWEEN 500000 AND 900000)";
                break;
            case "5":
                $price_conditions[] = "(CAST(REPLACE(giatien.gia_khuyen_mai, '.', '') AS UNSIGNED) > 900000)";
                break;
        }
    }
    $conditions[] = "(" . implode(" OR ", $price_conditions) . ")";
}

if (!empty($selected_publisher)) {
    $publisher_list = implode(",", array_map('intval', $selected_publisher));
    $conditions[] = "sanpham.id_nhaxuatban IN ($publisher_list)";
}

if (!empty($selected_category)) {
    $category_list = implode(",", array_map('intval', $selected_category));
    $conditions[] = "sanpham.id_loai_spham IN ($category_list)";
}

if (!empty($selected_author)) {
    $author_list = implode(",", array_map('intval', $selected_author));
    $conditions[] = "sanpham.id_tacgia IN ($author_list)";
}

$where_clause = !empty($conditions) ? " AND " . implode(" AND ", $conditions) : "";

$sql_sanpham = mysqli_query($con, "
    SELECT sanpham.*, nhaxuatban.ten_nha_xuat_ban, giatien.gia, giatien.gia_khuyen_mai, giatien.phan_tram_khuyen_mai 
    FROM sanpham
    INNER JOIN nhaxuatban ON sanpham.id_nhaxuatban = nhaxuatban.id_nhaxuatban
    INNER JOIN giatien ON sanpham.id_sanpham = giatien.id_sanpham
    INNER JOIN loaisanpham ON sanpham.id_loai_spham = loaisanpham.id_loai_spham
    INNER JOIN tacgia ON sanpham.id_tacgia = tacgia.id_tacgia
    WHERE sanpham.trangthai = 1
    $where_clause
");

if (!$sql_sanpham) {
    die("Lỗi truy vấn: " . mysqli_error($con));
}

// Hiển thị sản phẩm
while ($row_sanpham = mysqli_fetch_array($sql_sanpham)) {
?>
    <div class="grid__column-2-2">
        <div class="home-product-item">
            <a href="?quanly=chitietsp&id_sp=<?php echo $row_sanpham['id_sanpham']; ?>">
                <img class="image-2" src="../img-index/<?php echo $row_sanpham['img']; ?>" alt="">
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