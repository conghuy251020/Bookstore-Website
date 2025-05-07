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
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Domine&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="../css/productinfo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!--<link rel="stylesheet" href="../css/product.css">-->
    <title>Shop Book</title>
</head>
<!--NAVBAR-->

<style>
    .mainprinfo-list {
        margin-left: 180px !important;
        display: flex;
        list-style: none;
        padding: 15px 15px;
    }

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

    .grid-productinfo {
        width: 1500px;
        margin: 0 auto;
    }

    .off-info .sm-title {
        font-family: 'Roboto', sans-serif;
        background: #ef4444;
        color: white;
        display: inline-block;
        padding: 11px;
        position: absolute;
        top: 213px;
        left: 200px;
        font-size: 20px;
        letter-spacing: 1px;
        z-index: 1;
        cursor: pointer;
        transform: rotate(180deg);
        writing-mode: vertical-lr;
    }

    .img-product img {
        margin-bottom: 60px;
        height: 590px;
        width: 400px;
    }

    .img-product {
        width: 100%;
        background-color: white;
        text-align: center;
        padding-top: 60px;
    }

    .grid__column-7 {
        padding-left: 10px;
        padding-right: 7px;
        width: 54%;
    }

    .name-product {
        padding: 25px 10px 0px;
        font-family: 'Roboto', sans-serif;
        color:
            /*#06b6d4*/
            #ef4444;
        font-size: 15px;
    }

    .tilte-product-info {
        margin: 20px 3px 0px;
        list-style: none;
        display: flex;
    }

    .info-product h5 {
        font-size: 19px;
        color: #06b6d4;
        font-weight: 700;
    }

    .info-product span {
        padding: 0px 8px;
        font-size: 19px;
        color: #f97316;
        font-weight: 700;
    }

    .hr-product::after {
        content: "";
        position: absolute;
        display: block;
        border-left: 2px solid gray;
        height: 15px;
        top: 5px;
        right: 1px;
    }

    .info-product-1 {
        font-family: 'Roboto', sans-serif;
        padding: 0px 10px 0px;
        display: flex;
    }

    .info-product-1 h5 {
        font-size: 19px;
        color: #06b6d4;
        font-weight: 700;
    }

    .info-product-1 span {
        padding: 0px 8px;
        font-size: 19px;
        color: #f97316;
        font-weight: 700;
    }

    .price-product-info {
        padding: 30px 5px 0px;
        display: flex;
        list-style: none;
    }

    .product-price {
        font-size: 20px;
        padding: 0px 7px 0px;
        font-family: 'Roboto', sans-serif;
        text-decoration: line-through;
        color: gray;
    }

    .product-price-1 {
        padding: 0px 5px 0px;
        font-size: 29px;
        font-weight: 700;
        top: 262px;
        font-family: 'Roboto', sans-serif;
        color: #f97316;
    }

    .price-down {
        font-family: 'Roboto', sans-serif;
        background: #ef4444;
        color: white;
        display: inline-block;
        padding: 4px 14px 4px;
        position: absolute;
        right: 640px;
        top: 330px;
        font-size: 16px;
        letter-spacing: 1px;
        z-index: 1;
        cursor: pointer;
    }

    .button-product-info {
        list-style: none;
        display: flex;
        padding: 15px 0px 5px 0px;
    }

    .button-product {
        margin: 20px 10px 25px;
        background-color: #d4d4d4;
        border: none;
        width: 185px;
        height: 51px;
    }

    .button-product-1 {
        margin: 20px 7px 25px;
        background-color: #fb923c;
        border: none;
        width: 550px;
        height: 51px;
    }

    .button-product a {
        text-decoration: none;
        color: white;
        font-size: 18px;
        font-family: 'Paytone One', sans-serif;
    }

    .button-product-1 a {
        text-decoration: none;
        color: white;
        font-size: 16px;
        font-family: 'Paytone One', sans-serif;
        letter-spacing: 1px;
    }

    .button-info ul {
        margin-bottom: 12px;
        margin-top: 12px;
        display: flex;
        list-style: none;
    }

    .button-info button {
        margin: 0px 11px 0px 0px;
        background-color: #06b6d4;
        color: white;
        font-size: 18px;
        border: none;
        width: 395px;
        height: 68px;
        font-family: 'Paytone One', sans-serif;
    }

    .dropbtn5 {
        color: orange;
        font-weight: 600;
        font-family: 'Roboto', sans-serif;
        position: relative;
        text-decoration: none;
        font-size: 21px;
        display: inline-block;
        padding: 20px 0px 20px 10px;
    }

    .dash-3 {
        margin: 0px 0px 0px 12px;
        border: none;
        width: 775px;
        height: 1px;
        background-color: #e4e4e7;
    }

    .dropbtn6 {
        color: orange;
        font-weight: 600;
        font-family: 'Roboto', sans-serif;
        position: relative;
        text-decoration: none;
        font-size: 21px;
        display: inline-block;
        padding: 20px 0px 20px 10px;
    }

    .info-first-1 {
        font-size: 19px;
        font-family: 'Roboto', sans-serif;
        color: #06b6d4;
    }

    .info-first {
        padding: 10px 0px 0px 0px;
        font-family: 'Roboto', sans-serif;
        color: #06b6d4;
        font-size: 19px;
    }

    .info-second-1 {
        font-size: 19px;
        padding: 0px 0px 0px 260px;
        font-family: 'Roboto', sans-serif;
        color: #06b6d4;
    }

    .info-second-2 {
        font-size: 19px;
        padding: 10px 0px 0px 292px;
        font-family: 'Roboto', sans-serif;
        color: #06b6d4;
    }

    .info-second-3 {
        font-size: 19px;
        padding: 10px 0px 0px 320px;
        font-family: 'Roboto', sans-serif;
        color: #06b6d4;
    }

    .info-second-4 {
        font-size: 19px;
        padding: 10px 0px 0px 345px;
        font-family: 'Roboto', sans-serif;
        color: #06b6d4;
    }

    .info-second-5 {
        font-size: 19px;
        padding: 10px 0px 0px 341px;
        font-family: 'Roboto', sans-serif;
        color: #06b6d4;
    }

    .info-second-6 {
        font-size: 19px;
        padding: 10px 0px 0px 298px;
        font-family: 'Roboto', sans-serif;
        color: #06b6d4;
    }

    .product-describe {
        line-height: 27px;
        padding: 25px 0px 30px 1px;
    }

    .product-describe h3 {
        font-size: 21px;
        font-family: 'Roboto', sans-serif;
        color: orange;
    }

    .product-describe h4 {
        padding: 10px 0px 4px 0px;
        font-size: 19px;
        font-family: 'Roboto', sans-serif;
        color: #06b6d4;
        font-weight: 500;
    }

    .icon-pr {
        top: -3px;
        padding: 0px 10px 0px 0px;
        font-size: 35px;
        position: absolute;
    }

    .attention {
        position: absolute;
        color: #06b6d4;
        font-family: 'Roboto', sans-serif;
        padding: 4px 0px 0px 55px;
        font-size: 19px;
    }

    .icon-pr-1 {
        top: 55px;
        font-size: 35px;
        position: absolute;
    }

    .attention-1 {
        position: absolute;
        color: #06b6d4;
        padding: 24px 0px 0px 54px;
        font-size: 19px;
        font-family: 'Roboto', sans-serif;
    }

    .attention-2 {
        position: absolute;
        font-size: 19px;
        padding: 29px 0px 0px 54px;
        font-family: 'Roboto', sans-serif;
        color: orange;
        font-weight: 600;
    }

    .ico-att-2 {
        padding: 63px 0px 50px 0px;
    }

    .icon-pr-2 {
        top: 120px;
        font-size: 35px;
        position: absolute;
    }

    .attention-3 {
        position: absolute;
        color: #06b6d4;
        padding: 11px 0px 0px 56px;
        font-size: 19px;
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
    }

    .attention-4 {
        position: absolute;
        padding: 16px 0px 0px 56px;
        font-size: 19px;
        font-family: 'Roboto', sans-serif;
        font-weight: 600;
        color: orange;
    }

    .comment h3 {
        color: orange;
        font-weight: 600;
        font-family: 'Roboto', sans-serif;
        font-size: 21px;
        display: inline-block;
        padding: 18px 0px 60px 10px;
    }

    .display i {
        color: orange;
        float: right;
        font-size: 25px;
        padding: 18px 10px 0px 0px;
    }

    .display-1 i {
        color: orange;
        float: right;
        font-size: 25px;
        padding: 18px 10px 0px 0px;
    }

    .filter_product {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease-in-out;
    }

    .filter_product.show5 {
        max-height: 500px;
        /* Giá trị này nên lớn hơn nội dung */
    }

    .filter_product.show6 {
        max-height: 500px;
        /* Giá trị này nên lớn hơn nội dung */
    }

    .product-information-1 {
        padding-bottom: 20px;
    }

    .recomment-1 h3 {
        color: #ef4444;
        font-size: 37px;
        font-family: 'Roboto', sans-serif;
    }

    .recomment-2 h3 {
        color: #ef4444;
        font-size: 37px;
        font-family: 'Roboto', sans-serif;
    }

    .image-1{
        height: 315px;
    width: 190px;
    }

    .product-1 {
    position: relative;
    background: white;
    width: 270px;
    height: 500px;
}

