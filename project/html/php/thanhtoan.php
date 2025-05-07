<?php
ob_start();
session_start(); // Bắt đầu session
// if (isset($_POST['tieptucthanhtoan'])) {
//     echo "<pre>";
//     var_dump($_POST);
//     echo "</pre>";
//     exit(); // Dừng chương trình để kiểm tra output
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;0,900;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Domine&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Shop Book</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
        margin: 0 !important;
        padding: 0 !important;
    }

    .wrap {
        height: 100vh;
        display: flex;
        /* justify-content: space-between; */
        width: 100%;
    }

    .checkout-form {
        padding: 90px 70px 0px 150px;
        width: 55%;
        background: white;
    }

    .order-summary {
        box-shadow: 1px 0 0 #e1e1e1 inset;
        background: #fafafa;
    }

    .main_header {
        font-weight: 400;
        padding-left: 120px;
        font-family: 'Roboto', sans-serif;
        font-size: 25px;
    }

    .title_step_pay h2 {
        margin-bottom: 25px;
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
        color: #333333;
        margin-top: 12px;
    }

    .title_store h2 {
        color: #333333;
        margin-bottom: 0px;
        font-weight: 400;
    }

    .main_contain {
        padding-left: 120px;
    }

    .section_name {
        position: relative;
        width: 100%;
        float: left;
        padding: 0px 7px 7px 0px;
        box-sizing: border-box;
    }

    .section_name_1 {
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        border: 1px solid #d9d9d9;
        outline: none;
        box-shadow: 0 0 0 0.4px #d9d9d9;
        transition: all 0.2s ease-out;
        background-color: white;
        color: #333333;
        border-radius: 6px;
        display: block;
        box-sizing: border-box;
        width: 100%;
        padding: 25px 10px 5px 13px;
        /* Tạo khoảng trống cho label */
        word-break: normal;
    }

    /* Khi input được focus */
    .section_name_1:focus {
        box-shadow: 0 0 0 2px #338dbc;
        border-color: #338dbc;
    }

    /* Khi input không có dữ liệu và mất focus */
    .section_name_1:placeholder-shown {
        border: 1px solid #d9d9d9;
        box-shadow: 0 0 0 0.4px #d9d9d9;
    }

    .section_name_1:focus+.filed_name,
    .section_name_1:not(:placeholder-shown)+.filed_name {
        top: 18px;
        left: 10px;
        font-size: 14px;
        color: gray;
        padding: 0 4px;
        font-family: 'Roboto', sans-serif;
        font-weight: 450;
    }

    /* Định dạng label mặc định nằm giữa input */
    .filed_name {
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        position: absolute;
        left: 6px;
        top: 45%;
        transform: translateY(-59%);
        /* background: white; */
        padding: 0 5px;
        color: gray;
        transition: all 0.3s ease-in-out;
        pointer-events: none;
    }

    .section_email {
        position: relative;
        width: 66.66667% !important;
        float: left;
        padding: 7px 7px 7px 0px;
        box-sizing: border-box;
    }

    .section_email_1 {
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        border: 1px solid #d9d9d9;
        outline: none;
        box-shadow: 0 0 0 0.4px #d9d9d9;
        transition: all 0.2s ease-out;
        background-color: white;
        color: #333333;
        border-radius: 6px;
        display: block;
        box-sizing: border-box;
        width: 100%;
        padding: 25px 10px 5px 13px;
        word-break: normal;
    }

    /* Khi input được focus */
    .section_email_1:focus {
        box-shadow: 0 0 0 2px #338dbc;
        border-color: #338dbc;
    }

    /* Khi input không có dữ liệu và mất focus */
    .section_email_1:placeholder-shown {
        border: 1px solid #d9d9d9;
        box-shadow: 0 0 0 0.4px #d9d9d9;
    }

    .section_email_1:focus+.filed_email,
    .section_email_1:not(:placeholder-shown)+.filed_email {
        top: 23px;
        left: 10px;
        font-size: 14px;
        color: gray;
        padding: 0 4px;
        font-family: 'Roboto', sans-serif;
        font-weight: 450;
    }

    /* Định dạng label mặc định nằm giữa input */
    .filed_email {
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        position: absolute;
        left: 6px;
        top: 49%;
        transform: translateY(-47%);
        padding: 0 5px;
        color: gray;
        transition: all 0.3s ease-in-out;
        pointer-events: none;
    }

    .section_telephone {
        position: relative;
        width: 33.33333% !important;
        float: left;
        padding: 7px 7px 7px 7px;
        box-sizing: border-box;
    }

    .section_telephone_1 {
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        border: 1px solid #d9d9d9;
        outline: none;
        box-shadow: 0 0 0 0.4px #d9d9d9;
        transition: all 0.2s ease-out;
        background-color: white;
        color: #333333;
        border-radius: 6px;
        display: block;
        box-sizing: border-box;
        width: 100%;
        padding: 25px 10px 5px 13px;
        word-break: normal;
    }

    /* Khi input được focus */
    .section_telephone_1:focus {
        box-shadow: 0 0 0 2px #338dbc;
        border-color: #338dbc;
    }

    /* Khi input không có dữ liệu và mất focus */
    .section_telephone_1:placeholder-shown {
        border: 1px solid #d9d9d9;
        box-shadow: 0 0 0 0.4px #d9d9d9;
    }

    .section_telephone_1:focus+.filed_telephone,
    .section_telephone_1:not(:placeholder-shown)+.filed_telephone {
        top: 23px;
        left: 17px;
        font-size: 14px;
        color: gray;
        padding: 0 4px;
        font-family: 'Roboto', sans-serif;
        font-weight: 450;
    }

    /* Định dạng label mặc định nằm giữa input */
    .filed_telephone {
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        position: absolute;
        left: 12px;
        top: 49%;
        transform: translateY(-47%);
        padding: 0 5px;
        color: gray;
        transition: all 0.3s ease-in-out;
        pointer-events: none;
    }

    .option_1 {
        padding-bottom: 150px;
    }

    .frame_address {
        overflow: hidden;
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        border: 1px solid #d9d9d9;
        outline: none;
        box-shadow: 0 0 0 0.4px #d9d9d9;
        transition: all 0.2s ease-out;
        background-color: white;
        color: #333333;
        border-radius: 6px;
        display: block;
        box-sizing: border-box;
        width: 100%;
        word-break: normal;
        display: table;
        box-sizing: border-box;
        width: 99%;
        zoom: 1;
        background-color: #fafafa;
        min-height: 120px;
    }

    .radio_delivery {
        /* padding: 0px 7px 7px 0px; */
        display: table;
        box-sizing: border-box;
        width: 100%;
        zoom: 1;
    }

    .radio_label {
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        outline: none;
        background-color: white;
        color: #333333;
        border-radius: 6px;
        display: block;
        box-sizing: border-box;
        width: 100%;
        padding: 20px 15px 20px 10px;
        word-break: normal;
    }

    .radio_input {
        border-radius: 50%;
        display: table-cell;
        padding-right: 0.75em;
        white-space: nowrap;
    }

    .label_radio {
        display: table-cell;
        width: 100%;
    }

    .order_checkout {
        padding: 10px;
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        border-top: 1px solid #d9d9d9;
        outline: none;
        background-color: white;
        color: #333333;
        display: block;
        box-sizing: border-box;
        width: 100%;
        word-break: normal;
        display: table;
        box-sizing: border-box;
        width: 100%;
        zoom: 1;
        background-color: #fafafa;
        min-height: 160px;
    }

    .order_address {
        position: relative;
        width: 100%;
        float: left;
        padding: 0.45em;
        box-sizing: border-box;
    }

    /* .order_address_1 {
        position: relative;
    } */

    .address_order {
        outline: none;
        border: 1px solid #d9d9d9;
        font-size: 18px;
        padding: 25px 10px 5px 12px;
        box-shadow: 0 0 0 0.4px #d9d9d9;
        transition: all 0.2s ease-out;
        background-color: white;
        color: #333333;
        border-radius: 4px;
        display: block;
        box-sizing: border-box;
        width: 100%;
        word-break: normal;
    }

    /* Khi input được focus */
    .address_order:focus {
        box-shadow: 0 0 0 2px #338dbc;
        border-color: #338dbc;
    }

    /* Khi input không có dữ liệu và mất focus */
    .address_order:placeholder-shown {
        border: 1px solid #d9d9d9;
        box-shadow: 0 0 0 0.4px #d9d9d9;
    }

    .address_order:focus+.filed_address,
    .address_order:not(:placeholder-shown)+.filed_address {
        top: 23px;
        left: 17px;
        font-size: 14px;
        color: gray;
        padding: 0 4px;
        font-family: 'Roboto', sans-serif;
        font-weight: 450;
    }

    /* Định dạng label mặc định nằm giữa input */
    .filed_address {
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        position: absolute;
        left: 12px;
        top: 49%;
        transform: translateY(-47%);
        padding: 0 5px;
        color: gray;
        transition: all 0.3s ease-in-out;
        pointer-events: none;
    }

    .order_city {
        float: left;
        padding: 0.45em;
        box-sizing: border-box;
        width: 33.33333% !important;
    }

    .order_city_1 {
        position: relative;
    }

    .city_order {
        outline: none;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        padding: 15px 10px 15px 10px;
        font-size: 18px;
        border: 1px solid #d9d9d9;
        box-shadow: 0 0 0 0.4px #d9d9d9;
        transition: all 0.2s ease-out;
        background-color: white;
        color: #333333;
        border-radius: 4px;
        display: block;
        box-sizing: border-box;
        width: 100%;
        word-break: normal;
    }

    .city_order_1 {
        outline: none;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        padding: 15px 10px 15px 10px;
        font-size: 18px;
        border: 1px solid #d9d9d9;
        box-shadow: 0 0 0 0.4px #d9d9d9;
        transition: all 0.2s ease-out;
        background-color: white;
        color: #333333;
        border-radius: 4px;
        display: block;
        box-sizing: border-box;
        width: 100%;
        word-break: normal;
    }

    .order_city_1::after {
        padding: 3px;
        border: solid #666666;
        border-width: 0px 1px 1px 0;
        display: inline-block;
        content: '';
        font-size: 18px;
        color: #333;
        position: absolute;
        right: 14px;
        top: calc(50% - 5px);
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        /* transform: translateY(-50%); */
        pointer-events: none;
        /* Không ảnh hưởng đến sự kiện click */
    }

    .order_district {
        float: left;
        padding: 0.45em;
        box-sizing: border-box;
        width: 33.33333% !important;
    }

    .order_district_1 {
        position: relative;
    }

    .order_district_1::after {
        padding: 3px;
        border: solid #666666;
        border-width: 0px 1px 1px 0;
        display: inline-block;
        content: '';
        font-size: 18px;
        color: #333;
        position: absolute;
        right: 14px;
        top: calc(50% - 5px);
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        /* transform: translateY(-50%); */
        pointer-events: none;
        /* Không ảnh hưởng đến sự kiện click */
    }

    .address_districst {
        border: 1px solid #d9d9d9;
        outline: none;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        font-size: 18px;
        padding: 15px 10px 15px 10px;
        box-shadow: 0 0 0 0.4px #d9d9d9;
        transition: all 0.2s ease-out;
        background-color: white;
        color: #333333;
        border-radius: 4px;
        display: block;
        box-sizing: border-box;
        width: 100%;
        word-break: normal;
    }

    .address_districst_1 {
        border: 1px solid #d9d9d9;
        outline: none;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        font-size: 18px;
        padding: 15px 10px 15px 10px;
        box-shadow: 0 0 0 0.4px #d9d9d9;
        transition: all 0.2s ease-out;
        background-color: white;
        color: #333333;
        border-radius: 4px;
        display: block;
        box-sizing: border-box;
        width: 100%;
        word-break: normal;
    }

    .order_ward {
        float: left;
        padding: 0.45em;
        box-sizing: border-box;
        width: 33.33333% !important;
    }

    .order_ward_1 {
        position: relative;
    }

    .address_ward {
        border: 1px solid #d9d9d9;
        outline: none;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        font-size: 18px;
        padding: 15px 10px 15px 10px;
        box-shadow: 0 0 0 0.4px #d9d9d9;
        transition: all 0.2s ease-out;
        background-color: white;
        color: #333333;
        border-radius: 4px;
        display: block;
        box-sizing: border-box;
        width: 100%;
        word-break: normal;
    }

    .address_ward_1 {
        border: 1px solid #d9d9d9;
        outline: none;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        font-size: 18px;
        padding: 15px 10px 15px 10px;
        box-shadow: 0 0 0 0.4px #d9d9d9;
        transition: all 0.2s ease-out;
        background-color: white;
        color: #333333;
        border-radius: 4px;
        display: block;
        box-sizing: border-box;
        width: 100%;
        word-break: normal;
    }

    .order_ward_1::after {
        padding: 3px;
        border: solid #666666;
        border-width: 0px 1px 1px 0;
        display: inline-block;
        content: '';
        font-size: 18px;
        color: #333;
        position: absolute;
        right: 14px;
        top: calc(50% - 5px);
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        /* transform: translateY(-50%); */
        pointer-events: none;
        /* Không ảnh hưởng đến sự kiện click */
    }

    .address {
        padding-bottom: 30px;
        min-height: 100px;
    }

    .title_store {
        text-decoration: none;
    }

    .radio_store {
        display: table;
        box-sizing: border-box;
        width: 100%;
        zoom: 1;
        border-top: 1px solid #d9d9d9;
        background-color: white;
    }

    .radio_store_1 {
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        outline: none;
        background-color: white;
        color: #333333;
        border-radius: 6px;
        /* display: block; */
        box-sizing: border-box;
        width: 100%;
        padding: 20px 15px 20px 10px;
        word-break: normal;
        display: flex;
    }

    .radio_recept_store {
        border-radius: 50%;
        display: table-cell;
        padding-right: 0.75em;
        white-space: nowrap;
    }

    .recept_store {
        display: table-cell;
        width: 100%;
    }

    .step_footer {
        justify-content: space-between;
        flex-direction: row-reverse;
        align-items: center;
        display: flex;
    }

    .btn_continue {
        cursor: pointer;
        border: 1px solid #338dbc;
        outline: none;
        box-shadow: 0 0 0 0.4px #338dbc;
        margin-right: 6px;
        border-radius: 6px;
        text-align: center;
        position: relative;
        padding: 20px 0px 20px 0px;
        background: #338dbc;
        display: inline-block;
    }

    .continue_pay {
        padding: 15px;
        font-weight: 500;
        font-family: 'Roboto', sans-serif;
        color: white;
        font-size: 18px;
        text-align: center;
    }

    .return_cart {
        color: #338dbc;
        float: left;
        font-weight: 500;
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        text-decoration: none;
    }

    .order_summary h2 {
        margin-bottom: 5px;
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
        color: #333333;
        margin-top: 12px;
    }

    .order_summary_cart_1 {
        border-bottom: 1px solid #e7e7e7;
        margin-bottom: 27px;
    }

    .product_table {
        border-collapse: separate;
        border-spacing: 0 10px;
        margin-bottom: 10px;
        width: 100%;
        font-size: 1em;
    }

    .visual_hidden {
        border: 0;
        clip: rect(0, 0, 0, 0);
        clip: rect(0 0 0 0);
        width: 2px;
        height: 2px;
        margin: -2px;
        overflow: hidden;
        padding: 0;
        position: absolute;
    }

    .product_thumbnail {
        width: 90px;
        box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1) inset;
        border-radius: 8px;
        background: #fff;
        position: relative;
    }

    .product_thumbnail_1 {
        width: 67px;
        height: 80px;
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        text-align: center;
    }

    .product_thumbnail_1 img {
        margin-top: 2px;
        margin-left: 15px;
        padding: 8px;
        height: 75px;
        width: 60px;
    }

    .product_quantity {
        font-size: 16px;
        font-weight: 500;
        white-space: nowrap;
        padding: 2px 7px;
        border-radius: 2em;
        background-color: rgba(153, 153, 153, 0.9);
        color: #fff;
        position: absolute;
        right: -6px;
        top: -9px;
        z-index: 2;
    }

    .product_description {
        margin-left: 10px;
        display: grid;
    }

    .title_descrip {
        width: 300px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        padding-bottom: 10px;
        text-align: left;
        text-transform: uppercase;
        font-weight: 600;
        font-family: 'Roboto', sans-serif;
        font-size: 17px;
    }

    .category_descrip {
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
    }

    .summary_price {
        text-align: right;
        position: relative;
        top: -32px;
        float: right;
        font-size: 18px;
        font-family: 'Roboto', sans-serif;
    }

    .sidebar {
        padding: 40px 0px 0px 55px;
    }

    .order_summary_cart_3 {
        border-bottom: 1px solid #e7e7e7;
        margin-bottom: 20px;
    }

    .order_discount_1 {
        padding-bottom: 20px;
        display: flex;
    }

    .code_discount {
        transition: all 0.3s ease-in-out;
        outline: none;
        border: 1px solid #d9d9d9;
        font-size: 18px;
        padding: 15px 10px 15px 10px;
        box-shadow: 0 0 0 0.4px #d9d9d9;
        /* transition: all 0.2s ease-out; */
        background-color: white;
        color: #333333;
        border-radius: 4px;
        display: block;
        box-sizing: border-box;
        width: 160%;
        word-break: normal;
    }

    .btn_discount {
        border: 1px solid #338dbc;
        outline: none;
        box-shadow: 0 0 0 0.4px #338dbc;
        margin-right: 6px;
        border-radius: 2px;
        text-align: center;
        position: relative;
        padding: 0px 0px -4px 0px;
        background: #338dbc;
        display: inline-block;
        margin-left: 11.9em;
    }

    .use_discount {
        cursor: pointer;
        padding: 30px;
        font-weight: 500;
        font-family: 'Roboto', sans-serif;
        color: white;
        font-size: 18px;
        text-align: center;
    }

    .choose_coupon {
        display: flex;
        align-items: center;
    }

    .icon_coupon i {
        font-size: 18px;
        color: #74C0FC;
    }

    .viewcoupon {
        cursor: pointer;
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        color: #338dbc;
        font-weight: 500;
        margin-left: 10px;
    }

    .list_coupon {
        margin-top: 10px;
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        width: 100%;
    }

    .select_discount {
        overflow: hidden;
        position: relative;
        padding: 5px 0px 35px 0px;
    }

    .list_coupon span span {
        position: relative;
        /* Cần để ::before và ::after định vị đúng */
        cursor: pointer;
        /* Hiển thị con trỏ bàn tay khi di chuột */
    }

    .list_coupon span span::before {
        content: "";
        display: block;
        width: 10px;
        height: 10px;
        border: 1px solid #338dbc;
        background: #fff;
        z-index: 1;
        left: -7px;
        top: 50%;
        position: absolute;
        border-radius: 50%;
        transform: translateY(-50%);
    }

    .list_coupon span span::after {
        content: "";
        display: block;
        width: 10px;
        height: 10px;
        border: 1px solid #338dbc;
        background: #fff;
        z-index: 1;
        right: -7px;
        top: 50%;
        position: absolute;
        border-radius: 50%;
        transform: translateY(-50%);
    }

    .discount_coupon {
        font-size: 17px;
        border: 1px solid #338dbc;
        padding: 5px 15px;
        border-radius: 3px;
        background: #fff;
        font-weight: 700;
        color: #338dbc;
        display: inline-block;
    }

    .calculate {
        margin-bottom: 15px;
        font-family: 'Roboto', sans-serif;
        display: flex;
        justify-content: space-between;
    }

    .title_calculate {
        font-weight: 450;
        color: #717171;
        font-size: 18px;
    }

    .money_order {
        float: right;
        color: #4b4b4b;
        font-size: 18px;
    }

    .shipping {
        margin-bottom: 30px;
        font-family: 'Roboto', sans-serif;
        display: flex;
        justify-content: space-between;
    }

    .shipping_fee {
        font-weight: 450;
        font-size: 18px;
        color: #717171;
    }

    .money_shipping {
        color: #4b4b4b;
        font-size: 18px;
    }

    .order_summary_cart_4 {
        margin-top: 30px;
    }

    .total_money {
        border-top: 1px solid #e7e7e7;
        align-items: center;
        display: flex;
        justify-content: space-between;
        text-align: center;
        padding-top: 30px;
    }

    .money_cart {
        font-family: 'Roboto', sans-serif;
        font-size: 21px;
        color: #4b4b4b;
    }

    .money_total {
        color: #4b4b4b;
        font-family: 'Roboto', sans-serif;
        font-size: 29px;
    }

    .continue_method {
        text-decoration: none;
    }

    .title_branch h2 {
        margin-bottom: 25px;
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
        color: #333333;
        margin-top: 12px;
    }

    .box_branch_1 {
        overflow: hidden;
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        border: 1px solid #d9d9d9;
        outline: none;
        box-shadow: 0 0 0 0.4px #d9d9d9;
        transition: all 0.2s ease-out;
        background-color: white;
        color: #333333;
        border-radius: 6px;
        display: block;
        box-sizing: border-box;
        width: 100%;
        word-break: normal;
        display: table;
        box-sizing: border-box;
        width: 99%;
        zoom: 1;
        background-color: #fafafa;
    }

    .frame_branch_1 label {
        align-items: center;
        background-color: white;
        display: flex;
        box-sizing: border-box;
        width: 100%;
        padding: 15px 10px 15px 10px;
        word-break: normal;
    }

    .branch_stock {
        margin-bottom: 50px;
    }

    .order_checkout {
        display: none;
    }

    .order_checkout_1 {
        min-height: 90px;
        padding: 10px;
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        border-top: 1px solid #d9d9d9;
        outline: none;
        background-color: white;
        color: #333333;
        display: block;
        box-sizing: border-box;
        width: 100%;
        word-break: normal;
        display: table;
        box-sizing: border-box;
        width: 100%;
        zoom: 1;
        background-color: #fafafa;
    }

    .order_checkout_1 {
        display: none;
    }

    .has-border {
        border-top: 1px solid #d9d9d9;
    }

    .branch_stock {
        display: none;
    }

    .main_notification {
        opacity: 1;
        visibility: visible;
        width: 470px;
        padding: 0;
        position: fixed;
        background: #FFFFFF;
        box-shadow: 0px 0px 20px rgb(33 33 33 / 20%);
        border-radius: 10px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-height: 70vh;
        min-height: 620px;
        z-index: 1234;
        transition: opacity 0.5s ease-out;
        display: -webkit-flex;
        display: flex;
        flex-direction: column;
    }

    .main_notification {
        display: none;
    }

    .title_discount {
        align-items: center;
        display: flex;
        padding: 25px 20px;
        position: relative;
        box-shadow: inset 0px -1px 0px #eeeeee;
    }

    .title_discount p {
        font-family: 'Roboto', sans-serif;
        width: 100%;
        font-weight: 400;
        font-size: 25px;
        line-height: 22px;
        padding-right: 60px;
        color: #424242;
    }

    .icon_x {
        font-size: 35px;
        width: 70px;
        height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 5;
    }

    .box_coupon {
        overflow-x: hidden !important;
        overflow-y: auto;
        max-height: calc(100% - 82px);
        padding: 11px 14px;
    }

    .box_coupon h3 {
        font-size: 20px;
        line-height: 22px;
        font-weight: 500;
        padding: 5px 0px 15px 3.5px;
        width: 100%;
        color: #424242;
    }

    .fr_discount_1 {
        position: relative;
        background: #fff;
        filter: drop-shadow(0px 0px 3px rgba(0, 0, 0, .15));
        padding: 15px 25px;
        display: flex;
        min-height: 80px;
        border-radius: 5px;
        margin: 5px 0px 15px 2px;
    }

    .frame_coupon {
        display: flex;
        width: 100%;
        align-items: center;
    }

    .coupon_body {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        width: 100%;
        position: relative;
    }

    .coupon_head {
        width: 100%;
        display: -webkit-flex;
        display: flex;
    }

    .coupon_head span {
        margin-top: 5px;
        width: 40px;
        flex: 0 0 auto;
        margin-right: 10px;
        text-align: center;
        font-size: 35px;
    }

    .coupon_head h3 {
        width: calc(100% - 47px);
        margin: 8px 0px 0px -4px;
        font-weight: bold;
        font-size: 20px;
        line-height: 20px;
        color: #212121;
    }

    .counpon_desc {
        width: 100%;
        font-size: 18px;
        color: #212121;
        display: block;
    }

    .counpon_desc ul {
        line-height: 30px;
        list-style: initial;
        list-style-position: outside;
        padding-left: 18px;
    }

    .coupon_apply {
        display: flex;
        width: 100%;
        justify-content: space-between;
        align-items: center;
        margin-top: 8px;
    }

    .btn_apply {
        border: none;
        font-size: 18px;
        display: inline-block;
        border-radius: 4px;
        font-weight: 500;
        padding: 1.4em 1.7em;
        box-sizing: border-box;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
        position: relative;
        background: #338dbc;
        color: white;
        padding: 10px 10px !important;
        width: auto !important;
        background: #338dbc;
    }

    .compact span {
        color: #338dbc;
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
    }

    .background_pay {
        background: #CFCFCF;
        position: fixed;
        opacity: 0.6;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        z-index: 122;
        visibility: hidden;
        /* Mặc định ẩn */
    }

    .code_freeship {
        margin-bottom: 15px;
        font-family: 'Roboto', sans-serif;
        display: flex;
        justify-content: space-between;
        display: flex;
    }

    .code_freeship_1 {
        font-weight: 450;
        color: #717171;
        font-size: 18px;
        display: flex
    }

    .tag_icon {
        margin-left: 15px;
    }

    .tag_icon span {
        margin-left: 3px;
        color: #3fa2ee;
    }

    .money_freeship {
        float: right;
        color: #4b4b4b;
        font-size: 18px;
    }

    /* .code_discount {
        padding: 10px;
        border: 2px solid #ccc;
        border-radius: 5px;
        transition: all 0.3s ease-in-out;
        font-size: 16px;
    } */

    .code_discount.active {
        padding: 15px 0px 15px 10px !important;
        width: 157%;
        border-color: #3fa2ee;
        ;
        background-color: oklch(0.984 0.003 247.858);
        font-weight: bold;
        color: #3fa2ee;
    }

    #mainNotification {
        transition: opacity 0.3s ease-in-out;
    }

    .btn_discount:disabled {
        background-color: #ccc !important;
        cursor: not-allowed;
        opacity: 0.6;
    }

    .scrollable-cart {
        max-height: 307px;
        overflow-y: auto;
        padding-right: 5px;
    }

    .product_table {
        width: 100%;
    }

    .scrollable-cart::-webkit-scrollbar {
        width: 6px;
    }

    .scrollable-cart::-webkit-scrollbar-thumb {
        background-color: rgba(0, 0, 0, 0.2);
        border-radius: 3px;
    }
