<?php
require 'db/connect.php';

$province_id = $_GET['id_tinhthanh'];

$sql = "SELECT * FROM quanhuyen WHERE id_tinhthanh = $province_id";
$result = mysqli_query($con, $sql);

$data = [
    ['id' => '', 'name' => 'Chọn quận / huyện']
];

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = [
        'id' => $row['id_quanhuyen'],
        'name' => $row['ten_quanhuyen']
    ];
}
echo json_encode($data);
?>
