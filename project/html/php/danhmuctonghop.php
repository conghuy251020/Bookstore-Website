<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;0,900;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Domine&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/product.css">
    <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Heebo&family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Shop Book</title>
</head>

<style>
    .mainprinfo-list {
        margin-left: 160px;
        display: flex;
        list-style: none;
        padding: 15px 15px;
    }

    .mainprinfo-item a {
        font-weight: 600;
        text-decoration: none;
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        color: blue;
    }

    .mainprinfo-btn::after {
        content: "";
        position: absolute;
        display: block;
        border-left: 2px solid gray;
        height: 16px;
        top: 50%;
        right: -1px;
        transform: translateY(-60%);
    }

    .mainprinfo-btn-1 {
        margin-left: 5px;
    }

    .mainprinfo-btn-1::after {
        content: "";
        position: absolute;
        display: block;
        border-left: 2px solid gray;
        height: 16px;
        top: 50%;
        right: -1px;
        transform: translateY(-60%);
    }

    .mainprinfo-btn-2 {
        font-weight: 600;
        font-family: 'Roboto', sans-serif;
        margin-left: 3px;
        margin-top: 0.5px;
        font-size: 16px;
        color: #71717a;
    }

    .img-index-3 {
        height: 460px;
        width: 1500px;
        margin-left: 210px;
    }

    .grid {
        width: 1650px;
        margin: 0 auto;
    }

    .category {
        line-height: 40px;
        margin: 0px 10px 10px 0px;
        border-radius: 2px;
        background-color: white;
        margin-top: 0;
        border: 1px solid #fb923c;
    }

    .category__heading {
        font-family: 'Roboto', sans-serif;
        font-size: 22px;
        background: orange;
        color: #ea580c;
        padding: 8px 4px;
        display: flex;
        align-items: center;
        border-bottom: 1px solid orange;
    }

    .category__heading-icon {
        font-size: 1.6rem;
        margin: 0px 10px;
    }

    .category-list a {
        font-weight: 650;
        font-size: 20px;
        font-family: 'Roboto', sans-serif;
        color: #fb923c;
    }

    .home-filter__label {
        font-weight: 700 !important;
        font-size: 20px;
        color: #ea580c;
        margin-right: 25px !important;
        margin-bottom: 3px;
        font-family: 'Roboto', sans-serif;
    }

    .home-filter__btn {
        min-width: 80px;
        margin-right: 30px;
        background: white;
    }

    .btn {
        height: 45px;
        text-decoration: none;
        border: none;
        border-radius: 2px;
        font-size: 18px;
        padding: 0 14px;
        outline: none;
        cursor: pointer;
        color: #ea580c;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        line-height: 1.6rem;
        font-family: 'Roboto', sans-serif;
    }

    .select-input {
        font-weight: 700;
        position: relative;
        min-width: 263px;
        height: 45px;
        padding: 0 12px;
        border-radius: 2px;
        background-color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .select-input__label {
        font-family: 'Roboto', sans-serif;
        color: #ea580c;
        font-size: 19px;
    }

    .select-input i {
        font-size: 25px;
        color: #ea580c;
    }

    .filter_product li a {
        color: black;
        font-size: 18px;
        font-family: 'Roboto', sans-serif;
    }

    .home-filter__page-num {
        font-weight: 700;
        font-size: 20px;
        color: #ea580c;
        margin-right: 22px;
        font-family: 'Roboto', sans-serif;
    }

    .home-filter__page-control {
        border-radius: 2px;
        overflow: hidden;
        display: flex;
        width: 90px;
        height: 40px;
    }

    .home-filter__page-icon {
        font-size: 20px;
        margin: auto;
        color: #ccc;
    }

    .grid__column-2-2 {
        padding-left: 1px;
        padding-right: 20px;
        width: 25%;
        padding-bottom: 5px;
    }

    .image-2 {
        height: 255px;
        width: 170px;
    }

    .text-product-1 {
        margin-left: 40px;
        text-transform: uppercase;
        font-size: 16px;
        margin-right: 70px;
        font-weight: 50px;
        padding-top: 7px;
        color: #0369a1;
        font-family: 'Roboto', sans-serif;
    }

    .text-product p {
        line-height: 25px;
    }

    .text-product-2 {
        text-decoration: none;
        margin-left: 70px;
        text-align: left;
        margin-top: 5px;
        font-size: 22px;
    }

    .price-product {
        font-weight: 700;
        display: flex;
        margin-left: 70px;
        margin-top: 7px;
        font-size: 17px;
        text-align: left;
        color: #075985;
    }

    .price-product-1 {
        font-size: 19px;
        font-family: 'Roboto', sans-serif;
        color: #075985;
    }

    .price-product-2 {
        padding: 0px 0px 0px 5px;
        font-size: 19px;
        text-decoration: line-through;
        color: #fbbf24;
    }

    .star-product {
        font-size: 17px;
        margin-left: 140px;
        color: yellow;
        margin-top: 5px;
    }

    .pagination-1 {
        display: inline-block;
        margin-left: 1030px;
        margin-top: 10px;
        margin-bottom: 20px;
        font-size: 20px;
    }

    .checkbox span {
        font-size: 17px;
        padding-left: 10px;
        color: black;
        font-family: 'Roboto', sans-serif;
    }

    .category-list ul.filter_product {
        position: relative;
        background-color: white;
        padding: 5px 0px;
        list-style: none;
        width: 237px;
    }

    .end {
        background-color: white !important;
        height: 10px;
    }

    .tiltle {
        width: 1700px;
        padding: 20px 17px 20px 0px;
        background: oklch(0.879 0.169 91.605);
        margin: 10px 0px 5px 100px;
        display: flex;
    }

    .tiltle h1 {
        font-family: 'Roboto', sans-serif;
        color: oklch(0.646 0.222 41.116);
        font-size: 37px;
        text-align: center;
        margin-left: 90px;
    }

    .select-arrange {
        font-weight: 700;
        margin-left: auto;
        position: relative;
        min-width: 263px;
        height: 45px;
        padding: 0 12px;
        border-radius: 2px;
        background-color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .select-arrange__label {
        padding-right: 100px;
        font-family: 'Roboto', sans-serif;
        color: #ea580c;
        font-size: 19px;
    }

    .select-arrange i {
        font-size: 25px;
        color: #ea580c;
    }

    .select-input__icon {
        font-size: 15px;
        color: rgb(131, 131, 131);
        position: relative;
        top: 1px;
    }

    .select-input__list {
        box-shadow: 0 1px 5px 2px rgba(0, 0, 0, 0.1);
        z-index: 1;
        border-bottom: 2px solid #ea580c;
        border-top: 2px solid #ea580c;
        position: absolute;
        left: 0;
        right: 0;
        top: 45px !important;
        border-radius: 2px;
        background-color: white;
        list-style: none;
        padding: 12px 16px;
        display: none;
    }

    .select-arrange:hover .select-arrange__list {
        display: block;
    }

    .select-arrange__list {
        box-shadow: 0 1px 5px 2px rgba(0, 0, 0, 0.1);
        z-index: 1;
        border-bottom: 2px solid #ea580c;
        border-top: 2px solid #ea580c;
        position: absolute;
        left: 0;
        right: 0;
        top: 45px;
        border-radius: 2px;
        background-color: white;
        list-style: none;
        padding: 12px 16px;
        display: none;
    }

    .select-arrange__list li {
        padding: 6px;
    }

    .select-arrange__link {
        font-size: 15px;
        color: black;
        text-decoration: none;
        display: block;
    }

    .checkbox_arrange span {
        font-size: 17px;
        padding-left: 10px;
        color: black;
        font-family: 'Roboto', sans-serif;
    }

    .checkbox_arrange span:hover {
        color: #fcd34d;
    }

    .select-arrange__link:hover {
        color: #06b6d4;
    }

    .select-arrange__item {
        line-height: 20px;
        display: flex;
    }

    /* NHÀ XUẤT BẢN/*/

    .select-publisher {
        font-weight: 700;
        margin-right: 20px;
        position: relative;
        min-width: 263px;
        height: 45px;
        padding: 0 12px;
        border-radius: 2px;
        background-color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .select-publisher__label {
        font-family: 'Roboto', sans-serif;
        color: #ea580c;
        font-size: 19px;
    }

    .select-publisher i {
        font-size: 25px;
        color: #ea580c;
    }

    .select-publisher__list {
        box-shadow: 0 1px 5px 2px rgba(0, 0, 0, 0.1);
        z-index: 1;
        border-bottom: 2px solid #ea580c;
        border-top: 2px solid #ea580c;
        position: absolute;
        left: 0;
        right: 0;
        top: 45px;
        border-radius: 2px;
        background-color: white;
        list-style: none;
        padding: 12px 16px;
        display: none;
    }

    .select-publisher__list li {
        padding: 6px;
    }

    .select-publisher__link {
        font-size: 15px;
        color: black;
        text-decoration: none;
        display: block;
    }

    .checkbox_publisher span {
        font-size: 17px;
        padding-left: 10px;
        color: black;
        font-family: 'Roboto', sans-serif;
    }

    .select-publisher:hover .select-publisher__list {
        display: block;
    }

    .checkbox_publisher span:hover {
        color: #fcd34d;
    }

    .select-publisher__link:hover {
        color: #06b6d4;
    }

    .select-publisher__item {
        line-height: 20px;
        display: flex;
    }

    /* THỂ LOẠI/*/

    .select-category {
        font-weight: 700;
        margin-right: 20px;
        position: relative;
        min-width: 200px;
        height: 45px;
        padding: 0 12px;
        border-radius: 2px;
        background-color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .select-category__label {
        font-family: 'Roboto', sans-serif;
        color: #ea580c;
        font-size: 19px;
    }

    .select-category i {
        font-size: 25px;
        color: #ea580c;
    }

    .select-category__list {
        box-shadow: 0 1px 5px 2px rgba(0, 0, 0, 0.1);
        z-index: 1;
        border-bottom: 2px solid #ea580c;
        border-top: 2px solid #ea580c;
        position: absolute;
        left: 0;
        right: 0;
        top: 45px;
        border-radius: 2px;
        background-color: white;
        list-style: none;
        padding: 12px 16px;
        display: none;
    }

    .select-category__list li {
        padding: 6px;
    }

    .select-category__link {
        font-size: 15px;
        color: black;
        text-decoration: none;
        display: block;
    }

    .checkbox_category span {
        font-size: 17px;
        padding-left: 10px;
        color: black;
        font-family: 'Roboto', sans-serif;
    }

    .select-category:hover .select-category__list {
        display: block;
    }

    .checkbox_category span:hover {
        color: #fcd34d;
    }

    .select-category__link:hover {
        color: #06b6d4;
    }

    .select-category__item {
        line-height: 20px;
        display: flex;
    }

    /* TÁC GIẢ/*/

    .select-author {
        font-weight: 700;
        margin-right: 20px;
        position: relative;
        min-width: 220px;
        height: 45px;
        padding: 0 12px;
        border-radius: 2px;
        background-color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .select-author__label {
        font-family: 'Roboto', sans-serif;
        color: #ea580c;
        font-size: 19px;
    }

    .select-author i {
        font-size: 25px;
        color: #ea580c;
    }

    .select-author__list {
        z-index: 1;
        border-bottom: 2px solid #ea580c;
        border-top: 2px solid #ea580c;
        position: absolute;
        left: 0;
        right: 0;
        top: 45px;
        border-radius: 2px;
        background-color: white;
        list-style: none;
        padding: 12px 16px;
        display: none;
    }

    .select-author__list li {
        padding: 6px;
    }

    .select-author__link {
        font-size: 15px;
        color: black;
        text-decoration: none;
        display: block;
    }

    .checkbox_author span {
        font-size: 17px;
        padding-left: 10px;
        color: black;
        font-family: 'Roboto', sans-serif;
    }

    .select-author:hover .select-author__list {
        display: block;
    }

    .checkbox_author span:hover {
        color: #fcd34d;
    }

    .select-author__link:hover {
        color: #06b6d4;
    }

    .select-author__item {
        line-height: 20px;
        display: flex;
    }
</style>

<div class="mainprinfo">
    <ul class="mainprinfo-list">
        <li class="mainprinfo-item mainprinfo-btn"><a href="index.php">Trang chủ</a></li>
        <li class="mainprinfo-item mainprinfo-btn-1"><a href="#">Kỹ năng - Công cụ</a></li>
        <li class="mainprinfo-item mainprinfo-btn-2"> Combo sách của Phan Văn Trường: Thay đổi một suy nghĩ, thay đổi cả cuộc đời - Một đời như kẻ tìm đường - Một đời quản trị - Một đời thương thuyết</li>
    </ul>
</div>
<div class="banner-2">
    <img class="img-index-3" src="https://file.hstatic.net/200000504927/file/5-cuon-sach__1__7a220db9e5524215a383ffb88c5006c9.jpg" alt="">
</div>
<div class="tiltle">
    <h1>Tất cả sản phẩm </h1>
    <div class="select-arrange">
        <i class="fa-solid fa-arrow-up-wide-short"></i>
        <span class="select-arrange__label">Sắp xếp</span>
        <i class='.select-input__icon bx bx-chevron-down'></i>
        <ul class="select-arrange__list">
            <li class="select-arrange__item">
                <label for="checkbox-1" class="checkbox_arrange">
                    <a href="#" class="select-input__link"><input type="checkbox" id="checkbox-1" style="background-color:#155e75"><span>Sản phẩm nổi bật</span></a>
                </label>
            </li>
            <li class="select-arrange__item">
                <label for="checkbox-1" class="checkbox_arrange">
                    <a href="#" class="select-input__link"><input type="checkbox" id="checkbox-1"><span>Giá: Tăng dần</span></a>
                </label>
            </li>
            <li class="select-arrange__item">
                <label for="checkbox-1" class="checkbox_arrange">
                    <a href="#" class="select-input__link"><input type="checkbox" id="checkbox-1"><span>Giá: Giảm dần</span></a>
                </label>
            </li>
            <li class="select-arrange__item">
                <label for="checkbox-1" class="checkbox_arrange">
                    <a href="#" class="select-input__link"><input type="checkbox" id="checkbox-1"><span>Tên: A-Z</span></a>
                </label>
            </li>
            <li class="select-arrange__item">
                <label for="checkbox-1" class="checkbox_arrange">
                    <a href="#" class="select-input__link"><input type="checkbox" id="checkbox-1"><span>Tên: Z-A</span></a>
                </label>
            </li>
        </ul>
    </div>
</div>
<div class="app__container">
    <div class="grid">
        <div class="grid__row app__content">
            <div class="grid__column-2">
                <nav class="category">
                    <h3 class="category__heading"><i class='category__heading-icon bx bx-list-ul'></i> Danh mục
                    </h3>
                    <ul class="category-list">
                        <li>
                            <a href="#" onclick="myFunction1()" class="dropbtn1">Trẻ Em<i class='bx bxs-chevron-down'></i></a>
                            <ul class="filter_product" id="Dropdown1">
                                <li><a href="../html/product-1.html">Văn học nước ngoài</a></li>
                                <li><a href="../html/product.html">Kĩ năng sống</a></li>
                                <li><a href="../html/product-1.html">Phát triển tư duy</a></li>
                                <li><a href="../html/product.html">Tiếng Anh</a></li>
                                <li><a href="../html/product-1.html">Truyện tranh</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" onclick="myFunction2()" class="dropbtn2">Tuổi Teen<i class='bx bxs-chevron-down'></i></a>
                            <ul class="filter_product" id="Dropdown2">
                                <li><a href="../html/product-1.html">Văn học kinh điển</a></li>
                                <li><a href="../html/product.html">Doanh nhân - Thần tượng</a></li>
                                <li><a href="../html/product-1.html">Kỹ năng sống</a></li>
                                <li><a href="../html/product.html">Kiến thức khoa học</a></li>
                                <li><a href="../html/product-1.html">Tâm lý - Giới tính</a></li>
                                <li><a href="../html/product.html">Truyện tranh</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" onclick="myFunction3()" class="dropbtn3">Người Lớn<i class='bx bxs-chevron-down'></i></a>
                            <ul class="filter_product" id="Dropdown3">
                                <li><a href="../html/product-1.html">Kinh tế - Tài chính</a></li>
                                <li><a href="../html/product.html">Tư duy lãnh đạo</a></li>
                                <li><a href="../html/product-1.html">Kinh doanh - Đầu tư</a></li>
                                <li><a href="../html/product.html">Văn hóa - Chính trị</a></li>
                                <li><a href="../html/product-1.html">Pháp luật</a></li>
                                <li><a href="../html/product.html">Tâm sinh lý</a></li>
                                <li><a href="../html/product-1.html">Marketing - Truyền thông</a></li>
                                <li><a href="../html/product.html">Sức khỏe - Y học</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" onclick="myFunction4()" class="dropbtn4">Truyện Tranh<i class='bx bxs-chevron-down'></i></a>
                            <ul class="filter_product" id="Dropdown4">
                                <li><a href="../html/product-1.html">One Piece - Đảo hải tặc</a></li>
                                <li><a href="../html/product.html">Conan - Thám tử lừng danh</a></li>
                                <li><a href="../html/product-1.html">Doraemon - Chú mèo máy </a></li>
                                <li><a href="../html/product.html">Fairy Tail - Hội pháp sư</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="grid__column-10">
                <div class="home-filter">
                    <span class="home-filter__label">Bộ lọc</span>

                    <div class="select-publisher">
                        <span class="select-publisher__label">Nhà xuất bản</span>
                        <i class='.select-publisher__icon bx bx-chevron-down'></i>
                        <ul class="select-publisher__list">
                            <?php
                            $sql_category = mysqli_query($con, "SELECT * FROM nhaxuatban");
                            while ($row_category = mysqli_fetch_array($sql_category)) {
                            ?>
                                <li class="select-publisher__item">
                                    <label class="checkbox_publisher">
                                        <input type="checkbox" class="checkbox-filter-publisher"
                                            data-id="<?php echo $row_category["id_nhaxuatban"]; ?>"
                                            data-name="<?php echo $row_category["ten_nha_xuat_ban"]; ?>">
                                        <span><?php echo $row_category["ten_nha_xuat_ban"]; ?></span>
                                    </label>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="select-category">
                        <span class="select-category__label">Thể loại</span>
                        <i class='.select-category__icon bx bx-chevron-down'></i>
                        <ul class="select-category__list">
                            <?php
                            $sql_category = mysqli_query($con, "SELECT * FROM loaisanpham");
                            while ($row_category = mysqli_fetch_array($sql_category)) {
                            ?>
                                <li class="select-category__item">
                                    <label class="checkbox_category">
                                        <input type="checkbox" class="checkbox-filter-category"
                                            data-id="<?php echo $row_category["id_loai_spham"]; ?>"
                                            data-name="<?php echo $row_category["ten_loai_sach"]; ?>">
                                        <span><?php echo $row_category["ten_loai_sach"]; ?></span>
                                    </label>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="select-author">
                        <span class="select-author__label">Tác giả</span>
                        <i class='.select-author__icon bx bx-chevron-down'></i>
                        <ul class="select-author__list">
                            <?php
                            $sql_category = mysqli_query($con, "SELECT * FROM tacgia");
                            while ($row_category = mysqli_fetch_array($sql_category)) {
                            ?>
                                <li class="select-author__item">
                                    <label class="checkbox_author">
                                        <input type="checkbox" class="checkbox-filter-author"
                                            data-id="<?php echo $row_category["id_tacgia"]; ?>"
                                            data-name="<?php echo $row_category["ten_tac_gia"]; ?>">
                                        <span><?php echo $row_category["ten_tac_gia"]; ?></span>
                                    </label>

                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="select-input">
                        <span class="select-input__label">Giá</span>
                        <i class='.select-input__icon bx bx-chevron-down'></i>
                        <ul class="select-input__list">
                            <?php
                            $sql_khoanggia = mysqli_query($con, "SELECT * FROM khoanggia");
                            while ($row_khoanggia = mysqli_fetch_array($sql_khoanggia)) {
                            ?>
                                <li class="select-input__item">
                                    <label class="checkbox_author">
                                        <input type="checkbox" class="checkbox-filter-price"
                                            data-id="<?php echo $row_khoanggia["id_khoanggia"]; ?>"
                                            data-name="<?php echo $row_khoanggia["ten_khoang_gia"]; ?>">
                                        <span><?php echo $row_khoanggia["ten_khoang_gia"]; ?></span>
                                    </label>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="home-filter__page">
                        <span class="home-filter__page-num">
                            <span class="home-filter__page-current">1</span>/2
                        </span>
                        <div class="home-filter__page-control">
                            <a href="#" class="home-filter__page-btn home-filter__page-btn--disabled">
                                <i class='home-filter__page-icon bx bx-chevron-left'></i>
                            </a>
                            <a href="#" class="home-filter__page-btn">
                                <i class='home-filter__page-icon bx bx-chevron-right'></i>
                            </a>
                        </div>
                    </div>
                </div>


                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const priceCheckboxes = document.querySelectorAll(".checkbox-filter-price");
                        const publisherCheckboxes = document.querySelectorAll(".checkbox-filter-publisher");
                        const categoryCheckboxes = document.querySelectorAll(".checkbox-filter-category");
                        const authorCheckboxes = document.querySelectorAll(".checkbox-filter-author");
                        let selectedPrices = JSON.parse(localStorage.getItem("selected_prices")) || [];
                        let selectedPublishers = JSON.parse(localStorage.getItem("selected_publishers")) || [];
                        let selectedCategory = JSON.parse(localStorage.getItem("selected_categorys")) || [];
                        let selectedAuthor = JSON.parse(localStorage.getItem("selected_authors")) || [];

                        function updateFilters() {
                            let priceQuery = selectedPrices.length ? "&id=" + selectedPrices.join(",") : "";
                            let publisherQuery = selectedPublishers.length ? "&publisher=" + selectedPublishers.join(",") : "";
                            let categoryQuery = selectedCategory.length ? "&category=" + selectedCategory.join(",") : "";
                            let authorQuery = selectedAuthor.length ? "&author=" + selectedAuthor.join(",") : "";
                            window.location.href = "?quanly=tonghop" + publisherQuery + priceQuery + categoryQuery + authorQuery;
                        }

                        priceCheckboxes.forEach(checkbox => {
                            let priceId = checkbox.getAttribute("data-id");
                            if (selectedPrices.includes(priceId)) {
                                checkbox.checked = true;
                            }
                            checkbox.addEventListener("change", function() {
                                let priceId = this.getAttribute("data-id");
                                if (this.checked) {
                                    if (!selectedPrices.includes(priceId)) {
                                        selectedPrices.push(priceId);
                                    }
                                } else {
                                    selectedPrices = selectedPrices.filter(id => id !== priceId);
                                }
                                localStorage.setItem("selected_prices", JSON.stringify(selectedPrices));
                                updateFilters();
                            });
                        });

                        publisherCheckboxes.forEach(checkbox => {
                            let publisherId = checkbox.getAttribute("data-id");
                            if (selectedPublishers.includes(publisherId)) {
                                checkbox.checked = true;
                            }
                            checkbox.addEventListener("change", function() {
                                let publisherId = this.getAttribute("data-id");
                                if (this.checked) {
                                    if (!selectedPublishers.includes(publisherId)) {
                                        selectedPublishers.push(publisherId);
                                    }
                                } else {
                                    selectedPublishers = selectedPublishers.filter(id => id !== publisherId);
                                }
                                localStorage.setItem("selected_publishers", JSON.stringify(selectedPublishers));
                                updateFilters();
                            });
                        });

                        categoryCheckboxes.forEach(checkbox => {
                            let categoryId = checkbox.getAttribute("data-id");
                            if (selectedCategory.includes(categoryId)) {
                                checkbox.checked = true;
                            }
                            checkbox.addEventListener("change", function() {
                                let categoryId = this.getAttribute("data-id");
                                if (this.checked) {
                                    if (!selectedCategory.includes(categoryId)) {
                                        selectedCategory.push(categoryId);
                                    }
                                } else {
                                    selectedCategory = selectedCategory.filter(id => id !== categoryId);
                                }
                                localStorage.setItem("selected_categorys", JSON.stringify(selectedCategory));
                                updateFilters();
                            });
                        });

                        authorCheckboxes.forEach(checkbox => {
                            let authorId = checkbox.getAttribute("data-id");
                            if (selectedAuthor.includes(authorId)) {
                                checkbox.checked = true;
                            }
                            checkbox.addEventListener("change", function() {
                                let authorId = this.getAttribute("data-id");
                                if (this.checked) {
                                    if (!selectedAuthor.includes(authorId)) {
                                        selectedAuthor.push(authorId);
                                    }
                                } else {
                                    selectedAuthor = selectedAuthor.filter(id => id !== authorId);
                                }
                                localStorage.setItem("selected_authors", JSON.stringify(selectedAuthor));
                                updateFilters();
                            });
                        });

                    });
                </script>