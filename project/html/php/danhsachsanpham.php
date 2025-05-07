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
        font-weight: 700 !important;
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
        text-align: left;
        margin-left: 71px;
        text-transform: uppercase;
        font-size: 16px;
        margin-right: 70px;
        font-weight: 50px;
        padding-top: 7px;
        color: #0369a1;
        font-family: 'Roboto', sans-serif;
        width: 220px;
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
</style>

<body>
    <?php
    // Lấy id_loai_spham từ URL, đảm bảo an toàn khi lấy dữ liệu từ GET
    $id_loai_spham = isset($_GET['id_loai_spham']) ? intval($_GET['id_loai_spham']) : 0;

    // Lấy danh mục sản phẩm
    $sql_category = mysqli_query($con, "SELECT * FROM loaisanpham");
    ?>

    <!-- Hiển thị danh mục sản phẩm -->
    <div class="dropdown-content">
        <?php while ($row_category = mysqli_fetch_array($sql_category)) { ?>
            <a href="?quanly=gate_classify&id_loai_spham=<?php echo $row_category['id_loai_spham']; ?>">
                <?php echo $row_category["ten_loai_sach"]; ?>
            </a>
        <?php } ?>
    </div>

    <?php
    // Kiểm tra nếu có id_loai_spham được chọn thì lấy sản phẩm tương ứng
    if ($id_loai_spham > 0) {
        $sql_cate = mysqli_query($con, "SELECT sanpham.*, nhaxuatban.ten_nha_xuat_ban, giatien.gia, giatien.gia_khuyen_mai, giatien.phan_tram_khuyen_mai 
                                    FROM sanpham 
                                    INNER JOIN loaisanpham ON loaisanpham.id_loai_spham = sanpham.id_loai_spham 
                                    INNER JOIN nhaxuatban ON sanpham.id_nhaxuatban = nhaxuatban.id_nhaxuatban
                                    INNER JOIN giatien ON sanpham.id_sanpham = giatien.id_sanpham 
                                    WHERE sanpham.trangthai = 1 AND sanpham.id_loai_spham = $id_loai_spham");
    }
    ?>

    <div class="home-product">
        <div class="grid__row">
            <?php
            if ($id_loai_spham > 0) {
                while ($row_sanpham = mysqli_fetch_array($sql_cate)) {
            ?>
                    <div class="grid__column-2-2">
                        <div class="home-product-item">
                            <a href="?quanly=chitietsp&id_sp=<?php echo $row_sanpham['id_sanpham']; ?>">
                                <img class="image-2" src="../img-index/<?php echo $row_sanpham['img']; ?>" alt="">
                            </a>
                            <div class="text-product">
                                <h1 class="text-product-1"><?php echo $row_sanpham["ten_nha_xuat_ban"]; ?> </h1>
                                <p class="text-product-2">
                                    <a href="#"><?php echo $row_sanpham["ten_sach"]; ?> </a>
                                </p>
                            </div>
                            <div class="price-product">
                                <p class="price-product-1"><?php echo $row_sanpham["gia_khuyen_mai"] . 'đ'; ?></p>
                                <p class="price-product-2"><?php echo $row_sanpham["gia"] . 'đ'; ?> </p>
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
            } else {
                echo "<p>Vui lòng chọn danh mục sản phẩm.</p>";
            }
            ?>
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