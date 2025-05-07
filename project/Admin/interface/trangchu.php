<?php
session_start();
include('../../html/db/connect.php');

// Lấy username từ session
$username = $_SESSION['username'] ?? null;

if (!$username) {
    header('Location: ../html/index.php?quanly=taikhoan');
    exit();
}

// Truy vấn role từ database
$result = $con->query("SELECT role FROM user WHERE username = '$username'");
$user = $result->fetch_array();

if (!$user || !in_array($user['role'], ['admin', 'nhanvien'])) {
    header('Location: ../html/index.php?quanly=taikhoan');
    exit();
}

// Gán role vào session
$_SESSION['role'] = $user['role'];

?>

<style>
    .topbar {
        width: 100% !important;
        height: 60px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 10px;
    }

    .user_name {
        padding-right: 10px;
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        white-space: nowrap;
        font-weight: 500;
    }

    .user {
        margin-right: 65px;
        justify-content: center;
        overflow: unset !important;
        align-items: center;
        display: flex;
        position: unset !important;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        overflow: hidden;
        cursor: pointer;
        border-radius: unset !important;
    }

    .user img {
        position: unset !important;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .navigation ul li a .icon {
        position: relative;
        display: block;
        min-width: 60px;
        height: 60px;
        line-height: 70px;
        text-align: center;
        top: 13px;
    }
</style>

<style></style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/doan.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Đồ án</title>
</head>

<body>
    <div class="container">
        <?php
        include("../interface/navigation.php")
        ?>

        <!--main-->
        <div class="main">

            <?php
            include("../interface/topbar.php")
            ?>

            <!--cards-->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="number">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="number">80</div>
                        <div class="cardName">Sales</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="number">284</div>
                        <div class="cardName">Comments</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="number">43,450,000 VNĐ</div>
                        <div class="cardName">Earning</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>



            <div class="details">
                <!--order details list-->
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Top Purchases</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Họ và Tên</td>
                                <td>Số điện thoại</td>
                                <td>Tổng cộng</td>
                                <td>Trạng thái</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nguyễn Ðăng Minh</td>
                                <td>0969.35.35.35</td>
                                <td>3.934.000đ</td>
                                <td><span class="status delivered">Đã xử lý</span></td>
                            </tr>
                            <tr>
                                <td>Trần Quang Ðạt</td>
                                <td>09.78.48.58.68</td>
                                <td>2.392.000đ</td>
                                <td><span class="status Pending">Đang xử lý</span></td>
                            </tr>
                            <tr>
                                <td>Trần Công Dũng</td>
                                <td>0909.788.799</td>
                                <td>1.343.000đ</td>
                                <td><span class="status Return">Chưa xử lý</span></td>
                            </tr>
                            <tr>
                                <td>Hoàng Quang Hữu</td>
                                <td>0911.968.968</td>
                                <td>923.000đ</td>
                                <td><span class="status delivered">Đã xử lý</span></td>
                            </tr>
                            <tr>
                                <td>Đỗ Ngân Thanh</td>
                                <td>09.0123.2345</td>
                                <td>845.000đ</td>
                                <td><span class="status delivered">Đã xử lý</span></td>
                            </tr>
                            <tr>
                                <td>Phan Quang Lân</td>
                                <td>093.781.3386</td>
                                <td>663.000đ</td>
                                <td><span class="status Pending">Đang xử lý</span></td>
                            </tr>
                            <tr>
                                <td>Đỗ Thanh Lan</td>
                                <td>037.127.2342</td>
                                <td>648.000đ</td>
                                <td><span class="status Return">Chưa xử lý</span></td>
                            </tr>
                            <tr>
                                <td>Đỗ Bích Quyên</td>
                                <td>090.1738.2857</td>
                                <td>1.000.000đ</td>
                                <td><span class="status delivered">Đã xử lý</span></td>
                            </tr>
                            <tr>
                                <td>Phạm Thảo Vân</td>
                                <td>030.1648.2847</td>
                                <td>1.000.000đ</td>
                                <td><span class="status Pending">Đang xử lý</span></td>
                            </tr>
                            <tr>
                                <td>Phan Minh Anh</td>
                                <td>091.352.5342</td>
                                <td>1.000.000đ</td>
                                <td><span class="status Pending">Đang xử lý</span></td>
                            </tr>
                            <tr>
                                <td>Đặng Mỹ Ngọc</td>
                                <td>031.6433.4574</td>
                                <td>1.000.000đ</td>
                                <td><span class="status delivered">Đã xử lý</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--New Customers-->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                    </div>
                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../img/img1.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Tiến<br><span>Việt Nam</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../img/boy.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Hoàng Anh<br><span>Việt Nam</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../img/girl.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Ánh Tuyết<br><span>Việt Nam</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../img/girl.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Lan Phương<br><span>Việt Nam</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../img/boy.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Hoàng Quý<br><span>Việt Nam</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../img/girl.png"></div>
                            </td>
                            <td>
                                <h4>Ngọc Linh<br><span>Việt Nam</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../img/CongHuy.PNG" alt=""></div>
                            </td>
                            <td>
                                <h4>Công Huy<br><span>Việt Nam</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../img/Duyanh.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Duy Anh<br><span>Việt Nam</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../img/boy.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Châu Tinh Trì<br><span>Trung Quốc</span></h4>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>

        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        //Menu
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');

        toggle.onclick = function() {
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }



        //add hovered class in selected list item
        let list = document.querySelectorAll('.navigation li');

        function activeLink() {
            list.forEach((item) =>
                item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) =>
            item.addEventListener('mouseover', activeLink));
    </script>


</body>

</html>