</style>
</head>

<?php
if (isset($_POST['tieptucthanhtoan'])) {
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

            // Kiểm tra hóa đơn "Đang xử lí"
            $sql_check_invoice = "SELECT * FROM hoadon WHERE id_khachhang = ? AND trang_thai = 'Đang xử lí' LIMIT 1";
            $stmt_check_invoice = mysqli_prepare($con, $sql_check_invoice);
            mysqli_stmt_bind_param($stmt_check_invoice, "i", $id_khachhang);
            mysqli_stmt_execute($stmt_check_invoice);
            $result_check_invoice = mysqli_stmt_get_result($stmt_check_invoice);
            $existing_invoice = mysqli_fetch_assoc($result_check_invoice);

            $hovaten = mysqli_real_escape_string($con, strip_tags($_POST['hovaten']));
            $email = mysqli_real_escape_string($con, strip_tags($_POST['email']));
            $sodienthoai = mysqli_real_escape_string($con, strip_tags($_POST['sodienthoai']));
            $delivery_method = $_POST['delivery'];

            if ($delivery_method == "Giao hàng tận nơi") {
                $id_tinhthanh = $_POST['tinhthanh'] ?? NULL;
                $id_quanhuyen = $_POST['quanhuyen'] ?? NULL;
                $id_phuongxa = $_POST['phuongxa'] ?? NULL;
                $diachi = mysqli_real_escape_string($con, strip_tags($_POST['diachi']));

                // Kiểm tra nếu thiếu thông tin thì hiển thị thông báo lỗi
                if (empty($diachi) || empty($id_tinhthanh) || empty($id_quanhuyen) || empty($id_phuongxa)) {
                    echo "<script>alert('Vui lòng nhập đầy đủ thông tin địa chỉ giao hàng!'); window.history.back();</script>";
                    exit();
                }

                // Truy vấn lấy tên tỉnh/thành
                $tinhthanh = NULL;
                if ($id_tinhthanh) {
                    $query_tt = "SELECT ten_tinhthanh FROM tinhthanh WHERE id_tinhthanh = ?";
                    $stmt_tt = mysqli_prepare($con, $query_tt);
                    mysqli_stmt_bind_param($stmt_tt, "i", $id_tinhthanh);
                    mysqli_stmt_execute($stmt_tt);
                    $result_tt = mysqli_stmt_get_result($stmt_tt);
                    if ($row_tt = mysqli_fetch_assoc($result_tt)) {
                        $tinhthanh = $row_tt['ten_tinhthanh'];
                    }
                }

                // Truy vấn lấy tên quận/huyện
                $quanhuyen = NULL;
                if ($id_quanhuyen) {
                    $query_qh = "SELECT ten_quanhuyen FROM quanhuyen WHERE id_quanhuyen = ?";
                    $stmt_qh = mysqli_prepare($con, $query_qh);
                    mysqli_stmt_bind_param($stmt_qh, "i", $id_quanhuyen);
                    mysqli_stmt_execute($stmt_qh);
                    $result_qh = mysqli_stmt_get_result($stmt_qh);
                    if ($row_qh = mysqli_fetch_assoc($result_qh)) {
                        $quanhuyen = $row_qh['ten_quanhuyen'];
                    }
                }

                // Truy vấn lấy tên phường/xã
                $phuongxa = NULL;
                if ($id_phuongxa) {
                    $query_px = "SELECT ten_phuongxa FROM wards WHERE id_phuongxa = ?";
                    $stmt_px = mysqli_prepare($con, $query_px);
                    mysqli_stmt_bind_param($stmt_px, "i", $id_phuongxa);
                    mysqli_stmt_execute($stmt_px);
                    $result_px = mysqli_stmt_get_result($stmt_px);
                    if ($row_px = mysqli_fetch_assoc($result_px)) {
                        $phuongxa = $row_px['ten_phuongxa'];
                    }
                }

                $diachi = mysqli_real_escape_string($con, strip_tags($_POST['diachi']));
                $id_chinhanh = NULL;
            } else {
                $diachi = $tinhthanh = $quanhuyen = $phuongxa = NULL;

                // Lấy id_chinhanh từ form nếu người dùng đã chọn chi nhánh
                $id_chinhanh = $_POST['id_chinhanh'] ?? NULL;

                // Nếu chưa chọn, lấy chi nhánh mặc định từ tỉnh thành
                if (!$id_chinhanh && $id_tinhthanh) {
                    $query_cn = "SELECT id_chinhanh FROM chinhanh WHERE id_tinhthanh = ? LIMIT 1";
                    $stmt_cn = mysqli_prepare($con, $query_cn);
                    mysqli_stmt_bind_param($stmt_cn, "i", $id_tinhthanh);
                    mysqli_stmt_execute($stmt_cn);
                    $result_cn = mysqli_stmt_get_result($stmt_cn);
                    if ($row_cn = mysqli_fetch_assoc($result_cn)) {
                        $id_chinhanh = $row_cn['id_chinhanh'];
                    }
                }
            }

            if ($existing_invoice) {
                $sql_update = "UPDATE hoadon SET
                ho_va_ten = ?,
                email = ?,
                so_dien_thoai = ?,
                phuongthucnhan = ?,
                dia_chi = ?,
                tinh_thanh = ?,
                quan_huyen = ?,
                phuong_xa = ?,
                id_chinhanh = ?
                WHERE id_hoadon = ? AND trang_thai = 'Đang xử lí' ";
                $stmt_update = mysqli_prepare($con, $sql_update);
                mysqli_stmt_bind_param($stmt_update, "sssssssssi", $hovaten, $email, $sodienthoai, $delivery_method, $diachi, $tinhthanh, $quanhuyen, $phuongxa, $id_chinhanh, $existing_invoice['id_hoadon']);
                mysqli_stmt_execute($stmt_update);
                $id_hoadon = $existing_invoice['id_hoadon'];
            } else {
                $sql_insert = "INSERT INTO hoadon (ho_va_ten, email, so_dien_thoai, phuongthucnhan, dia_chi, tinh_thanh, quan_huyen, phuong_xa, id_chinhanh) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt_insert = mysqli_prepare($con, $sql_insert);
                mysqli_stmt_bind_param($stmt_insert, "ssssssssi", $hovaten, $email, $sodienthoai, $delivery_method, $diachi, $tinhthanh, $quanhuyen, $phuongxa, $id_chinhanh);
                mysqli_stmt_execute($stmt_insert);
                $id_hoadon = mysqli_insert_id($con);
            }

            header("Location: index.php?quanly=phuongthucthanhtoan");
            exit();
        }
    }
}
?>

