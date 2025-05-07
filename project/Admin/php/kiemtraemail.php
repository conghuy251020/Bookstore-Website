<?php
include('../../html/db/connect.php');

if (isset($_GET['email'])) {
    $email = mysqli_real_escape_string($con, $_GET['email']);
    $result = $con->query("SELECT * FROM user WHERE email='$email'");
    if ($result->num_rows > 0) {
        echo "Email đã tồn tại!";
    } else {
        echo "OK";
    }
    exit;
}

if (isset($_GET['username'])) {
    $username = mysqli_real_escape_string($con, $_GET['username']);
    $query = $con->query("SELECT * FROM user WHERE username = '$username'");
    if ($query->num_rows > 0) {
        echo "Họ tên đã tồn tại!";
    } else {
        echo "OK";
    }
    exit;
}
