<?php
$koneksi = mysqli_connect("localhost", "root", "", "previewpdf");

$id = $_GET['id'];
$sql = $koneksi->query("SELECT * FROM data WHERE id='$id'");
$result = $sql->fetch_assoc();
?>

<title>Preview PDF</title>

<embed src="file_pdf/<?= $result['files'];?>" type="application/pdf" width="100%" height="100%">