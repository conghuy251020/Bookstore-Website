<?php
include('../../html/db/connect.php');

$action = $_POST['action'];

if ($action === 'edit') {
    $id = mysqli_real_escape_string($con, $_POST['id_sanpham']);
    $ten = mysqli_real_escape_string($con, $_POST['ten_sach']);
    $id_tacgia = mysqli_real_escape_string($con, $_POST['id_tac_gia']);
    $id_nxb = mysqli_real_escape_string($con, $_POST['id_nha_xuat_ban']);
    $id_theloai = mysqli_real_escape_string($con, $_POST['id_loai_sach']);
    $gia = mysqli_real_escape_string($con, $_POST['gia']);
    $gia_km = mysqli_real_escape_string($con, $_POST['gia_khuyen_mai']);
    $id_khoanggia = mysqli_real_escape_string($con, $_POST['id_khoanggia']);
    $phan_tram_km = 10; // Mặc định 10%

    $update_sanpham = "UPDATE sanpham 
    SET ten_sach='$ten', id_nhaxuatban='$id_nxb', id_tacgia='$id_tacgia', id_loai_spham='$id_theloai'
    WHERE id_sanpham='$id'";
    if (!mysqli_query($con, $update_sanpham)) {
        header("Location: ../../Admin/interface/sanpham.php?status=error");
        echo "❌ Lỗi khi cập nhật sản phẩm: " . mysqli_error($con);
        exit;
    }

    // Cập nhật giá
    if (!mysqli_query($con, "UPDATE giatien SET gia_khuyen_mai='$gia_km', gia='$gia', id_khoanggia='$id_khoanggia', phan_tram_khuyen_mai='$phan_tram_km' WHERE id_sanpham='$id'")) {
        header("Location: ../../Admin/interface/sanpham.php?status=error");
        echo "❌ Lỗi khi cập nhật giá: " . mysqli_error($con);
        exit;
    }

    // Nếu có ảnh mới thì xử lý upload
    if (isset($_FILES['img']) && $_FILES['img']['name'] != '') {
        $img_name = basename($_FILES['img']['name']);
        $img_tmp = $_FILES['img']['tmp_name'];
        $img_ext = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));
        $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($img_ext, $allowed_ext)) {
            $new_img_name = uniqid('img_', true) . '.' . $img_ext;
            $img_path = "../../img-index/" . $new_img_name;

            if (move_uploaded_file($img_tmp, $img_path)) {
                mysqli_query($con, "UPDATE sanpham SET img='$new_img_name' WHERE id_sanpham='$id'");
            } else {
                header("Location: ../../Admin/interface/sanpham.php?status=error");
                echo "❌ Lỗi khi tải ảnh lên.";
                exit;
            }
        } else {
            header("Location: ../../Admin/interface/sanpham.php?status=error");
            echo "❌ Định dạng ảnh không hợp lệ. Chỉ chấp nhận: jpg, jpeg, png, gif.";
            exit;
        }
    }

    header("Location: ../../Admin/interface/sanpham.php?status=success");
    exit;
}

?>

<?php
include('../../html/db/connect.php');

$action = $_POST['action'];

if ($action === 'add') {
    $ten = mysqli_real_escape_string($con, $_POST['ten_sach']);
    $id_tacgia = $_POST['id_tac_gia'];
    $id_nxb = $_POST['id_nha_xuat_ban'];
    $id_theloai = $_POST['id_loai_sach'];
    $gia = $_POST['gia'];
    $gia_km = $_POST['gia_khuyen_mai'];
    $id_khoanggia = $_POST['id_khoanggia'];
    $phan_tram_km = 10; // Mặc định 10%


    // Xử lý ảnh
    $img = $_FILES['img'];
    $img_name = basename($img['name']);
    $img_tmp = $img['tmp_name'];
    $img_ext = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));
    $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];

    if (!in_array($img_ext, $allowed_ext)) {
        header("Location: ../../Admin/interface/sanpham.php?status=error&msg=invalid_image");
        exit;
    }

    $new_img_name = uniqid('img_', true) . '.' . $img_ext;
    $img_path = "../../img-index/" . $new_img_name;

    if (move_uploaded_file($img_tmp, $img_path)) {
        // Thêm sản phẩm
        $insert_product = "INSERT INTO sanpham (ten_sach, id_nhaxuatban, id_tacgia, id_loai_spham, img)
                           VALUES ('$ten', '$id_nxb', '$id_tacgia', '$id_theloai', '$new_img_name')";
        if (mysqli_query($con, $insert_product)) {
            $id_sanpham = mysqli_insert_id($con);
            mysqli_query($con, "INSERT INTO giatien (id_sanpham, gia, gia_khuyen_mai, id_khoanggia, phan_tram_khuyen_mai) 
                    VALUES ('$id_sanpham', '$gia', '$gia_km', '$id_khoanggia', '$phan_tram_km')");
            header("Location: ../../Admin/interface/sanpham.php?status=success");
            exit;
        }
    }

    header("Location: ../../Admin/interface/sanpham.php?status=error");
}
?>


