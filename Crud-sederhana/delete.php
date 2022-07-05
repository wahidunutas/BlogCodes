<?php 
include "koneksi.php";

$id = $_GET['id'];
$koneksi->query("DELETE FROM data WHERE id='$id'");
header('location:index.php');

?>