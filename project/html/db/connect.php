<?php
$servername = "127.0.0.1";
$database = "bookstore";
$username = "root";
$password = "";
// Create connection
$con = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $users = $con->query("SELECT * FROM user WHERE username = '$username'")->fetch_array();
}
