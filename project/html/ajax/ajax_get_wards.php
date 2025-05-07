<?php
require 'db/connect.php';

$district_id = $_GET['district_id'];

$sql = "SELECT * FROM wards WHERE id_quanhuyen = $district_id";
$result = mysqli_query($con, $sql);

$data = [
    ['id' => '', 'name' => 'Chọn phường / xã']
];

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = [
        'id' => $row['id_phuongxa'],
        'name' => $row['ten_phuongxa']
    ];
}
echo json_encode($data);
?>
