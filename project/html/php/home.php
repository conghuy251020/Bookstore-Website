<style>
    /*CĂN LỀ KHUNG*/

    .product {
        /* max-width: 700px; */
        margin: 0px 80px 0px 0px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(21rem, auto));
        row-gap: 25px;
        text-align: center;
        padding-left: 130px;
        padding-top: 15px;
        margin-bottom: -10px;
    }

    /*KHUNG CHỨA SÁCH*/

    .product-1 {
        position: relative;
        background: white;
        width: 270px;
        height: 500px;
    }

    .price-down-index {
        font-family: 'Roboto', sans-serif;
        background: red;
        color: white;
        display: inline-block;
        padding: 5px 4px 5px 4px;
        position: absolute;
        right: 217px;
        top: 4px;
        letter-spacing: 1px;
        z-index: 1;
        cursor: pointer;
    }

    .price-down-index h2 {
        font-size: 16px;
    }

    /*KHOẢNG CÁCH CỦA HÌNH SÁCH*/

    .product a img {
        text-decoration: none;
        padding-top: 38px;
    }

    .image-1 {
        height: 315px;
        width: 190px;
    }

    .image-index-1 {
        padding: 0px 0px 0px 0px;
        height: 315px;
        width: 250px;
    }

    /*CĂN LỀ CHỮ*/

    .text p {
        line-height: 25px;
    }

    .text-1 {
        margin-left: 21px;
        width: 225px;
        text-align: left;
        text-transform: uppercase;
        font-size: 16px;
        color: #9e9e9e;
        margin-right: 90px;
        padding-top: 10px;
        color: #0369a1;
        font-family: 'Roboto', sans-serif;
    }

    .text-2 {
        text-align: left;
        margin-left: 20px;
        margin-top: 10px;
        font-size: 21px;
    }

    .price {
        font-weight: 700;
        display: flex;
        margin-top: 10px;
        text-align: left;
        margin-left: 20px;
    }

    .price-index {
        font-size: 19px;
        font-family: 'Roboto', sans-serif;
        color: #075985;
    }

    .price-index-1 {
        padding: 0px 0px 0px 5px;
        font-size: 19px;
        text-decoration: line-through;
        color: #fbbf24;
    }

    .star {
        font-size: 18px;
        color: yellow;
        text-align: right;
        margin-right: 15px;
        margin-top: 5px;
    }

    .product-1 .buy {
        margin-top: 6px;
        transform: translateY(20px);
        opacity: 0;
        transition: 0.3s all;
    }

    .buy {
        text-decoration: none;
        color: white;
        font-size: 14px;
        font-family: 'Paytone One', sans-serif;
    }

    .button-index-1 a {
        text-decoration: none;
        color: white;
        font-size: 15px;
        font-family: 'Paytone One', sans-serif;
        letter-spacing: 1px;
    }

    .button-index-1 {
        margin: 5px 0px 10px 0px;
        background-color: #fb923c;
        border: none;
        width: 533px;
        height: 51px;
    }

    .img-index-2 {
        height: 352px;
        width: 1470px;
        margin-left: 210px;
    }

    .name-1 {
        font-weight: 600;
        color: #0284c7;
        font-size: 30px;
        margin-top: 30px;
        margin-left: 130px;
        font-family: 'Roboto', sans-serif;
    }

    .product-in {
        max-width: 100%;
        margin: 0px 80px 0px 0px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(21rem, auto));
        row-gap: 25px;
        text-align: center;
        margin-top: 30px;
        padding-left: 130px;
        margin-bottom: 12px;
    }

    .product-in a img {
        text-decoration: none;
        padding-top: 38px;
    }

    .name-2 {
        font-weight: 600;
        color: #0284c7;
        font-size: 30px;
        margin-top: 30px;
        margin-left: 130px;
        font-family: 'Roboto', sans-serif;
    }

    .product-info {
        max-width: 100%;
        margin: 0px 80px 0px 0px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(21rem, auto));
        row-gap: 25px;
        text-align: center;
        margin-top: 30px;
        padding-left: 130px;
        margin-bottom: 12px;
    }

    .product-info a img {
        text-decoration: none;
        padding-top: 38px;
    }

    /*HÌNH CHỦ ĐỀ*/

    .banner-image {
        height: 350px;
        width: 1400px;
        margin: auto;
        margin-left: 250px;
    }

    .main-infomation {
        max-height: 134%;
        background-color: white;
        width: 1400px;
        margin: 0px 0px 30px 250px;
        padding: 0px 0px 20px 0px;
    }

    .main-info {
        overflow: hidden;
        padding: 12px 12px;
    }

    .main-infoma {
        margin: 0px 15px;
        display: flex;
    }

    .main-info h2 {
        color: #059669;
        font-family: 'Roboto', sans-serif;
        font-size: 20px;
    }

    .main-list {
        flex: 0 0 25%;
        max-width: 90%;
        padding: 5px 8px;
    }

    .main-item {
        line-height: 25px;
        height: 100%;
        border-radius: 4px;
        background: #ffffff;
        border: 1px solid #f39f09;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 10px;
    }

    .title-1 {
        font-weight: 650;
        color: orange;
        font-family: 'Roboto', sans-serif;
        text-decoration: none;
        font-size: 21px;
        padding: 0px 100px 0px 0px;
    }

    .content-1 {
        color: #0ea5e9;
        text-decoration: none;
        font-size: 19px;
    }

    .title-2 {
        font-weight: 650;
        color: orange;
        font-family: 'Roboto', sans-serif;
        text-decoration: none;
        font-size: 21px;
    }

    .content-2 {
        color: #0ea5e9;
        text-decoration: none;
        font-size: 19px;
    }

    .title-3 {
        font-weight: 650;
        font-family: 'Roboto', sans-serif;
        color: orange;
        text-decoration: none;
        font-size: 21px;
        padding: 0px 10px 0px 0px;
    }

    .content-3 {
        color: #0ea5e9;
        text-decoration: none;
        font-size: 19px;
    }

    .title-4 {
        font-weight: 650;
        color: orange;
        font-family: 'Roboto', sans-serif;
        text-decoration: none;
        font-size: 21px;
        padding: 0px 100px 0px 0px;
    }

    .content-4 {
        color: #0ea5e9;
        text-decoration: none;
        font-size: 19px;
    }


    .name {
        font-weight: 600;
        color: #0284c7;
        font-size: 30px;
        margin-top: 25px;
        text-align: center;
        font-family: 'Roboto', sans-serif;
    }

    .noel-1 img {
        margin-top: 24px;
        margin-left: 195px;
        height: 420px;
        width: 740px;
    }

    .noel-2 img {
        margin-top: 24px;
        margin-right: 195px;
        height: 420px;
        width: 740px;
    }
