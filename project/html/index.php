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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/productinfo.css">
    <title>Shop Book</title>
</head>

<!-- Liên kết database -->
<?php
include("db/connect.php");
?>

<body>
<?php

// Lấy giá trị từ URL
if (isset($_GET['quanly'])) {
    $tam = $_GET['quanly'];
} else {
    $tam = '';
}

// Chỉ include topbar và footer nếu không phải trang thanh toán hoặc phương thức thanh toán
if ($tam !== "dangxuat" && $tam !== "taikhoan" && $tam !== "thanhtoan" && $tam !== "phuongthucthanhtoan" && $tam !== "dathang") {
    include("./php/topbar.php");
}

// Điều hướng trang dựa vào giá trị của `quanly`
if ($tam == "timkiem") {
    include("./php/danhmuctonghop.php");
    include("./php/timkiem.php");
}

elseif ($tam == "taikhoan") {
    include("formlogin.php");
}

elseif ($tam == "dangxuat") {
    include("./php/dangxuat.php");
}

elseif ($tam == "tonghopsach") {
    include("./php/danhmuctonghop.php");
    include("./php/tonghopsach.php");
}

elseif ($tam == "gate_classify") {
    include("./php/danhmuctonghop.php");
    include("./php/danhsachsanpham.php");
}

elseif ($tam == "tonghop") {
    include("./php/danhmuctonghop.php");
    include("./php/danhsachtonghop.php");
}

elseif ($tam == "chitietsp" && isset($_GET['id_sp'])) {
    include("./php/thongtinsanpham.php");
}

elseif ($tam == "giohang") {
    include("./php/giohang.php");
}

elseif ($tam == "thanhtoan") {
    include("./php/thanhtoan.php"); // Không include topbar và footer ở đây
}

elseif ($tam == "phuongthucthanhtoan") {
    include("./php/phuongthucthanhtoan.php"); // Không include topbar và footer ở đây
} 

elseif ($tam == "dathang") {
    include("./php/dathang.php"); // Không include topbar và footer ở đây
}

elseif ($tam == "lichsudonhang") {
    include("./php/lichsudonhang.php"); // Không include topbar và footer ở đây
} 

else {
    include("./php/banner.php");
    include("./php/home.php");
}

// Chỉ include footer nếu không phải trang thanh toán hoặc phương thức thanh toán
if ($tam !== "dangxuat" && $tam !== "taikhoan" && $tam !== "thanhtoan" && $tam !== "phuongthucthanhtoan" && $tam !== "dathang") {
    include("./php/footer.php");
}

?>




    <!-- // elseif ($tam == "theloaisach" && isset($_GET['id'])) {
        //     include("./php/danhmuctonghop.php");
        //     include("./php/danhsachtheloaisach.php");
        // }
        elseif ($tam == "tacgia" && isset($_GET['id'])) {
            include("./php/danhmuctonghop.php");
            include("./php/danhsachtacgia.php");
        }
        // elseif ($tam == "giatien" && isset($_GET['id'])) {
        //     include("./php/danhmuctonghop.php");
        //     include("./php/danhsachgia.php");
        // } -->