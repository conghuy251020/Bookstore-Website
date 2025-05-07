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

    .radio_transport {
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

    .order_succe {
        text-decoration: none;
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

    .viewcoupon {
        cursor: pointer;
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        color: #338dbc;
        font-weight: 500;
        margin-left: 10px;
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

    .infor_transfer {
        display: none;
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
include('db/connect.php');

$id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : null;

if ($id_user) {
    // Lấy dữ liệu giỏ hàng
    $sql_lay_giohang = mysqli_query($con, "SELECT giohang.*, loaisanpham.ten_loai_sach FROM giohang
INNER JOIN sanpham ON giohang.id_sanpham = sanpham.id_sanpham
INNER JOIN loaisanpham ON sanpham.id_loai_spham = loaisanpham.id_loai_spham
WHERE giohang.id_user = '$id_user'
ORDER BY id_giohang DESC ");
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

<?php
include 'db/connect.php'; // Kết nối cơ sở dữ liệu

if (isset($_POST['hoantatdonhang'])) {
    if (!isset($_POST['payment'])) {
        die("Vui lòng chọn phương thức thanh toán.");
    }

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

            // Kiểm tra hóa đơn "Đang xử lí"
            $sql_check_invoice = "SELECT * FROM hoadon WHERE id_khachhang = ? AND trang_thai = 'Đang xử lí' LIMIT 1";
            $stmt_check_invoice = mysqli_prepare($con, $sql_check_invoice);
            mysqli_stmt_bind_param($stmt_check_invoice, "i", $id_khachhang);
            mysqli_stmt_execute($stmt_check_invoice);
            $result_check_invoice = mysqli_stmt_get_result($stmt_check_invoice);
            $existing_invoice = mysqli_fetch_assoc($result_check_invoice);

            $payment = $_POST['payment'];

            // Tính tổng tiền: tạm tính + phí vận chuyển - mã giảm giá (nếu có)
            $total = $_SESSION['total'] ?? 0; // Tạm tính
            $shippingFee = $_SESSION['shippingFee'] ?? 0; // Phí vận chuyển
            $discount = $_SESSION['totalPrice'] ?? $total; // Giá trị đã áp dụng mã giảm giá (nếu không có thì giữ nguyên)

            $tong_tien = max(0, $discount + $shippingFee); // Tổng tiền, không âm

            if ($existing_invoice) {
                // Cập nhật trạng thái đơn hàng thành "Chờ xác nhận"
                $sql_update = "UPDATE hoadon SET phuongthucthanhtoan = ?, tong_tien = ?, trang_thai = 'Chờ xác nhận' WHERE id_hoadon = ?";
                $stmt_update = mysqli_prepare($con, $sql_update);
                mysqli_stmt_bind_param($stmt_update, "sdi", $payment, $tong_tien, $existing_invoice['id_hoadon']);
                mysqli_stmt_execute($stmt_update);
            } else {
                // Tạo hóa đơn mới và đặt trạng thái là "Chờ xác nhận"
                $sql_insert = "INSERT INTO hoadon (id_khachhang, phuongthucthanhtoan, tong_tien, trang_thai) VALUES (?, ?, ?, 'Chờ xác nhận')";
                $stmt_insert = mysqli_prepare($con, $sql_insert);
                mysqli_stmt_bind_param($stmt_insert, "isd", $id_khachhang, $payment, $tong_tien);
                if (!mysqli_stmt_execute($stmt_insert)) {
                    die("Lỗi MySQL: " . mysqli_error($con));
                }
            }

            // Xóa sản phẩm trong giỏ hàng sau khi hoàn tất đơn
            $sql_delete_cart = "DELETE FROM giohang WHERE id_user = ?";
            $stmt_delete_cart = mysqli_prepare($con, $sql_delete_cart);
            mysqli_stmt_bind_param($stmt_delete_cart, "i", $id_user);
            mysqli_stmt_execute($stmt_delete_cart);

            // Xóa session giảm giá sau khi hoàn tất đơn
            // unset($_SESSION['magiamgia']);
            // unset($_SESSION['totalPrice']);

            // Chuyển hướng đến trang đặt hàng thành công
            header("Location: index.php?quanly=dathang");
            exit();
        }
    }
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
                    <div class="step">
                        <form action="" method="POST">
                            <div class="step_section">
                                <div class="section">
                                    <div class="title_step_pay">
                                        <h2>Phương thức vận chuyển</h2>
                                    </div>
                                    <div class="option_transport">
                                        <div class="radio_transport">
                                            <label class="radio_title">
                                                <div class="radio_input">
                                                    <input type="radio" class="input_radio" id="shippingFeeRadio" data-fee="50000">
                                                    <span class="title_radio">Phí vận chuyển cho đơn hàng</span>
                                                </div>
                                                <span class="title_money">50.000đ</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="title_method">
                                        <h2>Phương thức thanh toán</h2>
                                    </div>
                                    <div class="section_content">
                                        <div class="address">
                                            <div class="frame_address">
                                                <div class="radio_delivery">
                                                    <label class="radio_label">
                                                        <div class="radio_input">
                                                            <input type="radio" class="input_radio" name="payment" value="Thanh toán khi giao hàng (COD)" id="paymentDirec">
                                                            <img class="main-img" src="https://hstatic.net/0/0/global/design/seller/image/payment/cod.svg?v=6">
                                                            <span class="label_radio">Thanh toán khi giao hàng (COD)</span>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="radio_store">
                                                    <label class="radio_store_1">
                                                        <div class="radio_recept_store">
                                                            <input type="radio" class="recept_radio" name="payment" value="Chuyển khoản qua ngân hàng" id="transferPay">
                                                            <img class="main-img" src="https://hstatic.net/0/0/global/design/seller/image/payment/other.svg?v=6">
                                                            <span class="recept_store">Chuyển khoản qua ngân hàng</span>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="infor_transfer" id="transferInfo">
                                                    <span>Số tài khoản: BookStore</span>
                                                    <span>Tên ngân hàng: Vietinbank</span>
                                                    <span>Tên chủ tài khoản: NGUYEN CONG HUY</span>
                                                    <span>Email: conghuy251020@gmail.com</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step_footer">
                                <button class="btn_continue" name="hoantatdonhang">
                                    <span class="continue_pay">Hoàn tất đơn hàng</span>
                                </button>
                                <a class="return_cart" href="?quanly=giohang">Giỏ hàng</a>
                            </div>
                        </form>
                    </div>
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
                                    $total = 0;
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
                                                    <span class="summary_price"><?php echo $subtotal . 'đ' ?></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php }
                                    $total = number_format($total, 0, ',', '.');
                                    $_SESSION['total'] = str_replace('.', '', $total); // Loại bỏ dấu chấm để tránh lỗi số
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
    document.addEventListener("DOMContentLoaded", function() {
        let transferInfo = document.getElementById("transferInfo");

        // Lấy tất cả các radio có name="delivery"
        let radioButtons = document.querySelectorAll('input[name="payment"]');

        // Bắt sự kiện khi radio thay đổi
        radioButtons.forEach(radio => {
            radio.addEventListener("change", function() {
                if (this.id === "paymentDirec" && this.checked) {
                    transferInfo.style.display = "none";
                }

                if (this.id === "transferPay" && this.checked) {
                    transferInfo.style.display = "grid"; // Hiển thị phần nhập địa chỉ
                } else {
                    transferInfo.style.display = "none"; // Ẩn khi chọn radio khác
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
        let discountValue = 50000; // Giá trị giảm giá

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
                        location.reload();
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