</style>

<!--TẠO KHUNG VÀ THÔNG TIN SẢN PHẨM THỨ NHẤT-->

<div class="include">
    <div class="product">
        <?php
        $sql_product = mysqli_query($con, "SELECT sanpham.*, nhaxuatban.ten_nha_xuat_ban, giatien.gia, giatien.gia_khuyen_mai, giatien.phan_tram_khuyen_mai 
        FROM sanpham 
        JOIN nhaxuatban ON sanpham.id_nhaxuatban = nhaxuatban.id_nhaxuatban 
        JOIN giatien ON sanpham.id_sanpham = giatien.id_sanpham 
        WHERE sanpham.trangthai = 1 
        AND sanpham.id_sanpham BETWEEN 1 AND 10 
        LIMIT 10");    

        while ($row_sanpham = mysqli_fetch_array($sql_product)) {
        ?>
            <form action="?quanly=giohang" method="post">
                <div class="product-1">
                    <a href="?quanly=chitietsp&id_sp=<?php echo $row_sanpham["id_sanpham"]  ?>"><img class="image-1" src="../img-index/<?php echo $row_sanpham["img"] ?>" alt=""></a>
                    <div class="text">
                        <h1 class="text-1"><?php echo $row_sanpham["ten_nha_xuat_ban"] ?></h1>
                        <p class="text-2"><a href="../html/productinfo.html"><?php echo $row_sanpham["ten_sach"] ?></a></p>
                    </div>
                    <div class="price">
                        <p class="price-index"><?php echo $row_sanpham["gia_khuyen_mai"] . 'đ' ?></p>
                        <p class="price-index-1"><?php echo $row_sanpham["gia"] . 'đ' ?></p>
                    </div>
                    <div class="star">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                    </div>
                    <form method="POST" action="?quanly=giohang">
                        <input type="hidden" name="id_sanpham" value="<?php echo $row_sanpham['id_sanpham']; ?>">
                        <input type="hidden" name="ten_sach" value="<?php echo $row_sanpham['ten_sach']; ?>">
                        <input type="hidden" name="gia_khuyen_mai" value="<?php echo $row_sanpham['gia_khuyen_mai']; ?>">
                        <input type="hidden" name="img" value="<?php echo $row_sanpham['img']; ?>">
                        <input type="hidden" name="so_luong" value="1">
                        <button type="submit" name="themgiohang" class="buy">GIỎ HÀNG</button>
                    </form>
                    <div class="price-down-index">
                        <h2 class="price-down-index-1"><?php echo $row_sanpham["phan_tram_khuyen_mai"] . '%' ?></h2>
                    </div>
                </div>
            </form>

        <?php
        }
        ?>

        <?php
        echo "<div style='display:block;width:100%'><ul class='pagination'>";
        ?>

    </div>
</div>
<div class="button-index">
    <button class="button-index-1"><a href="../html/product.html">XEM THÊM SẢN PHẨM THỊNH HÀNH</a></button>
</div>
<div class="banner-2">
    <img class="img-index-2" src="https://file.hstatic.net/200000504927/file/banner_tu_sach_3__1__41467c981fb44490841581056ab818e9.png" alt="">
</div>

<!--KHUNG SẢN PHẨM THỨ HAI-->

<div class="name-1">Best seller mọi thời đại</div>
<div class="product-in">
    <?php
    $sql_product = mysqli_query($con, "SELECT sanpham.*, nhaxuatban.ten_nha_xuat_ban, giatien.gia, giatien.gia_khuyen_mai, giatien.phan_tram_khuyen_mai 
            FROM sanpham 
            JOIN nhaxuatban ON sanpham.id_nhaxuatban = nhaxuatban.id_nhaxuatban 
            JOIN giatien ON sanpham.id_sanpham = giatien.id_sanpham 
            WHERE sanpham.trangthai = 1 AND sanpham.id_sanpham BETWEEN 11 AND 20 LIMIT 10");
    while ($row_sanpham = mysqli_fetch_array($sql_product)) {
    ?>
        <div class="product-1">
            <a href="?quanly=chitietsp&id_sp=<?php echo $row_sanpham["id_sanpham"] ?>"><img class="image-1" src="../img-index/<?php echo $row_sanpham["img"] ?>" alt=""></a>
            <div class="text">
                <h1 class="text-1"><?php echo $row_sanpham["ten_nha_xuat_ban"] ?></h1>
                <p class="text-2"><a href="../html/productinfo.html"><?php echo $row_sanpham["ten_sach"] ?></a></p>
            </div>
            <div class="price">
                <p class="price-index"><?php echo $row_sanpham["gia_khuyen_mai"] . 'đ' ?> </p>
                <p class="price-index-1"><?php echo $row_sanpham["gia"] . 'đ' ?> </p>
            </div>
            <div class="star">
                <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
            </div>
            <form method="POST" action="?quanly=giohang">
                <input type="hidden" name="id_sanpham" value="<?php echo $row_sanpham['id_sanpham']; ?>">
                <input type="hidden" name="ten_sach" value="<?php echo $row_sanpham['ten_sach']; ?>">
                <input type="hidden" name="gia_khuyen_mai" value="<?php echo $row_sanpham['gia_khuyen_mai']; ?>">
                <input type="hidden" name="img" value="<?php echo $row_sanpham['img']; ?>">
                <input type="hidden" name="so_luong" value="1">
                <button type="submit" name="themgiohang" class="buy">GIỎ HÀNG</button>
            </form>
            <div class="price-down-index">
                <h2 class="price-down-index-1"><?php echo $row_sanpham["phan_tram_khuyen_mai"] . '%' ?> </h2>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<div class="button-index">
    <button class="button-index-1"><a href="../html/product.html">XEM THÊM SẢN PHẨM BEST SELLER MỌI THỜI ĐẠI</a></button>
</div>
<div class="banner-2">
    <img class="img-index-2" src="https://file.hstatic.net/200000504927/file/banner_tu_sach__1__21e82fd5f34041a1b817e9f4140ed0e9.png" alt="">
</div>
<!--SÁCH MỚI-->

<div class="name-2">SÁCH MỚI</div>
<div class="product-info">
    <?php
    $sql_product = mysqli_query($con, "SELECT sanpham.*, nhaxuatban.ten_nha_xuat_ban, giatien.gia, giatien.gia_khuyen_mai, giatien.phan_tram_khuyen_mai 
            FROM sanpham 
            JOIN nhaxuatban ON sanpham.id_nhaxuatban = nhaxuatban.id_nhaxuatban 
            JOIN giatien ON sanpham.id_sanpham = giatien.id_sanpham 
            WHERE sanpham.trangthai = 1 AND sanpham.id_sanpham BETWEEN 21 AND 25 LIMIT 5");
    while ($row_sanpham = mysqli_fetch_array($sql_product)) {
    ?>
        <div class="product-1">
            <a href="?quanly=chitietsp&id_sp=<?php echo $row_sanpham["id_sanpham"] ?>"><img class="image-1" src="../img-index/<?php echo $row_sanpham["img"] ?>" alt=""></a>
            <div class="text">
                <h1 class="text-1"><?php echo $row_sanpham["ten_nha_xuat_ban"] ?></h1>
                <p class="text-2"><a href="../html/productinfo.html"><?php echo $row_sanpham["ten_sach"] ?></a></p>
            </div>
            <div class="price">
                <p class="price-index"><?php echo $row_sanpham["gia_khuyen_mai"] . 'đ' ?> </p>
                <p class="price-index-1"><?php echo $row_sanpham["gia"] . 'đ' ?> </p>
            </div>
            <div class="star">
                <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
            </div>
            <form method="POST" action="?quanly=giohang">
                <input type="hidden" name="id_sanpham" value="<?php echo $row_sanpham['id_sanpham']; ?>">
                <input type="hidden" name="ten_sach" value="<?php echo $row_sanpham['ten_sach']; ?>">
                <input type="hidden" name="gia_khuyen_mai" value="<?php echo $row_sanpham['gia_khuyen_mai']; ?>">
                <input type="hidden" name="img" value="<?php echo $row_sanpham['img']; ?>">
                <input type="hidden" name="so_luong" value="1">
                <button type="submit" name="themgiohang" class="buy">GIỎ HÀNG</button>
            </form>
            <div class="price-down-index">
                <h2 class="price-down-index-1"><?php echo $row_sanpham["phan_tram_khuyen_mai"] . '%' ?> </h2>
            </div>
        </div>
    <?php
    }
    ?>

</div>
<div class="button-index">
    <button class="button-index-1"><a href="../html/product.html">XEM TẤT CẢ SẢN PHẨM</a></button>
</div>
<div class="banner-2">
    <img class="img-index-2" src="https://file.hstatic.net/200000504927/file/banner_tu_sach_daf4237d4f9f4659986b07d221d57b7b.png" alt="">
</div>
</div>