<?php
include("db/connect.php"); // Kết nối database

if (isset($_POST["ajax_request"])) {
    if ($_POST["ajax_request"] == "district" && isset($_POST["id_tinhthanh"])) {
        $id_tinhthanh = $_POST["id_tinhthanh"];

        $query = "SELECT * FROM quanhuyen WHERE id_tinhthanh = '$id_tinhthanh'";
        $result = mysqli_query($con, $query);

        echo '<option value="">Chọn quận / huyện</option>';
        while ($row = mysqli_fetch_array($result)) {
            echo '<option value="' . $row["id_quanhuyen"] . '">' . $row["ten_quanhuyen"] . '</option>';
        }
    } elseif ($_POST["ajax_request"] == "ward" && isset($_POST["id_quanhuyen"])) {
        $id_quanhuyen = $_POST["id_quanhuyen"];

        $query = "SELECT * FROM wards WHERE id_quanhuyen = '$id_quanhuyen'";
        $result = mysqli_query($con, $query);

        echo '<option value="">Chọn phường / xã</option>';
        while ($row = mysqli_fetch_array($result)) {
            echo '<option value="' . $row["id_phuongxa"] . '">' . $row["ten_phuongxa"] . '</option>';
        }
    }
    exit; // Kết thúc xử lý AJAX
}
?>

