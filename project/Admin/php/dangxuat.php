<?php
session_start(); // Bắt đầu session để có thể hủy
session_destroy(); // Hủy tất cả session
header("Location: ../../html/index.php?quanly=taikhoan");
exit(); // Kết thúc script
?>