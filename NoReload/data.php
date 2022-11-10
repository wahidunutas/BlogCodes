<?php
$koneksi = mysqli_connect("localhost", "root", "", "data_users");

$sql = $koneksi->query("SELECT * FROM tb_users");
while($row = mysqli_fetch_array($sql)){
    $data[] = $row;
}
echo json_encode(array("result" => $data));