<?php
include('db/connect.php');

$id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : null;

if ($id_user) {
    // Lấy dữ liệu giỏ hàng
    $sql_lay_giohang = mysqli_query($con, "SELECT giohang.*, loaisanpham.ten_loai_sach FROM giohang 
INNER JOIN sanpham ON giohang.id_sanpham = sanpham.id_sanpham
INNER JOIN loaisanpham ON sanpham.id_loai_spham = loaisanpham.id_loai_spham
WHERE giohang.id_user = '$id_user' 
ORDER BY id_giohang DESC");
}

$total = 0;
?>

<?php
if (isset($_POST['shippingFee'])) {
    // Lưu phí vận chuyển vào session
    $_SESSION['shippingFee'] = $_POST['shippingFee'];

    // Cập nhật lại tổng tiền
    if (isset($_SESSION['totalPrice'])) {
        $totalPrice = $_SESSION['totalPrice'];
        $totalPrice += $_SESSION['shippingFee'] - $_SESSION['magiamgia']; // Cộng phí vận chuyển vào tổng tiền
        $_SESSION['totalPrice'] = $totalPrice;
    }

    echo "Phí vận chuyển đã được lưu!";
}
?>



<body>
    <div class="container">
        <div class="wrap">
            <div class="checkout-form">
                <div class="main_header">
                    <a class="title_store" href="#"> <!-- Sửa lỗi "herf" thành "href" -->
                        <h2>Bookstore</h2>
                    </a>
                </div>
                <div class="main_contain">
                    <form id="paymentForm" action="" method="POST">
                        <div class="step">
                            <div class="step_section">

                                <div class="section">
                                    <div class="title_step_pay">
                                        <h2>Thông tin giao hàng</h2>
                                    </div>
                                    <div class="option">
                                        <div class="option_1">
                                            <div class="section_name">
                                                <div class="option_name">
                                                    <input type="text" id="nameInput" class="section_name_1" placeholder=" " name="hovaten" required>
                                                    <label for="nameInput" class="filed_name">Họ và tên</label>
                                                </div>
                                            </div>
                                            <div class="section_email">
                                                <div class="option_email">
                                                    <input type="text" id="emailInput" class="section_email_1" placeholder=" " name="email" required>
                                                    <label for="emailInput" class="filed_email">Email</label>
                                                </div>
                                            </div>
                                            <div class="section_telephone">
                                                <div class="option_telephone">
                                                    <input type="text" id="telephoneInput" class="section_telephone_1" placeholder=" " name="sodienthoai" required>
                                                    <label for="telephoneInput" class="filed_telephone">Số điện thoại</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section_content">
                                        <div class="address">
                                            <div class="frame_address">
                                                <div class="radio_delivery">
                                                    <label class="radio_label">
                                                        <div class="radio_input">
                                                            <input type="radio" name="delivery" class="input_radio" value="Giao hàng tận nơi" id="deliveryOption">
                                                        </div>
                                                        <label class="label_radio">Giao hàng tận nơi</label>
                                                    </label>
                                                </div>
                                                <div class="order_checkout" id="orderCheckout">
                                                    <div class="order_address">
                                                        <div class="order_address_1">
                                                            <input type="text" id="addressInput" class="address_order" placeholder=" " name="diachi">
                                                            <label for="addressInput" class="filed_address">Địa chỉ</label>
                                                        </div>
                                                    </div>
                                                    <div class="order_city">
                                                        <div class="order_city_1">
                                                            <select class="city_order" name="tinhthanh">
                                                                <option value="">Chọn tỉnh / thành</option>
                                                                <?php
                                                                $sql_province = mysqli_query($con, "SELECT * FROM tinhthanh");
                                                                while ($row_sanpham = mysqli_fetch_array($sql_province)) {
                                                                ?>
                                                                    <option value="<?php echo $row_sanpham["id_tinhthanh"] ?>"><?php echo $row_sanpham["ten_tinhthanh"] ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="order_district">
                                                        <div class="order_district_1">
                                                            <select class="address_districst" name="quanhuyen">
                                                                <option value="">Chọn quận / huyện</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="order_ward">
                                                        <div class="order_ward_1">
                                                            <select class="address_ward" name="phuongxa">
                                                                <option value="">Chọn phường / xã</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="radio_store">
                                                    <label class="radio_store_1">
                                                        <div class="radio_recept_store">
                                                            <input type="radio" name="delivery" class="recept_radio" value="Nhận tại cửa hàng" id="pickupOption">
                                                        </div>
                                                        <label class="recept_store">Nhận tại cửa hàng</label>
                                                    </label>
                                                </div>
                                                <div class="order_checkout_1" id="orderCheckout_1">
                                                    <div class="order_city">
                                                        <div class="order_city_1">
                                                            <select class="city_order_1" name="tinhthanh1">
                                                                <option value="">Chọn tỉnh / thành</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="order_district">
                                                        <div class="order_district_1">
                                                            <select class="address_districst_1" name="quanhuyen1">
                                                                <option value="">Chọn quận / huyện</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="order_ward">
                                                        <div class="order_ward_1">
                                                            <select class="address_ward_1" name="phuongxa1">
                                                                <option value="">Chọn phường / xã</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="branch_stock" id="branchStock">
                                        <div class="frame_branch">
                                            <div class="title_branch">
                                                <h2>Chi nhánh còn hàng</h2>
                                            </div>
                                            <div class="box_branch">
                                                <div class="box_branch_1">
                                                    <div class="frame_branch">
                                                        <?php
                                                        $sql_branch = mysqli_query($con, "SELECT chinhanh.*, tinhthanh.ten_tinhthanh, quanhuyen.ten_quanhuyen, wards.ten_phuongxa FROM chinhanh
                                                        INNER JOIN tinhthanh ON chinhanh.id_tinhthanh = tinhthanh.id_tinhthanh
                                                        INNER JOIN quanhuyen ON chinhanh.id_quanhuyen = quanhuyen.id_quanhuyen
                                                        INNER JOIN wards ON chinhanh.id_phuongxa = wards.id_phuongxa");
                                                        $index = 0; // Biến đếm
                                                        while ($row_sanpham = mysqli_fetch_array($sql_branch)) {
                                                            $borderClass = ($index > 0) ? "has-border" : "";
                                                        ?>
                                                            <div class="frame_branch_1 <?php echo $borderClass; ?>">
                                                                <label>
                                                                    <div class="radio_input">
                                                                        <input type="radio" name="id_chinhanh" class="input_radio"
                                                                            value="<?php echo $row_sanpham['id_chinhanh']; ?>"
                                                                            data-tinhthanh="<?php echo $row_sanpham['ten_tinhthanh']; ?>"
                                                                            data-quanhuyen="<?php echo $row_sanpham['ten_quanhuyen']; ?>"
                                                                            data-phuongxa="<?php echo $row_sanpham['ten_phuongxa']; ?>">
                                                                    </div>
                                                                    <span class="infor_branch">
                                                                        <strong><?php echo $row_sanpham["ten_chinhanh"] ?>:</strong>
                                                                        <?php echo $row_sanpham["ten_phuongxa"] ?> ,
                                                                        <?php echo $row_sanpham["ten_quanhuyen"] ?> ,
                                                                        <?php echo $row_sanpham["ten_tinhthanh"] ?>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        <?php
                                                            $index++; // Tăng biến đếm sau mỗi vòng lặp 
                                                        } ?>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="step_footer">
                                <button type="submit" class="btn_continue" name="tieptucthanhtoan">
                                    <span class="continue_pay">Tiếp tục đến phương thức thanh toán</span>
                                </button>
                                <a class="return_cart" href="?quanly=giohang">Giỏ hàng</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="main_notification" id="mainNotification">
                    <div class="title_discount">
                        <p>Chọn giảm giá</p>
                        <div class="icon_x">
                            <span id="closecoupon"><i class="fa-solid fa-xmark" style="color: #e60a20;cursor:pointer;"></i></span>
                        </div>
                    </div>
                    <div class="box_coupon">
                        <h3>Mã giảm giá của Shop</h3>
                        <div class="fr_discount">
                            <div class="fr_discount_1">
                                <div class="frame_coupon">
                                    <div class="coupon_body">
                                        <div class="coupon_head">
                                            <span><i class="fa-solid fa-tags" style="color: #f13f04;"></i></span>
                                            <h3>FREESHIP</h3>
                                        </div>
                                        <div class="counpon_desc">
                                            <ul>
                                                <li>Giảm 100% phí vận chuyển</li>
                                                <li>Mua tối thiểu 500.000đ</li>
                                            </ul>
                                        </div>
                                        <div class="coupon_apply">
                                            <div class="compact">
                                                <span>Thu gọn</span>
                                            </div>
                                            <button class="btn_apply">Áp dụng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background_pay" id="background"></div>
            </div>
            <div class="sidebar">
                <div class="sidebar_content">
                    <div class="order_summary">
                        <h2>Thông tin đơn hàng</h2>
                        <div class="order_summary_cart">
                            <div class="order_summary_cart_1 scrollable-cart">
                                <table class="product_table">
                                    <thead>
                                        <tr>
                                            <th scop="col">
                                                <span class="visual_hidden">Hình ảnh</span>
                                            </th>
                                            <th scop="col">
                                                <span class="visual_hidden">Mô tả</span>
                                            </th>
                                            <th scop="col">
                                                <span class="visual_hidden">Số lượng</span>
                                            </th>
                                            <th scop="col">
                                                <span class="visual_hidden">Giá</span>
                                            </th>
                                        </tr>
                                    </thead>
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
                                        <tbody>
                                            <tr class="product_hidden">
                                                <td class="product_img">
                                                    <div class="product_thumbnail">
                                                        <div class="product_thumbnail_1">
                                                            <a href="#">
                                                                <img src="../img-index/<?php echo $row_sanpham["img"] ?>" alt="">
                                                            </a>
                                                        </div>
                                                        <span class="product_quantity"><?php echo $so_luong; ?></span>
                                                    </div>
                                                </td>
                                                <td class="product_description">
                                                    <span class="title_descrip"><?php echo $row_sanpham["ten_sach"] ?></span>
                                                    <span class="category_descrip"><?php echo $row_sanpham["ten_loai_sach"] ?></span>
                                                </td>
                                                <td class="product_price">
                                                    <span class="summary_price"><?php echo $subtotal . 'đ'; ?></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php
                                    }
                                    $total = number_format($total, 0, ',', '.');
                                    ?>
                                </table>
                            </div>
                            <?php
                            include 'magiamgia.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Xử lý khi chọn tỉnh/thành
        $(".city_order").change(function() {
            var id_tinhthanh = $(this).val();
            if (id_tinhthanh !== "") {
                $.ajax({
                    url: window.location.href,
                    type: "POST",
                    data: {
                        id_tinhthanh: id_tinhthanh,
                        ajax_request: "district"
                    },
                    success: function(response) {
                        $(".address_districst").html(response);
                        $(".address_ward").html('<option value="">Chọn phường / xã</option>'); // Reset danh sách phường/xã
                    }
                });
            } else {
                $(".address_districst").html('<option value="">Chọn quận / huyện</option>');
                $(".address_ward").html('<option value="">Chọn phường / xã</option>');
            }
        });

        // Xử lý khi chọn quận/huyện
        $(".address_districst").change(function() {
            var id_quanhuyen = $(this).val();
            if (id_quanhuyen !== "") {
                $.ajax({
                    url: window.location.href,
                    type: "POST",
                    data: {
                        id_quanhuyen: id_quanhuyen,
                        ajax_request: "ward"
                    },
                    success: function(response) {
                        $(".address_ward").html(response);
                    }
                });
            } else {
                $(".address_ward").html('<option value="">Chọn phường / xã</option>');
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let orderCheckout = document.getElementById("orderCheckout");
        let orderCheckout_1 = document.getElementById("orderCheckout_1");
        let branchStock = document.getElementById("branchStock");

        // Lấy tất cả các radio có name="delivery"
        let radioButtons = document.querySelectorAll('input[name="delivery"]');

        // Bắt sự kiện khi radio thay đổi
        radioButtons.forEach(radio => {
            radio.addEventListener("change", function() {
                if (this.id === "deliveryOption" && this.checked) {
                    orderCheckout.style.display = "block"; // Hiển thị phần nhập địa chỉ
                } else {
                    orderCheckout.style.display = "none"; // Ẩn khi chọn radio khác
                }

                if (this.id === "pickupOption" && this.checked) {
                    orderCheckout_1.style.display = "block"; // Hiển thị phần nhập địa chỉ
                    branchStock.style.display = "block"; // Hiển thị phần nhập địa chỉ
                } else {
                    orderCheckout_1.style.display = "none"; // Ẩn khi chọn radio khác
                    branchStock.style.display = "none"; // Ẩn khi chọn radio khác
                }
            });
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let mainNotification = document.getElementById("mainNotification");
        let viewCoupons = document.querySelectorAll(".viewcoupon");
        let closeCoupon = document.getElementById("closecoupon");
        let viewFreeship = document.getElementById("viewfreeship");

        viewCoupons.forEach(viewCoupon => {
            viewCoupon.addEventListener("click", function() {
                mainNotification.style.display = "block";
            });
        });

        if (viewFreeship) {
            viewFreeship.addEventListener("click", function() {
                mainNotification.style.display = "block";
            });
        }

        if (closeCoupon) {
            closeCoupon.addEventListener("click", function() {
                mainNotification.style.display = "none";
            });
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let backgroundPay = document.querySelector(".background_pay");
        let mainNotification = document.getElementById("mainNotification");
        let viewCoupon = document.querySelector(".viewcoupon");
        let closeCoupon = document.getElementById("closecoupon");
        let viewFreeship = document.getElementById("viewfreeship");

        // Khi ấn "Xem thêm mã giảm giá"
        viewCoupon.addEventListener("click", function() {
            backgroundPay.style.visibility = "visible"; // Hiện lớp phủ
            mainNotification.style.display = "block"; // Hiện bảng giảm giá
        });

        // Khi ấn "Xem thêm mã giảm giá"
        viewFreeship.addEventListener("click", function() {
            backgroundPay.style.visibility = "visible"; // Hiện lớp phủ
            mainNotification.style.display = "block"; // Hiện bảng giảm giá
        });

        // Khi ấn "Đóng" (nút x đỏ)
        closeCoupon.addEventListener("click", function() {
            backgroundPay.style.visibility = "hidden"; // Ẩn lớp phủ
            mainNotification.style.display = "none"; // Ẩn bảng giảm giá
        });

        // Khi bấm vào nền xám cũng ẩn bảng
        backgroundPay.addEventListener("click", function() {
            backgroundPay.style.visibility = "hidden";
            mainNotification.style.display = "none";
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.input_radio').on('change', function() {
            let tinhthanh = $(this).data('tinhthanh') || "";
            let quanhuyen = $(this).data('quanhuyen') || "";
            let phuongxa = $(this).data('phuongxa') || "";

            $('.city_order_1').html(`
                <option value="">Chọn tỉnh / thành</option>
                ${tinhthanh ? `<option value="${tinhthanh}" selected>${tinhthanh}</option>` : ""}
            `);

            $('.address_districst_1').html(`
                <option value="">Chọn quận / huyện</option>
                ${quanhuyen ? `<option value="${quanhuyen}" selected>${quanhuyen}</option>` : ""}
            `);

            $('.address_ward_1').html(`
                <option value="">Chọn phường / xã</option>
                ${phuongxa ? `<option value="${phuongxa}" selected>${phuongxa}</option>` : ""}
            `);
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let btnApply = document.querySelector(".btn_apply");
        let discountInput = document.getElementById("discountInput");
        let btnUseDiscount = document.getElementById("applyDiscount");
        let discountBox = document.getElementById("discountBox");
        let totalPrice = document.getElementById("totalPrice");
        let background = document.getElementById("background");
        let mainNotification = document.getElementById("mainNotification");
        let closeCodefree = document.getElementById("closeCodefree");

        // Lấy tổng tiền từ phần tử và chuyển đổi thành số (loại bỏ ký tự không phải số)
        let originalTotal = parseFloat(totalPrice.textContent.replace(/\D/g, "")); // Lấy số từ tổng tiền
        let discountValue = 50000; // Giá trị giảm giá

        // Hàm nhập từ từ vào ô input
        function typeDiscountCode(text, element, speed) {
            element.value = "";
            let index = 0;
            let interval = setInterval(() => {
                element.value += text[index];
                index++;
                if (index === text.length) {
                    clearInterval(interval);
                    element.classList.add("active"); // Thêm class để đổi màu
                }
            }, speed);
        }

        // Khi nhấn nút "Áp dụng", hiệu ứng gõ mã vào ô input
        btnApply.addEventListener("click", function() {
            typeDiscountCode("FREESHIP", discountInput, 100);
            mainNotification.style.display = "none"; // Ẩn ngay lập tức
            background.style.display = "none";
        });

        // Khi nhấn nút "Sử dụng", hiển thị mã giảm giá, cập nhật tổng tiền và gửi mã giảm giá về server
        btnUseDiscount.addEventListener("click", function() {
            let discountCode = discountInput.value.trim(); // Lấy mã giảm giá từ ô input

            if (discountCode === "FREESHIP") {
                discountBox.style.display = "flex"; // Hiển thị giảm giá
                let newTotal = originalTotal - discountValue;
                totalPrice.textContent = newTotal.toLocaleString("vi-VN") + "đ"; // Cập nhật tổng tiền theo định dạng VN

                // Vô hiệu hóa nút và đổi màu
                btnUseDiscount.disabled = true;
                btnUseDiscount.style.backgroundColor = "#ccc";
                btnUseDiscount.style.cursor = "not-allowed";

                // Gửi mã giảm giá và tổng tiền về máy chủ PHP để lưu vào session
                fetch("index.php?quanly=thanhtoan", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded"
                        },
                        body: "magiamgia=" + encodeURIComponent(discountCode) + "&totalPrice=" + encodeURIComponent(newTotal)
                    })
                    .then(response => response.text())
                    .then(data => {
                        console.log("Kết quả lưu mã giảm giá và tổng tiền:", data);
                        // Tự động tải lại trang
                        location.reload(); // Tải lại trang
                    })
                    .catch(error => {
                        console.error("Lỗi khi gửi mã giảm giá:", error);
                    });
            } else {
                alert("Vui lòng nhập mã giảm giá hợp lệ!");
            }
        });

        // Khi nhấn nút đóng mã giảm giá
        closeCodefree.addEventListener("click", function() {
            discountBox.style.display = "none"; // Ẩn discountBox

            // Kích hoạt lại nút sử dụng nếu mã bị đóng
            btnUseDiscount.disabled = false;
            btnUseDiscount.style.backgroundColor = ""; // Khôi phục màu gốc
            btnUseDiscount.style.cursor = "pointer";

            // Gửi yêu cầu xóa mã giảm giá khỏi database và session
            fetch("index.php?quanly=thanhtoan", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
                    body: "magiamgia=remove" // Gửi yêu cầu xóa mã giảm giá
                })
                .then(response => response.text())
                .then(data => {
                    console.log("Kết quả xóa mã giảm giá:", data);
                    // Sau khi xóa mã giảm giá, cập nhật lại tổng tiền
                    totalPrice.textContent = originalTotal.toLocaleString("vi-VN") + "đ"; // Hiển thị lại tổng tiền ban đầu
                    // Tự động tải lại trang
                    location.reload(); // Tải lại trang
                })
                .catch(error => {
                    console.error("Lỗi khi xóa mã giảm giá:", error);
                });
        });


        // Khi nhấn nút đóng
        closeCoupon.addEventListener("click", function() {
            mainNotification.style.display = "none"; // Ẩn ngay lập tức
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("paymentForm").addEventListener("submit", function(event) {
            var deliveryMethod = document.querySelector('input[name="delivery"]:checked');

            if (deliveryMethod && deliveryMethod.value === "Giao hàng tận nơi") {
                var diachi = document.querySelector('input[name="diachi"]').value.trim();
                var tinhthanh = document.querySelector('select[name="tinhthanh"]').value;
                var quanhuyen = document.querySelector('select[name="quanhuyen"]').value;
                var phuongxa = document.querySelector('select[name="phuongxa"]').value;

                if (!diachi || !tinhthanh || !quanhuyen || !phuongxa) {
                    event.preventDefault(); // Ngăn chặn form submit
                    alert("Vui lòng nhập đầy đủ thông tin địa chỉ giao hàng!");
                }
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let shippingRadio = document.getElementById("shippingFeeRadio");
        let shippingFeeDisplay = document.getElementById("shippingFee");
        let totalPrice = document.getElementById("totalPrice");
        let originalTotal = parseInt(totalPrice.textContent.replace(/\D/g, "")); // Lấy số từ tổng tiền
        let shippingFee = 50000; // Giá trị phí vận chuyển

        // Kiểm tra nếu phí vận chuyển đã được lưu trong session
        let savedShippingFee = '<?php echo isset($_SESSION["shippingFee"]) ? $_SESSION["shippingFee"] : ""; ?>';
        if (savedShippingFee) {
            shippingFeeDisplay.textContent = parseInt(savedShippingFee).toLocaleString("vi-VN") + "đ"; // Hiển thị phí vận chuyển đã lưu
            originalTotal += parseInt(savedShippingFee); // Cập nhật tổng tiền
            totalPrice.textContent = originalTotal.toLocaleString("vi-VN") + "đ"; // Cập nhật tổng tiền
            // Đặt trạng thái nút radio là checked nếu đã có phí vận chuyển
            shippingRadio.checked = true;
        }

        // Khi nhấn vào nút radio "Phí vận chuyển"
        shippingRadio.addEventListener("change", function() {
            if (this.checked && !savedShippingFee) { // Kiểm tra nếu chưa có phí vận chuyển
                // Cập nhật phí vận chuyển vào session
                fetch("index.php?quanly=phuongthucthanhtoan", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded"
                        },
                        body: "shippingFee=" + encodeURIComponent(shippingFee)
                    })
                    .then(response => response.text())
                    .then(data => {
                        console.log("Kết quả lưu phí vận chuyển:", data);
                    })
                    .catch(error => {
                        console.error("Lỗi khi gửi phí vận chuyển:", error);
                    });

                // Hiển thị phí vận chuyển trên giao diện
                shippingFeeDisplay.textContent = shippingFee.toLocaleString("vi-VN") + "đ";

                // Cập nhật tổng tiền
                let newTotal = originalTotal + shippingFee;
                totalPrice.textContent = newTotal.toLocaleString("vi-VN") + "đ";
            }
        });
    });
</script>

<?php
ob_end_flush(); // Đẩy nội dung ra trình duyệt
?>

</html>