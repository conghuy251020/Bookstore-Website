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
    <link rel="stylesheet" href="../html/product.html">
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
    font-size: 20px;
    font-family: 'Roboto', sans-serif;
    color: #fb923c;
}

.home-filter__label {
    font-weight: 300;
    font-size: 20px;
    color: #ea580c;
    margin-right: 36px;
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

</style>

<body>
    <?php
        include("./php/topbar.php")
    ?>
    <div class="mainprinfo">
        <ul class="mainprinfo-list">
            <li class="mainprinfo-item mainprinfo-btn"><a href="#">Trang chủ</a></li>
            <li class="mainprinfo-item mainprinfo-btn-1"><a href="#">Kỹ năng - Công cụ</a></li>
            <li class="mainprinfo-item mainprinfo-btn-2"> Combo sách của Phan Văn Trường: Thay đổi một suy nghĩ, thay đổi cả cuộc đời - Một đời như kẻ tìm đường - Một đời quản trị - Một đời thương thuyết</li>
        </ul>
    </div>
    <div class="banner-2">
        <img class="img-index-3" src="https://file.hstatic.net/200000504927/file/5-cuon-sach__1__7a220db9e5524215a383ffb88c5006c9.jpg" alt="">
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
                                    <li><a href="#">Văn học nước ngoài</a></li>
                                    <li><a href="#">Kĩ năng sống</a></li>
                                    <li><a href="#">Phát triển tư duy</a></li>
                                    <li><a href="#">Tiếng Anh</a></li>
                                    <li><a href="#">Truyện tranh</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" onclick="myFunction2()" class="dropbtn2">Tuổi Teen<i class='bx bxs-chevron-down'></i></a>
                                <ul class="filter_product" id="Dropdown2">
                                    <li><a href="#">Văn học kinh điển</a></li>
                                    <li><a href="#">Doanh nhân - Thần tượng</a></li>
                                    <li><a href="#">Kỹ năng sống</a></li>
                                    <li><a href="#">Kiến thức khoa học</a></li>
                                    <li><a href="#">Tâm lý - Giới tính</a></li>
                                    <li><a href="#">Truyện tranh</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" onclick="myFunction3()" class="dropbtn3">Người Lớn<i class='bx bxs-chevron-down'></i></a>
                                <ul class="filter_product" id="Dropdown3">
                                    <li><a href="#">Kinh tế - Tài chính</a></li>
                                    <li><a href="#">Tư duy lãnh đạo</a></li>
                                    <li><a href="#">Kinh doanh - Đầu tư</a></li>
                                    <li><a href="#">Văn hóa - Chính trị</a></li>
                                    <li><a href="#">Pháp luật</a></li>
                                    <li><a href="#">Tâm sinh lý</a></li>
                                    <li><a href="#">Marketing - Truyền thông</a></li>
                                    <li><a href="#">Sức khỏe - Y học</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" onclick="myFunction4()" class="dropbtn4">Truyện Tranh<i class='bx bxs-chevron-down'></i></a>
                                <ul class="filter_product" id="Dropdown4">
                                    <li><a href="#">One Piece - Đảo hải tặc</a></li>
                                    <li><a href="#">Conan - Thám tử lừng danh</a></li>
                                    <li><a href="#">Doraemon - Chú mèo máy </a></li>
                                    <li><a href="#">Fairy Tail - Hội pháp sư</a></li>
                                </ul>
                            </li>
                            <!-- <li class="category-item">
                                <a href="#" class="category-item__link">Tuổi Teen </a>
                            </li>
                            <li class="category-item">
                                <a href="#" class="category-item__link">Người lớn</a>
                            </li>-->
                        </ul>
                    </nav>
                </div>
                <div class="grid__column-10">
                    <div class="home-filter">
                        <span class="home-filter__label">Sắp xếp theo</span>
                        <button class="home-filter__btn btn">Phổ Biến</button>
                        <button class="home-filter__btn btn btn--primary">Mới Nhất</button>
                        <button class="home-filter__btn btn">Bán Chạy</button>

                        <div class="select-input">
                            <span class="select-input__label">Giá</span>
                            <i class='.select-input__icon bx bx-chevron-down'></i>
                            <ul class="select-input__list">
                                <li class="select-input__item">
                                    <label for="checkbox-1" class="checkbox">
                                        <a href="#" class="select-input__link"><input type="checkbox" id="checkbox-1" style="background-color:#155e75"><span>Dưới 100.000đ</span></a>
                                    </label>
                                </li>
                                <li class="select-input__item">
                                    <label for="checkbox-1" class="checkbox">
                                        <a href="#" class="select-input__link"><input type="checkbox" id="checkbox-1"><span>100.000đ - 500.000đ</span></a>
                                    </label>
                                </li>
                                <li class="select-input__item">
                                    <label for="checkbox-1" class="checkbox">
                                        <a href="#" class="select-input__link"><input type="checkbox" id="checkbox-1"><span>500.000đ - 1.000.000đ</span></a>
                                    </label>
                                </li>
                                <li class="select-input__item">
                                    <label for="checkbox-1" class="checkbox">
                                        <a href="#" class="select-input__link"><input type="checkbox" id="checkbox-1"><span>1.000.000đ - 3.000.000đ</span></a>
                                    </label>
                                </li>
                                <li class="select-input__item">
                                    <label for="checkbox-1" class="checkbox">
                                        <a href="#" class="select-input__link"><input type="checkbox" id="checkbox-1"><span>Trên 3.000.000đ</span></a>
                                    </label>
                                </li>
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

                    <div class="home-product">
                        <div class="grid__row">
                            <div class="grid__column-2-2">
                                <div class="home-product-item">
                                    <a href="#"><img class="image-2" src="../img-product/sach36.jpg" alt=""></a>
                                    <div class="text-product">
                                        <h1 class="text-product-1">Nhà xuất bản lẻ</h1>
                                        <p class="text-product-2"><a href="#">Tâm Lý Học Nói Gì Về Hạnh Phúc?</a></p>
                                    </div>
                                    <div class="price-product">
                                        <p class="price-product-1">240,000đ</p>
                                        <p class="price-product-2">220,000đ</p>
                                    </div>
                                    <div class="star-product">
                                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-2-2">
                                <div class="home-product-item">
                                    <a href="#"><img class="image-2" src="../img-product/sach37.jpg" alt=""></a>
                                    <div class="text-product">
                                        <h1 class="text-product-1">Nhà xuất bản lẻ</h1>
                                        <p class="text-product-2"><a href="#">Tâm Lý Học Nói Gì Về Nỗi Đau?</a></p>
                                    </div>
                                    <div class="price-product">
                                        <p class="price-product-1">240,000đ</p>
                                        <p class="price-product-2">220,000đ</p>
                                    </div>
                                    <div class="star-product">
                                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-2-2">
                                <div class="home-product-item">
                                    <a href="#"><img class="image-2" src="../img-product/sach38.jpg" alt=""></a>
                                    <div class="text-product">
                                        <h1 class="text-product-1">Nhà xuất bản lẻ</h1>
                                        <p class="text-product-2"><a href="#">Đọc Chữa Lành - Tâm Tha Thứ, Lòng Bình Yên</a></p>
                                    </div>
                                    <div class="price-product">
                                        <p class="price-product-1">165,000đ</p>
                                        <p class="price-product-2">155,000đ</p>
                                    </div>
                                    <div class="star-product">
                                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-2-2">
                                <div class="home-product-item">
                                    <a href="#"><img class="image-2" src="../img-product/sach39.jpg" alt=""></a>
                                    <div class="text-product">
                                        <h1 class="text-product-1">Nhà xuất bản lẻ</h1>
                                        <p class="text-product-2"><a href="#">Không Còn Đường Lùi Mới Có Thành Công</a></p>
                                    </div>
                                    <div class="price-product">
                                        <p class="price-product-1">200,000đ</p>
                                        <p class="price-product-2">190,000đ</p>
                                    </div>
                                    <div class="star-product">
                                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-2-2">
                                <div class="home-product-item">
                                    <a href="#"><img class="image-2" src="../img-product/sach40.jpg" alt=""></a>
                                    <div class="text-product">
                                        <h1 class="text-product-1">Nhà xuất bản lẻ</h1>
                                        <p class="text-product-2"><a href="#">Giữa Thế Gian Ồn Ào Sống Một Đời Giản Đơn</a></p>
                                    </div>
                                    <div class="price-product">
                                        <p class="price-product-1">125,000đ</p>
                                        <p class="price-product-2">110,000đ</p>
                                    </div>
                                    <div class="star-product">
                                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-2-2">
                                <div class="home-product-item">
                                    <a href="#"><img class="image-2" src="../img-product/sach41.jpg" alt=""></a>
                                    <div class="text-product">
                                        <h1 class="text-product-1">Nhà xuất bản lẻ</h1>
                                        <p class="text-product-2"><a href="#">Sống Tự Do Giữa Đời Tự Tại</a></p>
                                    </div>
                                    <div class="price-product">
                                        <p class="price-product-1">110,000đ</p>
                                        <p class="price-product-2">100,000đ</p>
                                    </div>
                                    <div class="star-product">
                                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-2-2">
                                <div class="home-product-item">
                                    <a href="#"><img class="image-2" src="../img-product/sach42.jpg" alt=""></a>
                                    <div class="text-product">
                                        <h1 class="text-product-1">Nhà xuất bản lẻ</h1>
                                        <p class="text-product-2"><a href="#">Ổn Định Hay Tự Do?</a></p>
                                    </div>
                                    <div class="price-product">
                                        <p class="price-product-1">150,000đ</p>
                                        <p class="price-product-2">140,000đ</p>
                                    </div>
                                    <div class="star-product">
                                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-2-2">
                                <div class="home-product-item">
                                    <a href="#"><img class="image-2" src="../img-product/sach43.jpg" alt=""></a>
                                    <div class="text-product">
                                        <h1 class="text-product-1">Nhà xuất bản lẻ</h1>
                                        <p class="text-product-2"><a href="#">Đáp Án Của Thời Gian</a></p>
                                    </div>
                                    <div class="price-product">
                                        <p class="price-product-1">190,000đ</p>
                                        <p class="price-product-2">185,000đ</p>
                                    </div>
                                    <div class="star-product">
                                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-2-2">
                                <div class="home-product-item">
                                    <a href="#"><img class="image-2" src="../img-product/sach44.jpg" alt=""></a>
                                    <div class="text-product">
                                        <h1 class="text-product-1">Nhà xuất bản lẻ</h1>
                                        <p class="text-product-2"><a href="#">Đừng Cúi Đầu Mà Khóc, Hãy Ngẩng Đầu Mà Đi</a></p>
                                    </div>
                                    <div class="price-product">
                                        <p class="price-product-1">220,000đ</p>
                                        <p class="price-product-2">215,000đ</p>
                                    </div>
                                    <div class="star-product">
                                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-2-2">
                                <div class="home-product-item">
                                    <a href="#"><img class="image-2" src="../img-product/sach45.jpg" alt=""></a>
                                    <div class="text-product">
                                        <h1 class="text-product-1">Nhà xuất bản lẻ</h1>
                                        <p class="text-product-2"><a href="#">Càng Nhiều Cố Gắng, Càng Lắm May Mắn</a></p>
                                    </div>
                                    <div class="price-product">
                                        <p class="price-product-1">260,000đ</p>
                                        <p class="price-product-2">250,000đ</p>
                                    </div>
                                    <div class="star-product">
                                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-2-2">
                                <div class="home-product-item">
                                    <a href="#"><img class="image-2" src="../img-product/sach46.jpg" alt=""></a>
                                    <div class="text-product">
                                        <h1 class="text-product-1">Nhà xuất bản lẻ</h1>
                                        <p class="text-product-2"><a href="#">Sức Mạnh Của Ngôn Từ</a></p>
                                    </div>
                                    <div class="price-product">
                                        <p class="price-product-1">270,000đ</p>
                                        <p class="price-product-2">250,000đ</p>
                                    </div>
                                    <div class="star-product">
                                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-2-2">
                                <div class="home-product-item">
                                    <a href="#"><img class="image-2" src="../img-product/sach47.png" alt=""></a>
                                    <div class="text-product">
                                        <h1 class="text-product-1">Nhà xuất bản lẻ</h1>
                                        <p class="text-product-2"><a href="#">Rất Thích Rất Thích Em</a></p>
                                    </div>
                                    <div class="price-product">
                                        <p class="price-product-1">155,000đ</p>
                                        <p class="price-product-2">135,000đ</p>
                                    </div>
                                    <div class="star-product">
                                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="b-page">
        <div class="pagination-1">
            <a href="product.php">&laquo;</a>
            <a href="product.php">1</a>
            <a href="product-1.php">2</a>
            <a href="product-1.php">&raquo;</a>
        </div>
    </div>

    <footer>
        <div class="footer">
            <div class="f1">
                <h1>Nhà sách online BookStore</h1>
                <p>Trang sách nhỏ mở Thể giới lớn</p>
                <img src="../img/Picture3.png" alt="">
                <!-- <img src="img/Picture2.png" alt=""> -->
            </div>
            <div class="f2">
                <h1>Địa điểm</h1>
                <ul>
                    <li>Nhà sách Kala, Phố Sách Hà Nội, 19/12 Lý Thường Kiệt, Phường Trần Hưng Đạo, Quận Hoàn Kiếm, Hà Nội</li>
                    <li>0367 19 5476</li>
                    <li>support@kalabooks.vn</li>
                </ul>
            </div>
            <div class="f3">
                <h1>Hỗ trợ khách hàng</h1>
                <ul>
                    <li><a href="#">Tìm kiếm</a></li>
                    <li><a href="#">Về Kala</a></li>
                    <li><a href="#">Chính sách đổi trả</a></li>
                    <li><a href="#">Chính sách bảo mật</a></li>
                    <li><a href="#">Điều khoản dịch vụ</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
            <div class="f4">
                <h1>Chăm sóc khách hàng</h1>
                <h2 class="f-icon"><i class='bx bx-phone-call'></i> 0367 19 5476</h2>
                <h3>Follow Us</h3>
                <a href="#"><i class='bx bxl-facebook' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-instagram' ></i></a>
                <a href="#"><i class='bx bxl-google-plus' ></i></a>
                <a href="#"><i class='bx bxl-youtube' ></i></a>
            </div>
        </div>
    </footer>
    <script>
        function myFunction1() {
            document.getElementById("Dropdown1").classList.toggle("show1");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn1')) {
                var dropdowns = document.getElementsByClassName("filter_product");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show1')) {
                        openDropdown.classList.remove('show1');
                    }
                }
            }
        }
    </script>
    <script>
        function myFunction2() {
            document.getElementById("Dropdown2").classList.toggle("show2");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn2')) {
                var dropdowns = document.getElementsByClassName("filter_product");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show2')) {
                        openDropdown.classList.remove('show2');
                    }
                }
            }
        }
    </script>
    <script>
        function myFunction3() {
            document.getElementById("Dropdown3").classList.toggle("show3");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn3')) {
                var dropdowns = document.getElementsByClassName("filter_product");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show3')) {
                        openDropdown.classList.remove('show3');
                    }
                }
            }
        }
    </script>
    <script>
        function myFunction4() {
            document.getElementById("Dropdown4").classList.toggle("show4");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn4')) {
                var dropdowns = document.getElementsByClassName("filter_product");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show4')) {
                        openDropdown.classList.remove('show4');
                    }
                }
            }
        }
    </script>
</body>