.text-1 {
    text-transform: uppercase;
    font-size: 16px;
    color: #9e9e9e;
    margin-right: 90px;
    padding-top: 10px;
    color: #0369a1;
    font-family: 'Roboto', sans-serif;
}

.text p {
    line-height: 25px;
}

.text-2 {
    text-align: left;
    margin-left: 20px;
    margin-top: 10px;
    font-size: 21px;
}

.price-index {
    font-size: 19px;
    font-family: 'Roboto', sans-serif;
    color: #075985;
}

.price {
    display: flex;
    margin-top: 7px;
    text-align: left;
    margin-left: 19px;
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

.buy a {
    text-decoration: none;
    color: white;
    font-size: 14px;
    font-family: 'Paytone One', sans-serif;
}

.product-kind a img {
    text-decoration: none;
    padding-top: 38px;
}

.product-kind {
    max-width: none !important;
    margin: inherit !important;
    width: 1700px ;
    display: grid
;
    grid-template-columns: repeat(auto-fit, minmax(15rem, auto));
    row-gap: 2rem;
    text-align: center;
    padding-left: 220px;
}

</style>

<body>

    <?php
    include("./php/topbar.php")
    ?>

    <!--DÒNG CHỮ ĐẦU-->
    <div class="mainprinfo">
        <ul class="mainprinfo-list">
            <li class="mainprinfo-item mainprinfo-btn"><a href="#">Trang chủ</a></li>
            <li class="mainprinfo-item mainprinfo-btn-1"><a href="#">Kỹ năng - Công cụ</a></li>
            <li class="mainprinfo-item mainprinfo-btn-2"> Combo sách của Phan Văn Trường: Thay đổi một suy nghĩ, thay đổi cả cuộc đời - Một đời như kẻ tìm đường - Một đời quản trị - Một đời thương thuyết</li>
        </ul>
    </div>
    <div class="app__info">
        <div class="grid-productinfo">
            <div class="grid-productinfo__row app__info">
                <div class="grid__column-5">
                    <div class="img-product">
                        <img src="../img/Screenshot 2022-12-03 021459.png" alt="">
                    </div>
                    <div class="off-info">
                        <h2 class="sm-title">10% OFF</h2>
                    </div>
                </div>
                <div class="grid__column-7">
                    <div class="include-info">
                        <div class="name-product">
                            <h1>Một Đời Thương Thuyết</h1>
                        </div>
                        <div class="tilte-product">
                            <ul class="tilte-product-info">
                                <li>
                                    <div class="info-product">
                                        <h5>Mã sản phẩm:</h5>
                                        <span class="hr-product">MDDT</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="info-product-1">
                                        <h5>Thương hiệu:</h5>
                                        <span>Nhà xuất bản Trẻ</span>
                                    </div>
                                </li>
                            </ul>
                            <ul class="price-product-info">
                                <li>
                                    <p class="product-price">135,000đ</p>
                                </li>
                                <li>
                                    <p class="product-price-1">121,500đ</p>
                                </li>
                                <li>
                                    <h2 class="price-down">10% GIẢM</h2>
                                </li>
                            </ul>
                            <ul class="button-product-info">
                                <li><button class="button-product"><a href="#">Chat ngay</a></button></li>
                                <li><button class="button-product-1"><a href="../html/cart.html">THÊM VÀO GIỎ</a></button></li>
                            </ul>
                        </div>
                    </div>
                    <div class="button-info">
                        <ul>
                            <li><button>FREESHIP đơn hàng từ 1 triệu đồng</button></li>
                            <li><button>Cam kết bảo mật thông tin khách hàng</button></li>
                        </ul>
                    </div>
                    <div class="include-product-information">
                        <div class="product-information">
                            <div class="display">
                                <a href="#" onclick="myFunction5()" class="dropbtn5">THÔNG TIN SẢN PHẨM</a>
                                <i onclick="myFunction5()" class="fa-solid fa-plus"></i>
                            </div>
                            <ul class="filter_product" id="Dropdown5">
                                <li>
                                    <div class="pro-inf">
                                        <ul>
                                            <li class="info-first-1">Công ty phát hành</li>
                                            <li class="info-second-1">NXB Trẻ</li>
                                        </ul>
                                        <ul>
                                            <li class="info-first">Ngày xuất bản</li>
                                            <li class="info-second-2">2019-11-01 00:00:00</li>
                                        </ul>
                                        <ul>
                                            <li class="info-first">Kích thước</li>
                                            <li class="info-second-3">15.5 x 23 cm</li>
                                        </ul>
                                        <ul>
                                            <li class="info-first">Loại bìa</li>
                                            <li class="info-second-4">Bìa mềm</li>
                                        </ul>
                                        <ul>
                                            <li class="info-first">Số trang</li>
                                            <li class="info-second-5">336</li>
                                        </ul>
                                        <ul>
                                            <li class="info-first">Nhà xuất bản</li>
                                            <li class="info-second-6">NXB Trẻ</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="product-describe">
                                        <h3>MÔ TẢ SẢN PHẨM</h3>
                                        <h4>Hơn 40 năm kinh nghiệm trong nghề và cả nghiệp thương thuyết, Giáo sư Phan Văn Trường, Cố vấn thương mại quốc tế của chính phủ Pháp, có lẽ đã cố gắng thể hiện gần trọn vẹn trong cuốn sách này.</h4>
                                        <h4>Được viết từ trải nghiệm của một người thường xuyên “xông pha trận mạc” đàm phán, thật khó có thể tìm được cuốn sách nào khác về đề tài này mang tính thực tế cao hơn Một đời thương thuyết. Trong đó không có những
                                            bài lý thuyết theo lớp lang chuẩn mực, nhưng độc giả sẽ được “sống” thực sự trong từng bối cảnh đàm phán như đang diễn ra trước mắt. Và độc giả sẽ đọc cuốn sách này chẳng khác gì đang đọc một tập truyện ngắn
                                            đầy những tình tiết thú vị.</h4>
                                        <h4>Nhà sách online Book trân trọng giới thiệu đến bạn cuốn sách này. Hy vọng nó sẽ đem lại cho bạn đọc những giờ phút thật thư thái, trong tâm hồn và nhiều kiến thức hấp dẫn, bổ ích cùng những bài học hay về triết
                                            lý nhân sinh. Hãy mua sách tại nhà sách Kala và theo dõi chúng tôi thường xuyên để nhận nhiều ưu đãi hơn nhé.</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="dash-page">
                            <hr class="dash-3">
                        </div>
                        <div class="product-information-1">
                            <div class="display-1">
                                <a href="#" onclick="myFunction6()" class="dropbtn6">DỊCH VỤ GIAO HÀNG</a>
                                <i onclick="myFunction6()" class="fa-solid fa-plus"></i>
                            </div>
                            <ul class="filter_product" id="Dropdown6">
                                <li>
                                    <div class="icon-product">
                                        <ul>
                                            <li class="ico-att">
                                                <span class="icon-pr"><i class='bx bx-check-shield'></i></span>
                                                <span class="attention">Cam kết 100% chính hãng</span>
                                            </li>
                                            <li class="ico-att-1">
                                                <span class="icon-pr-1"><i class='bx bxs-truck'></i></span><span class="attention-1">Giao hàng dự kiến</span>
                                                <br>
                                                <strong class="attention-2">Thứ 2 - Thứ 6 từ 9h00 - 17h00</strong>
                                            </li>
                                            <li class="ico-att-2">
                                                <span class="icon-pr-2"><i class='bx bx-revision'></i></span><span class="attention-3">Hỗ trợ 24/7</span>
                                                <br>
                                                <strong class="attention-4">Với các kênh chat, email & phone</strong>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="comment">
                        <h3>KHÁCH HÀNG NHẬN XÉT</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="dash-page-1">
            <hr class="dash-4">
        </div>
    </div>
    <div class="recomment">
        <div class="recomment-1">
            <h3>Gợi ý Sách liên quan</h3>
        </div>
        <div class="recomment-2">
            <h3>Sản phẩm liên quan</h3>
        </div>
        <div class="include">
            <div class="product-kind">
                <div class="product-1">
                    <a href="#"><img class="image-1" src="../img-productinfo/sach48 (2).jpg" alt=""></a>
                    <div class="text">
                        <h1 class="text-1">Nhà xuất bản lẻ</h1>
                        <p class="text-2"><a href="#">Thế Gian Này Dẫu Đẹp Nhưng Cũng Chẳng Bằng Em</a></p>
                    </div>
                    <div class="price">
                        <p class="price-index">140,000đ</p>
                        <p class="price-index-1">120,000đ</p>
                    </div>
                    <div class="star">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                    </div>
                    <button class="buy"><a href="../html/formlogin.html">GIỎ HÀNG</a></button>
                </div>
                <div class="product-1">
                    <a href="#"><img class="image-1" src="../img-productinfo/sach49.jpg" alt=""></a>
                    <div class="text">
                        <h1 class="text-1">Nhà xuất bản lẻ</h1>
                        <p class="text-2"><a href="#">Không Biết Làm Sao Để Trưởng Thành</a></p>
                    </div>
                    <div class="price">
                        <p class="price-index">175,000đ</p>
                        <p class="price-index-1">165,000đ</p>
                    </div>
                    <div class="star">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                    </div>
                    <button class="buy"><a href="../html/formlogin.html">GIỎ HÀNG</a></button>
                </div>
                <div class="product-1">
                    <a href="#"><img class="image-1" src="../img-productinfo/sach50.jpg" alt=""></a>
                    <div class="text">
                        <h1 class="text-1">Nhà xuất bản lẻ</h1>
                        <p class="text-2"><a href="#">Gửi Bạn, Người Đang Bỏ Lỡ Hạnh Phúc Ngày Hôm Nay</a></p>
                    </div>
                    <div class="price">
                        <p class="price-index">200,000đ</p>
                        <p class="price-index-1">185,000đ</p>
                    </div>
                    <div class="star">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                    </div>
                    <button class="buy"><a href="../html/formlogin.html">GIỎ HÀNG</a></button>
                </div>
                <div class="product-1">
                    <a href="#"><img class="image-1" src="../img-productinfo/sach51.jpg" alt=""></a>
                    <div class="text">
                        <h1 class="text-1">Nhà xuất bản lẻ</h1>
                        <p class="text-2"><a href="#">Cuộc Đời Ngắn Lắm Đừng Ôm Muộn Phiền </a></p>
                    </div>
                    <div class="price">
                        <p class="price-index">185,000đ</p>
                        <p class="price-index-1">175,000đ</p>
                    </div>
                    <div class="star">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                    </div>
                    <button class="buy"><a href="../html/formlogin.html">GIỎ HÀNG</a></button>
                </div>
                <div class="product-1">
                    <a href="#"><img class="image-1" src="../img-productinfo/sach52.jpg" alt=""></a>
                    <div class="text">
                        <h1 class="text-1">Nhà xuất bản lẻ</h1>
                        <p class="text-2"><a href="#">Những Điều Tốt Đẹp Luôn Đúng Hạn Mà Đến</a></p>
                    </div>
                    <div class="price">
                        <p class="price-index">160,000đ</p>
                        <p class="price-index-1">150,000đ</p>
                    </div>
                    <div class="star">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                    </div>
                    <button class="buy"><a href="../html/formlogin.html">GIỎ HÀNG</a></button>
                </div>
            </div>
        </div>
        <div class="recomment-3">
            <h3>Sản phẩm đã xem</h3>
        </div>
        <div class="include">
            <div class="product-kind">
                <div class="product-1">
                    <a href="#"><img class="image-1" src="../img-productinfo/sach53.jpg" alt=""></a>
                    <div class="text">
                        <h1 class="text-1">Nhà xuất bản lẻ</h1>
                        <p class="text-2"><a href="#">Xuân Qua Hạ Đến</a></p>
                    </div>
                    <div class="price">
                        <p class="price-index">120,000đ</p>
                        <p class="price-index-1">115,000đ</p>
                    </div>
                    <div class="star">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                    </div>
                    <button class="buy"><a href="../html/formlogin.html">GIỎ HÀNG</a></button>
                </div>
                <div class="product-1">
                    <a href="#"><img class="image-1" src="../img-productinfo/sach54.jpg" alt=""></a>
                    <div class="text">
                        <h1 class="text-1">Nhà xuất bản lẻ</h1>
                        <p class="text-2"><a href="#">Đừng Buồn Khi Hoàng Hôn Buông</a></p>
                    </div>
                    <div class="price">
                        <p class="price-index">180,000đ</p>
                        <p class="price-index-1">175,000đ</p>
                    </div>
                    <div class="star">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                    </div>
                    <button class="buy"><a href="../html/formlogin.html">GIỎ HÀNG</a></button>
                </div>
                <div class="product-1">
                    <a href="#"><img class="image-1" src="../img-productinfo/sach55.jpg" alt=""></a>
                    <div class="text">
                        <h1 class="text-1">Nhà xuất bản lẻ</h1>
                        <p class="text-2"><a href="#">Đi Vòng Thế Giới Vẫn Quanh Một Người</a></p>
                    </div>
                    <div class="price">
                        <p class="price-index">140,000đ</p>
                        <p class="price-index-1">135,000đ</p>
                    </div>
                    <div class="star">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                    </div>
                    <button class="buy"><a href="../html/formlogin.html">GIỎ HÀNG</a></button>
                </div>
                <div class="product-1">
                    <a href="#"><img class="image-1" src="../img-productinfo/sach56.jpg" alt=""></a>
                    <div class="text">
                        <h1 class="text-1">Nhà xuất bản lẻ</h1>
                        <p class="text-2"><a href="#">Đừng Nản Chí, Cố Lên Nào!</a></p>
                    </div>
                    <div class="price">
                        <p class="price-index">210,000đ</p>
                        <p class="price-index-1">200,000đ</p>
                    </div>
                    <div class="star">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                    </div>
                    <button class="buy"><a href="../html/formlogin.html">GIỎ HÀNG</a></button>
                </div>
                <div class="product-1">
                    <a href="#"><img class="image-1" src="../img-productinfo/sach57.jpg" alt=""></a>
                    <div class="text">
                        <h1 class="text-1">Nhà xuất bản lẻ</h1>
                        <p class="text-2"><a href="#">Khi Bình Minh Tới Tớ Sẽ Đến Gặp Cậu Đầu Tiên</a></p>
                    </div>
                    <div class="price">
                        <p class="price-index">220,000đ</p>
                        <p class="price-index-1">215,000đ</p>
                    </div>
                    <div class="star">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                    </div>
                    <button class="buy"><a href="../html/formlogin.html">GIỎ HÀNG</a></button>
                </div>
            </div>
        </div>
        <div class="background-product"></div>
    </div>

    <?php
    include("./php/footer.php")
    ?>

    <script>
        function myFunction5() {
            var dropdown = document.getElementById("Dropdown5");
            var icon = document.querySelector(".display i");

            // Kiểm tra trạng thái hiển thị
            if (dropdown.classList.contains("show5")) {
                dropdown.style.maxHeight = "0px"; // Thu gọn lại
                setTimeout(() => dropdown.classList.remove("show5"), 400); // Xóa class sau hiệu ứng
                icon.classList.remove("fa-minus");
                icon.classList.add("fa-plus");
            } else {
                dropdown.classList.add("show5");
                dropdown.style.maxHeight = dropdown.scrollHeight + "px"; // Mở rộng theo nội dung
                icon.classList.remove("fa-plus");
                icon.classList.add("fa-minus");
            }
        }

        // Đóng dropdown khi click bên ngoài
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn5') && !event.target.matches('.display i')) {
                var dropdowns = document.getElementsByClassName("filter_product");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains("show5")) {
                        openDropdown.style.maxHeight = "0px"; // Thu gọn trước khi ẩn
                        setTimeout(() => openDropdown.classList.remove("show5"), 400);
                        var icon = document.querySelector(".display i");
                        icon.classList.remove("fa-minus");
                        icon.classList.add("fa-plus");
                    }
                }
            }
        }
    </script>
    <script>
        function myFunction6() {
            var dropdown = document.getElementById("Dropdown6");
            var icon = document.querySelector(".display-1 i");

            // Kiểm tra trạng thái hiển thị
            if (dropdown.classList.contains("show6")) {
                dropdown.style.maxHeight = "0px"; // Thu gọn lại
                setTimeout(() => dropdown.classList.remove("show6"), 400); // Xóa class sau hiệu ứng
                icon.classList.remove("fa-minus");
                icon.classList.add("fa-plus");
            } else {
                dropdown.classList.add("show6");
                dropdown.style.maxHeight = dropdown.scrollHeight + "px"; // Mở rộng theo nội dung
                icon.classList.remove("fa-plus");
                icon.classList.add("fa-minus");
            }
        }

        // Đóng dropdown khi click bên ngoài
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn6') && !event.target.matches('.display-1 i')) {
                var dropdowns = document.getElementsByClassName("filter_product");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains("show6")) {
                        openDropdown.style.maxHeight = "0px"; // Thu gọn trước khi ẩn
                        setTimeout(() => openDropdown.classList.remove("show6"), 400);
                        var icon = document.querySelector(".display-1 i");
                        icon.classList.remove("fa-minus");
                        icon.classList.add("fa-plus");
                    }
                }
            }
        }
    </script>
</body>