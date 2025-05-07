<?php
ob_start();
session_start(); // Bắt đầu session
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
        padding: 45px 70px 0px 150px;
        width: 55%;
        background: white;
    }

    .order-summary {
        box-shadow: 1px 0 0 #e1e1e1 inset;
        background: #fafafa;
    }

    .order-summary h2 {
        margin-bottom: unset !important;
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
        color: #333333;
        margin-top: 12px;
    }

    .main_header {
        font-weight: 400;
        padding-left: 120px;
        font-family: 'Roboto', sans-serif;
        font-size: 25px;
    }

    .title_step_pay h2 {
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
        color: #333333;
        margin-top: 12px;
    }

    .title_step_pay {
        margin-bottom: 30px;
        align-items: center;
        display: flex;
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
        padding: 15px 10px 15px 10px;
        word-break: normal;
    }

    .section_email {
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
        padding: 15px 10px 15px 10px;
        word-break: normal;
    }

    .section_telephone {
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
        padding: 15px 10px 15px 10px;
        word-break: normal;
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
        min-height: 120px;
    }

    .order_address {
        width: 100%;
        float: left;
        padding: 0.45em;
        box-sizing: border-box;
    }

    .order_address_1 {
        position: relative;
    }

    .address_order {
        outline: none;
        border: 1px solid #d9d9d9;
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
        padding-bottom: 50px;
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
        align-items: center;
        display: flex;
        border-radius: 50%;
        padding-right: 0.75em;
        white-space: nowrap;
    }

    .recept_store {
        font-weight: 430;
        color: #737373;
        margin-left: 15px;
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
        margin-left: 5px;
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
        margin-bottom: -30px;
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
        margin-left: 21px;
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
        outline: none;
        border: 1px solid #d9d9d9;
        font-size: 18px;
        padding: 15px 10px 15px 10px;
        box-shadow: 0 0 0 0.4px #d9d9d9;
        transition: all 0.2s ease-out;
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

    .add_coupon {
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
        margin-bottom: 20px;
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
        border-top: 1px solid #e7e7e7;
        margin-top: 30px;
    }

    .box_calculate{
        margin-top: 20px;
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

    .radio_transport {
        padding: 15px;
        margin-bottom: 40px;
        word-break: normal;
        display: table;
        box-sizing: border-box;
        width: 99%;
        zoom: 1;
        background-color: #fafafa;
        /* min-height: 70px; */
        color: #333333;
        border-radius: 6px;
        outline: none;
        box-shadow: 0 0 0 0.4px #d9d9d9;
        transition: all 0.2s ease-out;
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        border: 1px solid #d9d9d9;
        overflow: hidden;
    }

    .radio_title {
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        outline: none;
        color: #333333;
        border-radius: 6px;
        display: block;
        box-sizing: border-box;
        width: 100%;
        word-break: normal;
        background: white;
        padding: 20px 15px 20px 10px;
        display: flex;
        justify-content: space-between;
    }

    .radio_input {
        display: flex;
        border-radius: 50%;
        white-space: nowrap;
        align-items: center;
    }

    .title_radio {
        font-weight: 430;
        color: #737373;
        padding-left: 10px;
    }

    .title_money {
        font-weight: 430;
    }

    .title_method h2 {
        margin-bottom: 25px;
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
        color: #333333;
    }

    .input_radio {
        height: 15px;
        width: 30px;
        margin-left: 5px;
    }

    .main-img {
        margin-left: 10px;
        height: 60px;
        width: 50px;
    }

    .label_radio {
        font-weight: 430;
        color: #737373;
        margin-left: 15px;
        display: table-cell;
        width: 100%;
    }

    .recept_radio {
        height: 15px;
        width: 30px;
        margin-left: 5px;
    }

    .infor_transfer {
        line-height: 30px;
        border-top: 1px solid #d9d9d9;
        justify-content: center;
        padding: 20px;
        display: grid;
        text-align: center;
    }

    .order_success {
        left: -80px;
        position: relative;
    }

    .order_success i {
        font-size: 60px;
        color: #74C0FC;
    }

    .synthetic_order {
        left: -58px;
        line-height: 30px;
        display: grid;
        position: relative;
    }

    .synthetic_order span {
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
    }

    .infor_order h2 {
        margin-bottom: 10px;
        font-size: 25px;
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
        color: #333333;
    }

    .summary_order h3 {
        margin-bottom: 10px;
        font-size: 20px;
        font-family: 'Roboto', sans-serif;
        font-weight: 450;
        color: #333333;
        margin-top: 5px;
    }

    .summary_order h2 {
        margin-bottom: 10px;
        font-size: 20px;
        font-family: 'Roboto', sans-serif;
        font-weight: 450;
        color: #333333;
        margin-top: 15px;
    }

    .summary_order p {
        font-family: 'Roboto', sans-serif;
        line-height: 30px;
    }

    .continue_buy {
        text-decoration: none;
    }

    .support {
        align-items: center;
        display: flex;
    }

    .support i {
        align-items: center;
        display: flex;
    }

    .support span {
        font-weight: 500;
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        margin-left: 10px;
        display: flex;
        align-items: center;
    }

    .product_price {
        padding-left: 50px !important;
    }

    .code_freeship {
        margin-bottom: 15px;
        font-family: 'Roboto', sans-serif;
        display: flex;
        justify-content: space-between;
    }

    .code_freeship_1 {
        font-weight: 450;
        color: #717171;
        font-size: 18px;
        display: flex;
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

<?php
if (isset($_POST['tieptucmuahang'])) {
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

        // Truy vấn lấy id_khachhang từ bảng khachhang
        $sql_khachhang = "SELECT id_khachhang FROM khachhang WHERE id_user = ?";
        $stmt_khachhang = mysqli_prepare($con, $sql_khachhang);
        mysqli_stmt_bind_param($stmt_khachhang, "i", $id_user);
        mysqli_stmt_execute($stmt_khachhang);
        $result_khachhang = mysqli_stmt_get_result($stmt_khachhang);

        if ($row_khachhang = mysqli_fetch_assoc($result_khachhang)) {
            $id_khachhang = $row_khachhang['id_khachhang'];

            // Xóa session giảm giá sau khi hoàn tất đơn
            unset($_SESSION['magiamgia']);
            unset($_SESSION['totalPrice']);
            unset($_SESSION['shippingFee']);

            // Chuyển hướng đến trang đặt hàng thành công
            header("Location: index.php?quanly=giohang");
            exit();
        }
    }
}

?>

<?php
include('db/connect.php');

$id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : null;

// Lấy ID hóa đơn mới nhất của người dùng
$sql_latest_order = mysqli_query($con, "
    SELECT id_hoadon FROM hoadon 
    INNER JOIN khachhang ON hoadon.id_khachhang = khachhang.id_khachhang
    WHERE khachhang.id_user = '$id_user' 
    ORDER BY hoadon.id_hoadon DESC LIMIT 1
");

$row_order = mysqli_fetch_assoc($sql_latest_order);
$id_hoadon_moi_nhat = $row_order['id_hoadon'] ?? null;

if ($id_hoadon_moi_nhat) {
    // Lấy danh sách sản phẩm trong hóa đơn mới nhất
    $sql_chitietdonhang = mysqli_query($con, "
        SELECT sanpham.ten_sach, sanpham.img, loaisanpham.ten_loai_sach, 
               chitietdonhang.so_luong, chitietdonhang.don_gia, chitietdonhang.thanh_tien 
        FROM chitietdonhang
        INNER JOIN sanpham ON chitietdonhang.id_sanpham = sanpham.id_sanpham
        INNER JOIN loaisanpham ON sanpham.id_loai_spham = loaisanpham.id_loai_spham
        WHERE chitietdonhang.id_hoadon = '$id_hoadon_moi_nhat'
        ORDER BY chitietdonhang.id_chitiet DESC
    ") or die("Lỗi truy vấn: " . mysqli_error($con));
} else {
    $sql_chitietdonhang = false; // Không có đơn hàng nào để hiển thị
}


$total = 0; // Reset tổng tiền
?>

<?php
include('db/connect.php');

$id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : null;

// Lấy ID hóa đơn mới nhất của người dùng
$sql_latest_order = mysqli_query($con, "
    SELECT id_hoadon FROM hoadon 
    INNER JOIN khachhang ON hoadon.id_khachhang = khachhang.id_khachhang
    WHERE khachhang.id_user = '$id_user' 
    ORDER BY hoadon.id_hoadon DESC LIMIT 1
");

$row_order = mysqli_fetch_assoc($sql_latest_order);
$id_hoadon_moi_nhat = $row_order['id_hoadon'] ?? null;

if ($id_hoadon_moi_nhat) {
    // Lấy danh sách sản phẩm trong hóa đơn mới nhất
    $sql_hoadon = mysqli_query($con, "
    SELECT hoadon.*, tinhthanh.ten_tinhthanh, quanhuyen.ten_quanhuyen, wards.ten_phuongxa, chinhanh.diachi_cuthe, chinhanh.ten_chinhanh
    FROM hoadon
    LEFT JOIN chinhanh ON hoadon.id_chinhanh = chinhanh.id_chinhanh
    LEFT JOIN tinhthanh ON chinhanh.id_tinhthanh = tinhthanh.id_tinhthanh
    LEFT JOIN quanhuyen ON chinhanh.id_quanhuyen = quanhuyen.id_quanhuyen
    LEFT JOIN wards ON chinhanh.id_phuongxa = wards.id_phuongxa 
    WHERE hoadon.id_hoadon = '$id_hoadon_moi_nhat'
") or die("Lỗi truy vấn: " . mysqli_error($con));
} else {
    $sql_hoadon = false; // Không có đơn hàng nào để hiển thị
}


$total = 0; // Reset tổng tiền
?>

</head>

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
                    <div class="step">
                        <?php
                        while ($row_sanpham = mysqli_fetch_array($sql_hoadon)) {
                        ?>
                            <div class="step_section">
                                <div class="section">
                                    <div class="title_step_pay">
                                        <div class="order_success">
                                            <i class="fa-regular fa-circle-check" style="color: #74C0FC;"></i>
                                        </div>
                                        <div class="synthetic_order">
                                            <h2>Đặt hàng thành công</h2>
                                            <span>Mã đơn hàng #<?php echo $row_sanpham["ma_hoadon"] ?></span>
                                            <span>Cảm ơn bạn đã mua hàng!</span>
                                        </div>
                                    </div>
                                    <div class="option_transport">
                                        <div class="radio_transport">
                                            <div class="infor_order">
                                                <h2>Thông tin đơn hàng</h2>
                                            </div>
                                            <div class="summary_order">
                                                <h3>Thông tin giao hàng</h3>
                                                <p>Họ và Tên: <?php echo $row_sanpham["ho_va_ten"] ?></p>
                                                <p>Số điện thoại: <?php echo $row_sanpham["so_dien_thoai"] ?></p>
                                                <p>Email: <?php echo $row_sanpham["email"] ?></p>

                                                <?php if ($row_sanpham["phuongthucnhan"] === "Giao hàng tận nơi") { ?>
                                                    <p>Địa chỉ: <?php echo $row_sanpham["dia_chi"] ?></p>
                                                    <p>Tỉnh/Thành: <?php echo $row_sanpham["tinh_thanh"] ?></p>
                                                    <p>Quận/Huyện: <?php echo $row_sanpham["quan_huyen"] ?></p>
                                                    <p>Phường/Xã: <?php echo $row_sanpham["phuong_xa"] ?></p>
                                                <?php } ?>

                                                <h2>Phương thức nhận hàng</h2>
                                                <p><?php echo $row_sanpham["phuongthucnhan"] ?></p>

                                                <?php if ($row_sanpham["phuongthucnhan"] === "Nhận tại cửa hàng") { ?>
                                                    <p>Chi nhánh: <?php echo $row_sanpham["ten_chinhanh"] ?></p>
                                                    <p>Địa chỉ: <?php echo $row_sanpham["diachi_cuthe"] ?></p>
                                                    <p>Tỉnh/Thành: <?php echo $row_sanpham["ten_tinhthanh"] ?></p>
                                                    <p>Quận/Huyện: <?php echo $row_sanpham["ten_quanhuyen"] ?></p>
                                                    <p>Phường/Xã: <?php echo $row_sanpham["ten_phuongxa"] ?></p>
                                                <?php } ?>

                                                <h2>Phương thức thanh toán</h2>
                                                <p><?php echo $row_sanpham["phuongthucthanhtoan"] ?></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <form method="POST">
                            <div class="step_footer">
                                <button class="btn_continue" name="tieptucmuahang">
                                    <span class="continue_pay">Tiếp tục mua hàng</span>
                                </button>
                                <p class="support">
                                    <i class="fa-solid fa-circle-question" style="color: #74C0FC;"></i>
                                    <span> Cần hỗ trợ?
                                        <a class="return_cart" href="#">Liên hệ chúng tôi</a>
                                    </span>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
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
                                            <th scope="col"><span class="visual_hidden">Hình ảnh</span></th>
                                            <th scope="col"><span class="visual_hidden">Mô tả</span></th>
                                            <th scope="col"><span class="visual_hidden">Số lượng</span></th>
                                            <th scope="col"><span class="visual_hidden">Giá</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row_sanpham = mysqli_fetch_array($sql_chitietdonhang)) {
                                            $don_gia = intval(str_replace('.', '', $row_sanpham['don_gia']));
                                            $so_luong = intval($row_sanpham["so_luong"]);
                                            $thanh_tien = intval(str_replace('.', '', $row_sanpham['thanh_tien']));

                                            $total += $thanh_tien;
                                        ?>
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
                                                    <span class="summary_price"><?php echo number_format($thanh_tien, 0, ',', '.') . 'đ'; ?></span>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                            <?php
                            $total = number_format($total, 0, ',', '.');
                            ?>
                            <div class="order_summary_cart_4">
                                <div class="box_calculate">
                                    <div class="calculate">
                                        <span class="title_calculate">Tạm tính</span>
                                        <span class="money_order"><?php echo $total . 'đ'; ?></span>
                                    </div>
                                    <div class="code_freeship" id="discountBox" style="display: <?php echo isset($_SESSION['magiamgia']) ? 'flex' : 'none'; ?>;">
                                        <div class="code_freeship_1">
                                            <span class="freeship_code">Mã giảm giá </span>
                                            <p class="tag_icon">
                                                <i class="fa-solid fa-tag fa-rotate-90" style="color: #3fa2ee;"></i>
                                                <span><?php echo $_SESSION['magiamgia'] ?? ''; ?></span>
                                            </p>
                                        </div>
                                        <span class="money_freeship" id="discountAmount">50.000đ</span>
                                    </div>
                                    <div class="shipping">
                                        <span class="shipping_fee">Phí vận chuyển</span>
                                        <span class="money_shipping" id="shippingFee">
                                            <?php
                                            // Kiểm tra nếu phí vận chuyển đã được lưu trong session
                                            if (isset($_SESSION['shippingFee'])) {
                                                echo number_format($_SESSION['shippingFee'], 0, ',', '.') . 'đ';
                                            } else {
                                                echo '-';
                                            }
                                            ?>
                                        </span>
                                    </div>

                                    <div class="total_money">
                                        <span class="money_cart">Tổng cộng</span>
                                        <span class="money_total" id="totalPrice">
                                            <?php
                                            $totalPrice = isset($_SESSION['totalPrice']) ? number_format($_SESSION['totalPrice'], 0, ',', '.') . 'đ' : $total . 'đ'; // Giá trị ban đầu
                                            // Thêm phí vận chuyển nếu có
                                            echo $totalPrice;
                                            ?>
                                        </span>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

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

        let originalTotal = parseInt(totalPrice.textContent.replace(/\D/g, "")); // Lấy số từ tổng tiền
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
                totalPrice.textContent = newTotal.toLocaleString("vi-VN") + "đ"; // Cập nhật tổng tiền

                // Vô hiệu hóa nút và đổi màu
                btnUseDiscount.disabled = true;
                btnUseDiscount.style.backgroundColor = "#ccc";
                btnUseDiscount.style.cursor = "not-allowed";

                // Gửi mã giảm giá và tổng tiền về máy chủ PHP để lưu vào session
                fetch("index.php?quanly=phuongthucthanhtoan", {
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