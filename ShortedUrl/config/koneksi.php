<?php
$koneksi = mysqli_connect("localhost", "root", "", "short_url");

if(!$koneksi){
    die(mysqli_connect_error());
}
?>