<?php if (isset($_POST['update_cart'])) {
    $id_sp = mysqli_real_escape_string($con, $_POST['id_sanpham']);
    $so_luong = intval($_POST['so_luong']);

    if ($so_luong > 0) {
        mysqli_query($con, "UPDATE giohang SET so_luong = '$so_luong' WHERE id_sanpham = '$id_sp'");
    } else {
        mysqli_query($con, "DELETE FROM giohang WHERE id_sanpham = '$id_sp'");
    }
    exit(); // Dừng PHP sau khi xử lý xong AJAX
}
?>
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
    <!-- Thêm SweetAlert2 từ CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
        margin: 0px 0px 0px 230px;
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
        color: #ef4444;
        font-family: 'Roboto', sans-serif;
        font-size: 25px;
        background: white;
        padding: 10px 0px 10px 20px;
        display: flex;
        align-items: center;
        border-bottom: 1px solid oklch(0.92 0.004 286.32);
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

    .home-filter {
        border: 1px solid #fb923c;
        padding: 7px 35px;
        border-radius: 2px;
        background-color: orange;
        display: flex;
        align-items: center;
    }

    .infor_delivery {
        padding: 10px 0px 10px 20px;
        background: white;
        font-weight: 700;
        font-size: 25px;
        color: #ef4444;
        font-family: 'Roboto', sans-serif;
        border-bottom: 1px solid oklch(0.92 0.004 286.32);
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

    .grid__column-2 {
        padding-left: 1px;
        padding-right: 1px;
        width: 60%;
    }

    .grid__column-10 {
        padding-left: 1px;
        padding-right: 1px;
        width: 30%;
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

    .app__container {
        background-color: #f5f8fd;
    }

    .app__content {
        padding-bottom: 40px;
        padding-top: 47px;
    }

    .your_cart {
        background-color: white;
    }

    .product_cart {
        letter-spacing: 0px;
        /* justify-content: center; */
        display: flex;
    }

    .quantity_cart {
        padding: 20px;
        font-weight: 500;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 20px;
    }

    .quantity_cart span {
        font-weight: 600;
        font-size: 19px;
    }

    .table_cart {
        margin: 0px 18px 0px 18px;
        background: #ffffff;
        border: 2px solid #e7e7e7;
        border-radius: 8px;
        padding: 8px 5px;
        overflow: hidden;
    }

    .img_cart {
        margin: 20px;
    }

    .img_cart img {
        width: 120px;
        height: 180px;
    }

    .remove_cart {
        right: 150px;
        text-align: left;
        position: relative;
        background: orange;
        height: 26px;
        border-radius: 50%;
        width: 25px;
        margin-top: 7px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .remove_cart a {
        padding: 0px 2px 0px 2px;
        color: white;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 12px;
        text-align: center;
        text-decoration: none;
    }

    .infor_price_product_cart {
        padding: 16px 0px 0px 0px;
    }

    .infor_cart {
        overflow: hidden;
        text-overflow: ellipsis;
        width: 400px;
    }

    .infor_cart h3 {
        margin-bottom: 10px;
    }

    .infor_cart h3 a {
        text-decoration: none;
        border: none;
        font-family: 'Lobster', cursive;
        text-overflow: ellipsis;
        overflow: hidden;
        color: oklch(0.278 0.033 256.848);
        font-weight: 500;
        text-align: center;
        font-size: 24px;
    }

    .price_cart {
        margin-top: 15px;
    }

    .price_cart span {
        color: #8f9bb3;
        font-family: "Roboto", ui-sans-serif;
        font-size: 19px;
    }

    .total_price_quantity_cart {
        padding: 20px 20px 0px 20px;
        width: 100%;
    }

    .total_price_cart {
        text-align: right;
        flex-shrink: 0;
    }

    .total_price_cart span {
        color: #ef4444;
        font-weight: 700;
        font-family: "Roboto", ui-sans-serif;
        font-size: 20px;
        white-space: nowrap;
    }

    .quantity_product_cart {
        display: flex;
        align-items: center;
        gap: 5px;
    }


    .quantity_product_cart_1 {
        margin-left: 190px;
        margin-top: 20px;
    }

    .minus_cart {
        float: left;
        font-weight: 600;
        font-size: 21px;
        padding: 0;
        height: 35px;
        width: 35px;
        text-align: center;
        background: #ffffff;
        border: 1px solid #f3f4f4;
        border-radius: 4px;
        outline: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        -o-appearance: none;
        appearance: none;
    }

    .quantity_product_cart input {
        float: left;
        font-weight: 500;
        font-size: 19px;
        width: 45px;
        height: 35px;
        padding: 0;
        background: #fff;
        text-align: center;
        outline: none;
        border: 1px solid #f3f4f4;
        margin: 0 3px;
        border-radius: 4px;
        -webkit-appearance: none;
        -moz-appearance: none;
        -o-appearance: none;
        appearance: none;
    }

    .plus_cart {
        float: left;
        font-weight: 600;
        font-size: 21px;
        padding: 0;
        height: 35px;
        width: 35px;
        text-align: center;
        background: #ffffff;
        border: 1px solid #f3f4f4;
        border-radius: 4px;
        outline: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        -o-appearance: none;
        appearance: none;
    }

    .cart_row {
        width: 100%;
        display: inline-block;
    }

    .note_order {
        margin: 20px 0 10px;
        background: rgba(0, 0, 0, 0.03);
        padding: 10px 12px 15px;
        margin: 20px 20px 0px 20px;
    }

    .note_order-1 {
        display: block;
        margin: 0 0px 0 10px;
        font-weight: 600;
        font-size: 14px;
        margin: 0px 0px 5px 10px;
        font-family: "Roboto", ui-sans-serif;
        font-size: 18px;
    }

    .form_note {
        outline: none;
        padding: 10px 15px;
        height: 107px;
        min-height: 80px;
        max-width: 100%;
        resize: auto;
        border: 1px solid rgb(243, 159, 9);
        box-shadow: none;
        width: 928px;
    }

    .export_bill {
        margin-left: 20px;
        margin-top: 25px;
        margin-bottom: 20px;
    }

    .item_export_bill {
        display: flex;
    }

    .item_export_bill i {
        font-size: 30px;
        color: #FFD43B;
    }

    .export_bill_1 {
        font-weight: 600;
        margin-left: 20px;
        margin-top: 5px;
        font-family: "Roboto", ui-sans-serif;
        font-size: 18px;
    }

    .infor_export_bill {
        display: none;
        margin-top: 30px;
        display: flex;
        flex-wrap: wrap;
        gap: 2px;
        /* Tạo khoảng cách giữa các input */
    }

    .form_group {
        margin: 0px -3px 10px 0px;
        flex-basis: calc(33.33% - 10px);
        /* Mỗi input chiếm 1/3 hàng */
    }

    .form_group:nth-child(4) {
        flex-basis: 100%;
        /* Input cuối cùng chiếm toàn bộ hàng */
    }

    .input_export {
        outline: none;
        box-shadow: none;
        height: 50px;
        font-size: 14px;
        width: 95%;
        padding: 10px;
        border: 1px solid #e7e7e7;
        border-radius: 2px;
    }

    .form_button {
        margin-bottom: 20px;
        flex-basis: 100%;
        display: flex;
        justify-content: center;
        /* Căn giữa nút */
        margin-top: 10px;
    }

    .save_export {
        font-weight: 800;
        letter-spacing: 1px;
        font-family: "Roboto", ui-sans-serif;
        font-size: 16px;
        text-align: center;
        background: #ef4444;
        /* Gradient nền */
        color: #fff;
        padding: 16px 20px;
        text-decoration: none;
        border-radius: 5px;
        position: relative;
        overflow: hidden;
        transition: background 0.3s ease-in-out;
    }

    /* Thêm lớp phủ hiệu ứng hover */
    .save_export::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: oklch(0.577 0.245 27.325);
        /* Gradient hover */
        transition: transform 0.4s ease-in-out;
        z-index: 0;
    }

    /* Khi hover, gradient sẽ chạy từ trái sang phải */
    .save_export:hover::before {
        transform: translateX(100%);
    }

    /* Đảm bảo chữ hiển thị trên lớp phủ */
    .save_export span {
        position: relative;
        z-index: 1;
    }


    .end {
        background: none !important;
        height: 10px;
    }

    .infor_export {
        max-height: 0;
        opacity: 0;
        overflow: hidden;
        transition: max-height 0.5s ease-in-out, opacity 0.5s ease-in-out;
        /* display: none; */
    }

    .infor_export.show {
        max-height: 300px;
        opacity: 1;
    }

    .grid__column-10 {
        padding-left: 30px;
        padding-right: 1px;
        width: 30%;
    }

    .home-filter {
        border: unset;
        border-bottom: 1px solid oklch(0.92 0.004 286.32);
        padding: 10px 35px;
        border-radius: 2px;
        background-color: white;
        display: flex;
        align-items: center;
    }

    .infor_summary {
        padding-bottom: 15px;
        background: white;
    }

    .summary_time_cart {
        display: inline-block;
        width: 100%;
    }

    .summary_time_cart_1 {
        border-bottom: 1px solid #efefef;
        margin: 15px 20px 0px 20px;
        background: rgba(0, 0, 0, 0.03);
        display: flex;
    }

    .txt_title {
        font-family: "Roboto", ui-sans-serif;
        font-weight: 400;
        width: 188px;
        margin: 15px;
        font-size: 17px;
    }

    .txt_time {
        margin: 15px;
        font-family: "Roboto", ui-sans-serif;
        font-size: 17px;
        font-weight: 500;
    }

    .boxtime_radio {
        font-weight: 700;
        font-size: 16px;
        margin: 16px 0px 0px 55px;
        font-family: "Roboto", ui-sans-serif;
    }

    .fa-solid {
        margin-right: 10px;
    }

    .input_radio {
        margin-right: 5px;
    }

    .radio_item_2 {
        margin-top: 18px;
    }

    .summary_time_row {
        max-height: 0;
        opacity: 0;
        overflow: hidden;
        transition: max-height 0.5s ease-in-out, opacity 0.5s ease-in-out;
        display: block;
        width: 100%;
    }

    /* Khi hiển thị */
    .summary_time_row.show {
        max-height: 500px;
        /* Giá trị đủ lớn để hiển thị nội dung */
        opacity: 1;
    }

    .boxtime_select {
        padding-top: 15px;
        background: rgba(0, 0, 0, 0.03);
        margin: 0px 20px 0px 20px;
    }

    .select_choose {
        margin-right: 10px;
        margin-left: 10px;
        display: flex;
    }

    .boxselect_time {
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        min-width: 0;
        max-width: 50%;
        padding-left: 5px;
        padding-right: 5px;
        margin-bottom: 10px;
    }

    .boxselect_date {
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        min-width: 0;
        max-width: 50%;
        padding-left: 5px;
        padding-right: 5px;
        margin-bottom: 10px;
    }

    .boxselect_date label {
        font-family: "Roboto", ui-sans-serif;
        margin-bottom: 10px;
        display: block;
        font-weight: 450;
        font-size: 16px;
    }

    .boxselect_time label {
        font-family: "Roboto", ui-sans-serif;
        margin-bottom: 10px;
        display: block;
        font-weight: 450;
        font-size: 16px;
    }

    .select_option {
        position: relative;
    }

    .select_option::after {
        content: '';
        position: absolute;
        top: calc(50% - 5px);
        right: 14px;
        border: solid #666666;
        border-width: 0px 1px 1px 0;
        display: inline-block;
        padding: 3px;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
    }

    .select_option select {
        font-family: "Roboto", ui-sans-serif;
        padding: 0px 8px;
        padding-right: 20px;
        cursor: pointer;
        outline: none;
        border-radius: 4px;
        height: 40px;
        line-height: 32px;
        background: #ffffff;
        border: 1px solid #e5e5e5;
        font-size: 16px;
        width: 100%;
        color: #000;
        font-weight: 500;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
    }

    .confirm_time {
        font-family: "Roboto", ui-sans-serif;
        margin: 10px;
        display: inline-block;
        width: 95%;
        border-radius: 4px;
        padding: 0px 10px;
        height: 45px;
        line-height: 30px;
        color: #f39f09;
        background: #ffffff;
        border: 2px solid #f39f09;
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
    }

    #instant_delivery {
        accent-color: #ef4444;
    }

    #scheduled_delivery {
        accent-color: #ef4444;
    }

    .summary_total {
        align-items: center;
        padding-bottom: 15px;
        background: white;
        display: flex;
        justify-content: space-between;
    }

    .total_bill {
        padding: 0px 0px 0px 20px;
        font-weight: 700;
        font-size: 20px;
        font-family: "Roboto", ui-sans-serif;
    }

    .total_order {
        padding: 0px 20px 0px 0px;
        color: red;
        font-weight: 700;
        font-size: 30px;
        font-family: "Roboto", ui-sans-serif;
    }

    .dash_cart {
        background: white;
        margin-right: 20px;
        margin-left: 20px;
        border-bottom: 1px dotted #dfe0e1;
    }

    .summary_action {
        text-align: center;
        padding: 15px 20px 1px 20px;
        background: white;
    }

    .summary_action p {
        padding-left: 15px;
        position: relative;
        margin-bottom: 10px;
        font-weight: 450;
        font-family: "Roboto", ui-sans-serif;
        font-size: 18px;
        text-align: left;
    }

    .summary_action p:before {
        content: "";
        width: 4px;
        height: 4px;
        background: #999999;
        left: 0;
        opacity: 1;
        position: absolute;
        top: 8px;
        border-radius: 50%;
    }

    .summary_button {
        padding-bottom: 20px;
        background: white;
    }

    .pay_cart {
        text-decoration: none;
    }

    .summary_button button {
        border-radius: 5px;

        width: 425px;
        margin: 0px 20px 0px 20px;
        text-decoration: none;
        display: block;
        outline: none;
        font-weight: 700;
        color: white;
        border: none;
        background: red;
        font-family: "Roboto", ui-sans-serif;
        font-size: 20px;
        text-align: center;
        padding: 15px;
    }

    .summary_warning {
        margin-top: 15px;
        border-radius: 4px;
        background-color: #d9edf7;
        border: 1px solid #bce8f1;
    }

    .summary_warning_1 {
        margin-bottom: 10px;
    }

    .policy_buy {
        padding: 15px 0px 10px 20px;
        font-weight: 600;
        font-family: "Roboto", ui-sans-serif;
        font-size: 18px;
    }

    .policy_buy_1 {
        padding: 0px 20px 15px 20px;
        font-weight: 400;
        font-family: "Roboto", ui-sans-serif;
        font-size: 18px;
    }

    .policy_buy_1 span {
        font-weight: 700;
        font-family: "Roboto", ui-sans-serif;
        font-size: 18px;
    }

    .cart_empty {
        text-align: left;
        padding: 25px 0px 25px 20px;
        font-size: 18px;
    }

    .cart_empty p {
        font-weight: 410;
        font-family: 'Roboto', sans-serif;
        font-size: 21px;
        color: #333;
    }

    .end {
        height: unset;
    }

    /* .alert {
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
        text-align: center;
        font-size: 16px;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    } */

    .alert {
        padding: 10px;
        border-radius: 5px;
        text-align: center;
        font-weight: bold;
    }

    .alert-danger {
        font-size: 17px;
        font-family: 'Roboto', sans-serif;
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    .alert-success {
        font-size: 17px;
        font-family: 'Roboto', sans-serif;
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .warning_empty {
        background: white;
    }

    .empty_warning {
        text-align: left;
        padding: 25px 0px 25px 20px;
        font-size: 18px;
    }

    .frame_warning {
        color: #d20909;
        font-size: 13px;
        padding: 5px 20px 15px 20px;
        text-align: left;
    }

    .empty_warning {
        padding: 10px 10px 10px 15px !important;
        border-radius: 5px;
        font-weight: 450;
        font-family: "Roboto", ui-sans-serif;
        font-size: 18px;
        background-color: #fee3e8;
        border: 1px solid #fdd0d8;
        color: #d20909;
        font-size: 17px;
        text-align: left;
    }

    .btn_checkout:hover {
        background-color: #cc3b00;
    }

    .btn_checkout.disabled {
        background-color: #ccc !important;
        /* Màu xám khi bị vô hiệu hóa */
        color: #888;
        cursor: not-allowed;
        pointer-events: none;
    }

    .pay_cart.disabled {
        pointer-events: none;
    }
</style>

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


// Cập nhật số lượng sản phẩm trong giỏ hàng
if (isset($_POST['capnhatsoluong'])) {
    foreach ($_POST['product_id'] as $index => $id_sp) {
        $id_sp = mysqli_real_escape_string($con, $id_sp);
        $so_luong = isset($_POST['so_luong'][$index]) ? intval($_POST['so_luong'][$index]) : 1; // Ép kiểu an toàn

        if ($so_luong <= 0) {
            mysqli_query($con, "DELETE FROM giohang WHERE id_sanpham='$id_sp'");
        } else {
            mysqli_query($con, "UPDATE giohang SET so_luong = '$so_luong' WHERE id_sanpham='$id_sp'");
        }
    }
}

// // Xóa sản phẩm khỏi giỏ hàng
// if (isset($_GET['xoa'])) {
//     $id = mysqli_real_escape_string($con, $_GET['xoa']);
//     mysqli_query($con, "DELETE FROM giohang WHERE id_sanpham='$id'");
//     $_SESSION['success_remove'] = "Xóa sản phẩm thành công!";
//     header("Location: index.php?quanly=giohang"); // Tải lại trang sau khi xóa
//     exit();
// }
?>

<?php
if (isset($_POST['xacnhanthoigian'])) {
    include 'db/connect.php'; // Kết nối cơ sở dữ liệu

    $username = $_SESSION['username']; // Lấy username từ session

    // Truy vấn lấy id_user từ bảng user
    $sql_user = "SELECT id_user FROM user WHERE username = ?";
    $stmt_user = mysqli_prepare($con, $sql_user);
    mysqli_stmt_bind_param($stmt_user, "s", $username);
    mysqli_stmt_execute($stmt_user);
    $result_user = mysqli_stmt_get_result($stmt_user);

    if ($row_user = mysqli_fetch_assoc($result_user)) {
        $id_user = $row_user['id_user'];

        // Truy vấn lấy id_khachhang từ bảng khachhang dựa vào id_user
        $sql_khachhang = "SELECT id_khachhang FROM khachhang WHERE id_user = ?";
        $stmt_khachhang = mysqli_prepare($con, $sql_khachhang);
        mysqli_stmt_bind_param($stmt_khachhang, "i", $id_user);
        mysqli_stmt_execute($stmt_khachhang);
        $result_khachhang = mysqli_stmt_get_result($stmt_khachhang);

        if ($row_khachhang = mysqli_fetch_assoc($result_khachhang)) {
            $id_khachhang = $row_khachhang['id_khachhang'];

            // Lấy thông tin từ form
            $kieu_giao_hang = mysqli_real_escape_string($con, $_POST['kieu_giao_hang']);

            // Xử lý ngày giao hàng: chuyển đổi từ dd/mm/yyyy → yyyy-mm-dd
            if (!empty($_POST['ngay_giao_hang'])) {
                $date = date_create_from_format('d/m/Y', $_POST['ngay_giao_hang']);
                $ngay_giao_hang = $date ? date_format($date, 'Y-m-d') : NULL;
            } else {
                $ngay_giao_hang = NULL;
            }

            // Xử lý thời gian giao hàng (dạng "17:00 - 18:00")
            if (!empty($_POST['thoi_gian_giao_hang'])) {
                $time_parts = explode(" - ", $_POST['thoi_gian_giao_hang']);
                $start_time = isset($time_parts[0]) ? $time_parts[0] : NULL;
                $end_time = isset($time_parts[1]) ? $time_parts[1] : NULL;
            } else {
                $start_time = NULL;
                $end_time = NULL;
            }

            // Nếu chọn "Giao khi có hàng", đặt ngày & giờ thành NULL
            if ($kieu_giao_hang == "Giao khi có hàng") {
                $ngay_giao_hang = NULL;
                $start_time = NULL;
                $end_time = NULL;
            }

            // Kiểm tra xem khách hàng có đơn hàng "Đang xử lí" hay không
            $sql_check = "SELECT id_hoadon FROM hoadon WHERE id_khachhang = ? AND trang_thai = 'Đang xử lí' LIMIT 1";
            $stmt_check = mysqli_prepare($con, $sql_check);
            mysqli_stmt_bind_param($stmt_check, "i", $id_khachhang);
            mysqli_stmt_execute($stmt_check);
            $result_check = mysqli_stmt_get_result($stmt_check);

            if ($row_check = mysqli_fetch_assoc($result_check)) {
                $id_hoadon = $row_check['id_hoadon'];

                // Nếu đã có hóa đơn "Đang xử lí", cập nhật thông tin
                $sql_update = "UPDATE hoadon SET 
                                kieu_giao_hang = ?, 
                                ngay_giao_hang = ?, 
                                start_time = ?, 
                                end_time = ? 
                              WHERE id_hoadon = ? AND trang_thai = 'Đang xử lí'";

                $stmt_update = mysqli_prepare($con, $sql_update);
                mysqli_stmt_bind_param($stmt_update, "ssssi", $kieu_giao_hang, $ngay_giao_hang, $start_time, $end_time, $id_hoadon);

                if (mysqli_stmt_execute($stmt_update)) {
                    echo '<div id="alert-box" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Thành công!</strong> Cập nhật thời gian giao hàng thành công.
                    </div>';
                } else {
                    echo "Lỗi cập nhật: " . mysqli_error($con);
                }
            } else {
                // Nếu không có đơn hàng "Đang xử lí", tạo mới
                $sql_insert = "INSERT INTO hoadon (id_khachhang, kieu_giao_hang, ngay_giao_hang, start_time, end_time, trang_thai) 
                               VALUES (?, ?, ?, ?, ?, 'Đang xử lí')";

                $stmt_insert = mysqli_prepare($con, $sql_insert);
                mysqli_stmt_bind_param($stmt_insert, "issss", $id_khachhang, $kieu_giao_hang, $ngay_giao_hang, $start_time, $end_time);

                if (mysqli_stmt_execute($stmt_insert)) {
                    echo '<div id="alert-box" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Thành công!</strong> Đã tạo đơn hàng mới với trạng thái "Đang xử lí".
                    </div>';
                } else {
                    echo "Lỗi tạo hóa đơn mới: " . mysqli_error($con);
                }
            }

            echo '<script>
            setTimeout(function() {
                var alertBox = document.getElementById("alert-box");
                if (alertBox) {
                    alertBox.classList.remove("show");
                    alertBox.classList.add("fade");
                    setTimeout(() => alertBox.remove(), 500); // Xóa hẳn phần tử sau khi ẩn
                }
            }, 2500);
            </script>';
        } else {
            echo "Không tìm thấy khách hàng.";
        }
    } else {
        echo "Không tìm thấy người dùng.";
    }
}
?>

<?php
if (isset($_POST['thanhtoan'])) {
    include 'db/connect.php';

    session_start();
    $username = $_SESSION['username'];

    // Lấy id_user
    $sql_user = "SELECT id_user FROM user WHERE username = ?";
    $stmt_user = mysqli_prepare($con, $sql_user);
    mysqli_stmt_bind_param($stmt_user, "s", $username);
    mysqli_stmt_execute($stmt_user);
    $result_user = mysqli_stmt_get_result($stmt_user);

    if ($row_user = mysqli_fetch_assoc($result_user)) {
        $id_user = $row_user['id_user'];

        // Lấy id_khachhang
        $sql_khachhang = "SELECT id_khachhang FROM khachhang WHERE id_user = ?";
        $stmt_khachhang = mysqli_prepare($con, $sql_khachhang);
        mysqli_stmt_bind_param($stmt_khachhang, "i", $id_user);
        mysqli_stmt_execute($stmt_khachhang);
        $result_khachhang = mysqli_stmt_get_result($stmt_khachhang);

        if ($row_khachhang = mysqli_fetch_assoc($result_khachhang)) {
            $id_khachhang = $row_khachhang['id_khachhang'];

            // Kiểm tra hóa đơn "Đang xử lí"
            $sql_check_invoice = "SELECT * FROM hoadon WHERE id_khachhang = ? AND trang_thai = 'Đang xử lí' LIMIT 1";
            $stmt_check_invoice = mysqli_prepare($con, $sql_check_invoice);
            mysqli_stmt_bind_param($stmt_check_invoice, "i", $id_khachhang);
            mysqli_stmt_execute($stmt_check_invoice);
            $result_check_invoice = mysqli_stmt_get_result($stmt_check_invoice);
            $existing_invoice = mysqli_fetch_assoc($result_check_invoice);

            // Xử lý kiểu giao hàng
            $kieu_giao_hang = $_POST['kieu_giao_hang'] ?? $existing_invoice['kieu_giao_hang'] ?? "Giao khi có hàng";
            $ngay_giao_hang = NULL;
            $start_time = NULL;
            $end_time = NULL;

            if ($kieu_giao_hang == "Chọn thời gian") {
                if (!empty($_POST['ngay_giao_hang'])) {
                    $ngay_giao_hang = date('Y-m-d', strtotime($_POST['ngay_giao_hang']));
                } else {
                    $ngay_giao_hang = $existing_invoice['ngay_giao_hang'] ?? NULL;
                }

                if (!empty($_POST['thoi_gian_giao_hang'])) {
                    $thoi_gian_giao_hang = explode(" - ", $_POST['thoi_gian_giao_hang']);
                    $start_time = $thoi_gian_giao_hang[0];
                    $end_time = $thoi_gian_giao_hang[1];
                } else {
                    $start_time = $existing_invoice['start_time'] ?? NULL;
                    $end_time = $existing_invoice['end_time'] ?? NULL;
                }
            }

            // Cập nhật hoặc tạo mới hóa đơn
            if ($existing_invoice) {
                $sql_update = "UPDATE hoadon SET 
                    kieu_giao_hang = ?, 
                    ngay_giao_hang = ?, 
                    start_time = ?, 
                    end_time = ?
                  WHERE id_hoadon = ? AND trang_thai = 'Đang xử lí'";
                $stmt_update = mysqli_prepare($con, $sql_update);
                mysqli_stmt_bind_param($stmt_update, "ssssi", $kieu_giao_hang, $ngay_giao_hang, $start_time, $end_time, $existing_invoice['id_hoadon']);
                mysqli_stmt_execute($stmt_update);
                $id_hoadon = $existing_invoice['id_hoadon'];
            } else {
                $sql_insert = "INSERT INTO hoadon (id_khachhang, kieu_giao_hang, ngay_giao_hang, start_time, end_time, trang_thai) 
                               VALUES (?, ?, ?, ?, ?, 'Đang xử lí')";
                $stmt_insert = mysqli_prepare($con, $sql_insert);
                mysqli_stmt_bind_param($stmt_insert, "issss", $id_khachhang, $kieu_giao_hang, $ngay_giao_hang, $start_time, $end_time);
                mysqli_stmt_execute($stmt_insert);
                $id_hoadon = mysqli_insert_id($con);
            }

            // Xóa tất cả dữ liệu cũ của đơn hàng trong chitietdonhang trước khi cập nhật lại
            $sql_delete_old = "DELETE FROM chitietdonhang WHERE id_hoadon = ?";
            $stmt_delete_old = mysqli_prepare($con, $sql_delete_old);
            mysqli_stmt_bind_param($stmt_delete_old, "i", $id_hoadon);
            mysqli_stmt_execute($stmt_delete_old);

            // Lấy giỏ hàng mới nhất
            $sql_cart = "SELECT id_sanpham, so_luong, gia_khuyen_mai FROM giohang WHERE id_user = ?";
            $stmt_cart = mysqli_prepare($con, $sql_cart);
            mysqli_stmt_bind_param($stmt_cart, "i", $id_user);
            mysqli_stmt_execute($stmt_cart);
            $result_cart = mysqli_stmt_get_result($stmt_cart);

            // Thêm toàn bộ giỏ hàng vào chitietdonhang
            while ($row_cart = mysqli_fetch_assoc($result_cart)) {
                $id_sanpham = $row_cart['id_sanpham'];
                $so_luong = $row_cart['so_luong'];
                $gia_khuyen_mai = $row_cart['gia_khuyen_mai'];

                $sql_insert_chitiet = "INSERT INTO chitietdonhang (id_hoadon, id_sanpham, so_luong, don_gia) 
                           VALUES (?, ?, ?, ?)";
                $stmt_insert_chitiet = mysqli_prepare($con, $sql_insert_chitiet);
                mysqli_stmt_bind_param($stmt_insert_chitiet, "iiid", $id_hoadon, $id_sanpham, $so_luong, $gia_khuyen_mai);
                mysqli_stmt_execute($stmt_insert_chitiet);
            }


            // Điều hướng sau khi thanh toán thành công
            header("Location: index.php?quanly=thanhtoan");
            exit();
        }
    }
}
?>


<?php
// Lấy dữ liệu giỏ hàng
$sql_lay_giohang = mysqli_query($con, "SELECT * FROM giohang ORDER BY id_giohang DESC");

$total = 0;
?>

<?php

if (isset($_SESSION['success_remove'])) {
    echo '<div class="alert alert-danger">' . $_SESSION['success_remove'] . '</div>';
    unset($_SESSION['success_remove']); // Xóa thông báo sau khi hiển thị
}
?>

<div class="app__container">
    <div class="grid">
        <div class="grid__row app__content">
            <div class="grid__column-2">
                <h3 class="category__heading">Giỏ hàng của bạn</h3>
                <div class="your_cart">
                    <?php
                    $id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : null;

                    $so_sanpham = 0; // Mặc định giỏ hàng trống

                    if ($id_user) {
                        // Lấy danh sách sản phẩm trong giỏ hàng nếu đã đăng nhập
                        $sql_lay_giohang = mysqli_query($con, "SELECT * FROM giohang WHERE id_user='$id_user' ORDER BY id_giohang DESC");
                        $so_sanpham = mysqli_num_rows($sql_lay_giohang);

                        // Hiển thị hoặc ẩn cảnh báo dựa vào số sản phẩm trong giỏ hàng
                        $class_warning = ($so_sanpham > 0) ? 'hidden' : ''; // Ẩn nếu có sản phẩm
                    }

                    if ($so_sanpham > 0) {
                    ?>
                        <div class="cart_row">
                            <p class="quantity_cart">Bạn đang có <span><?php echo $so_sanpham; ?> sản phẩm</span> trong giỏ hàng</p>
                            <div class="table_cart">
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
                                    <div class="product_cart">
                                        <div class="img_remove_product_cart">
                                            <div class="img_cart">
                                                <a href="?quanly=chitietsp&id_sp=<?php echo $row_sanpham["id_sanpham"] ?>">
                                                    <img src="../img-index/<?php echo htmlspecialchars($row_sanpham["img"]); ?>" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="remove_cart">
                                            <a href="?quanly=giohang&xoa=<?php echo $row_sanpham["id_sanpham"]; ?>" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?');">Xóa</a>
                                        </div>
                                        <div class="infor_price_product_cart">
                                            <div class="infor_cart">
                                                <h3><a href="#"><?php echo htmlspecialchars($row_sanpham["ten_sach"]); ?></a></h3>
                                            </div>
                                            <div class="price_cart">
                                                <span><?php echo $gia_hienthi . 'đ'; ?></span>
                                            </div>
                                        </div>
                                        <div class="total_price_quantity_cart">
                                            <div class="total_price_cart">
                                                <span><?php echo $subtotal . 'đ'; ?></span>
                                            </div>
                                            <div class="quantity_product_cart">
                                                <div class="quantity_product_cart_1">
                                                    <button class="minus_cart" data-id="<?php echo $row_sanpham["id_sanpham"]; ?>">-</button>
                                                    <input type="text" class="quantity_input" data-id="<?php echo $row_sanpham["id_sanpham"]; ?>" value="<?php echo $so_luong; ?>">
                                                    <button class="plus_cart" data-id="<?php echo $row_sanpham["id_sanpham"]; ?>">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                                $total = number_format($total, 0, ',', '.'); ?>
                            </div>
                        </div>
                        <div class="cart_row">
                            <div class="note_order">
                                <label class="note_order-1">Ghi chú đơn hàng</label>
                                <textarea class="form_note"></textarea>
                            </div>
                        </div>
                        <div class="cart_row">
                            <div class="export_bill">
                                <div class="item_export_bill">
                                    <i class="fa-solid fa-circle-check" style="color: #FFD43B;"></i>
                                    <label class="export_bill_1">Xuất hóa đơn cho đơn hàng</label>
                                </div>
                                <div class="infor_export">
                                    <div class="infor_export_bill">
                                        <div class="form_group">
                                            <input class="input_export" value placeholder="Tên công ty..">
                                        </div>
                                        <div class="form_group">
                                            <input class="input_export" value placeholder="Mã số thuế..">
                                        </div>
                                        <div class="form_group">
                                            <input class="input_export" value placeholder="Email..">
                                        </div>
                                        <div class="form_group">
                                            <input class="input_export" value placeholder="Địa chỉ công ty..">
                                        </div>
                                        <div class="form_button">
                                            <a href="#" class="save_export"><span>LƯU THÔNG TIN</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <!-- Giao diện khi giỏ hàng trống -->
                        <div class="cart_empty">
                            <p>Giỏ hàng của bạn đang trống</p>
                        </div>
                    <?php
                    }
                    ?>
                </div>

            </div>
            <div class="grid__column-10">
                <h3 class="infor_delivery">Thông tin đơn hàng</h3>
                <form action="?quanly=giohang" method="POST">
                    <div class="infor_summary">
                        <div class="summary_time_cart">
                            <div class="summary_time_cart_1">
                                <div class="summary_time">
                                    <p class="txt_title">THỜI GIAN GIAO HÀNG</p>
                                    <p class="txt_time">
                                        <i class="fa-solid fa-clock" style="color: #ee452b;"></i>
                                        Chọn thời gian
                                    </p>
                                </div>
                                <div class="boxtime_radio">
                                    <div class="radio_item_1">
                                        <input type="checkbox" class="input_radio" id="instant_delivery" name="kieu_giao_hang" value="Giao khi có hàng">
                                        <label class="label_checkbox" for="instant_delivery">Giao khi có hàng</label>
                                    </div>
                                    <div class="radio_item_2">
                                        <input type="checkbox" class="input_radio" id="scheduled_delivery" name="kieu_giao_hang" value="Chọn thời gian">
                                        <label class="label_checkbox" for="scheduled_delivery">Chọn thời gian</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="summary_time_row" id="summary_time_row">
                            <div class="boxtime_select">
                                <div class="select_choose">
                                    <div class="boxselect_date">
                                        <label>Ngày giao</label>
                                        <div class="select_option">
                                            <select id="delivery_date" name="ngay_giao_hang"></select>
                                        </div>
                                    </div>
                                    <div class="boxselect_time">
                                        <label>Thời gian giao</label>
                                        <div class="select_option">
                                            <select id="delivery_time" name="thoi_gian_giao_hang"></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="select_button">
                                    <button class="confirm_time" id="confirm_time" name="xacnhanthoigian">Xác nhận thời gian</button>
                                </div>
                            </div>
                        </div>
                        <!-- Input ẩn để lưu dữ liệu đã xác nhận -->
                        <input type="hidden" id="hidden_ngay_giao_hang" name="ngay_giao_hang">
                        <input type="hidden" id="hidden_thoi_gian_giao_hang" name="thoi_gian_giao_hang">
                    </div>
                    <div class="summary_total">
                        <p class="total_bill">Tổng tiền:</p>
                        <span class="total_order"><?php echo $total . 'đ'; ?></span>
                    </div>
                    <div class="dash_cart"></div>
                    <div class="summary_action">
                        <p>Phí vận chuyển sẽ được tính ở trang thanh toán</p>
                        <p>Bạn cũng có thể nhập mã giảm giá ở trang thanh toán</p>
                    </div>
                    <div class="warning_empty <?php echo $class_warning; ?>">
                        <div class="frame_warning">
                            <p class="empty_warning">Giỏ hàng của bạn hiện chưa đạt mức tối thiểu để thanh toán!</p>
                        </div>
                    </div>
                    <div class="summary_button">
                        <?php if ($so_sanpham > 0) { ?>
                            <button type="submit" class="btn_checkout" name="thanhtoan">THANH TOÁN</button>
                        <?php } else { ?>
                            <button type="button" class="btn_checkout disabled" disabled>THANH TOÁN</button>
                        <?php } ?>
                    </div>
                </form>

                <div class="summary_warning">
                    <div class="summary_warning_1">
                        <p class="policy_buy">Chính sách mua hàng</p>
                        <p class="policy_buy_1">Hiện tại tôi chỉ áp dụng thanh toán với đơn hàng có giá trị tối thiểu <span>0đ</span> trở lên</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Xử lý tăng số lượng
        $(".plus_cart").click(function() {
            var id = $(this).data("id");
            var input = $(".quantity_input[data-id='" + id + "']");
            var newQuantity = parseInt(input.val()) + 1;
            updateCart(id, newQuantity);
        });

        // Xử lý giảm số lượng
        $(".minus_cart").click(function() {
            var id = $(this).data("id");
            var input = $(".quantity_input[data-id='" + id + "']");
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
        $(".quantity_input").on("change", function() {
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
        let toggleButton = document.querySelector(".item_export_bill");
        let inforExportBill = document.querySelector(".infor_export");

        toggleButton.addEventListener("click", function() {
            if (inforExportBill.classList.contains("show")) {
                inforExportBill.classList.remove("show"); // Ẩn nếu đang hiển thị
            } else {
                inforExportBill.classList.add("show"); // Hiển thị nếu đang ẩn
            }
        });
    });
</script>


<script>
    //Cập nhật giá trị ngày
    function formatDate(date) {
        let day = date.getDate().toString().padStart(2, '0');
        let month = (date.getMonth() + 1).toString().padStart(2, '0');
        let year = date.getFullYear();
        return `${day}/${month}/${year}`;
    }

    function updateDeliveryDates() {
        let select = document.getElementById("delivery_date");
        select.innerHTML = ""; // Xóa các option cũ

        for (let i = 0; i < 3; i++) {
            let date = new Date();
            date.setDate(date.getDate() + i);
            let formattedDate = formatDate(date);

            let option = document.createElement("option");
            option.value = formattedDate;
            option.textContent = i === 0 ? "Hôm nay" : formattedDate;

            select.appendChild(option);
        }
    }

    function updateDeliveryTimes() {
        //Cập nhật giá trị thời gian
        let select = document.getElementById("delivery_time");
        select.innerHTML = ""; // Xóa các option cũ

        let now = new Date();
        let currentHour = now.getHours();
        let currentMinutes = now.getMinutes();

        for (let hour = 8; hour < 22; hour++) {
            let startTime = `${hour.toString().padStart(2, '0')}:00`;
            let endTime = `${(hour + 1).toString().padStart(2, '0')}:00`;
            let timeRange = `${startTime} - ${endTime}`;

            let option = document.createElement("option");
            option.value = timeRange;
            option.textContent = timeRange;

            // // Nếu thời gian đã qua, disable option
            // if (hour < currentHour || (hour === currentHour && currentMinutes > 0)) {
            //     option.disabled = true;
            //     option.style.color = "gray"; // Làm mờ option
            // }

            select.appendChild(option);
        }
    }

    updateDeliveryDates();
    updateDeliveryTimes();
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const summaryTimeRow = document.getElementById("summary_time_row");
        const instantDelivery = document.getElementById("instant_delivery");
        const scheduledDelivery = document.getElementById("scheduled_delivery");
        const confirmTimeButton = document.getElementById("confirm_time");

        function toggleSummaryTimeRow() {
            if (scheduledDelivery.checked) {
                summaryTimeRow.classList.add("show");
            } else {
                summaryTimeRow.classList.remove("show");
            }
        }

        // Khi chọn "Giao khi có hàng"
        instantDelivery.addEventListener("change", function() {
            if (this.checked) {
                scheduledDelivery.checked = false;
                toggleSummaryTimeRow();
            }
        });

        // Khi chọn "Chọn thời gian"
        scheduledDelivery.addEventListener("change", function() {
            if (this.checked) {
                instantDelivery.checked = false;
                toggleSummaryTimeRow();
            }
        });

        // Khi nhấn "Xác nhận thời gian"
        confirmTimeButton.addEventListener("click", function() {
            summaryTimeRow.classList.remove("show");
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const confirmButton = document.getElementById("confirm_time");
        const scheduledDelivery = document.getElementById("scheduled_delivery");
        const instantDelivery = document.getElementById("instant_delivery");

        // Kiểm tra trạng thái lưu trong localStorage và áp dụng lại khi tải trang
        if (localStorage.getItem("scheduledChecked") === "true") {
            scheduledDelivery.checked = true;
            instantDelivery.checked = false;
        } else if (localStorage.getItem("instantChecked") === "true") {
            instantDelivery.checked = true;
            scheduledDelivery.checked = false;
        }

        // Xử lý khi nhấn xác nhận thời gian
        confirmButton.addEventListener("click", function() {
            scheduledDelivery.checked = true;
            instantDelivery.checked = false;
            localStorage.setItem("scheduledChecked", "true");
            localStorage.removeItem("instantChecked");
        });

        // Xử lý khi chọn Giao khi có hàng
        instantDelivery.addEventListener("click", function() {
            if (instantDelivery.checked) {
                scheduledDelivery.checked = false;
                localStorage.setItem("instantChecked", "true");
                localStorage.removeItem("scheduledChecked");
            }
        });

        // Xử lý khi chọn Chọn thời gian
        scheduledDelivery.addEventListener("click", function() {
            if (scheduledDelivery.checked) {
                instantDelivery.checked = false;
                localStorage.setItem("scheduledChecked", "true");
                localStorage.removeItem("instantChecked");
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const scheduledDeliveryRadio = document.getElementById("scheduled_delivery");
        const instantDeliveryRadio = document.getElementById("instant_delivery");
        const summaryTimeRow = document.getElementById("summary_time_row");
        const deliveryDate = document.getElementById("delivery_date");
        const deliveryTime = document.getElementById("delivery_time");
        const confirmTimeBtn = document.getElementById("confirm_time");

        const hiddenNgayGiaoHang = document.getElementById("hidden_ngay_giao_hang");
        const hiddenThoiGianGiaoHang = document.getElementById("hidden_thoi_gian_giao_hang");

        let confirmedDate = "";
        let confirmedTime = "";

        // Hiện form chọn thời gian nếu chọn "Chọn thời gian"
        scheduledDeliveryRadio.addEventListener("change", function() {
            if (scheduledDeliveryRadio.checked) {
                summaryTimeRow.style.display = "block";
            }
        });

        // Ẩn form chọn thời gian nếu chọn "Giao khi có hàng"
        instantDeliveryRadio.addEventListener("change", function() {
            if (instantDeliveryRadio.checked) {
                summaryTimeRow.style.display = "none";
                hiddenNgayGiaoHang.value = "Giao khi có hàng"; // Reset giá trị ẩn
                hiddenThoiGianGiaoHang.value = "";
            }
        });

        // Khi nhấn "Xác nhận thời gian", lưu vào input ẩn
        confirmTimeBtn.addEventListener("click", function() {
            if (deliveryDate.value && deliveryTime.value) {
                confirmedDate = deliveryDate.value;
                confirmedTime = deliveryTime.value;
                hiddenNgayGiaoHang.value = confirmedDate;
                hiddenThoiGianGiaoHang.value = confirmedTime;
                // alert("Đã lưu thời gian giao hàng!");
            } else {
                alert("Vui lòng chọn ngày và giờ giao hàng.");
            }
        });

        // Khi nhấn nút "Thanh toán", kiểm tra xem đã xác nhận chưa
        document.getElementById("submit_button").addEventListener("click", function(event) {
            if (scheduledDeliveryRadio.checked && (hiddenNgayGiaoHang.value === "" || hiddenThoiGianGiaoHang.value === "")) {
                event.preventDefault();
                alert("Bạn chưa xác nhận thời gian giao hàng!");
            }
        });
    });
</script>

<?php
ob_end_flush(); // Đẩy nội dung ra trình duyệt
?>