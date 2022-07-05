<?php
$koneksi = mysqli_connect("localhost", "root", "", "crud_sederhana");
if(!$koneksi){
    die(mysqli_connect_error());
}
?>