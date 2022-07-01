<?php
// include "koneksi.php";
if(isset($_POST['submit'])){
//     $tkn = $_POST['tokenRand'];
    $date = date('Y-m-d');
    $url = $_POST['url'];

    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $rand_alf =  substr(str_shuffle($str), 0, 5);
    $tempdir = "assets/qr/";

    // $char = base_url();
    $sUrl = sprintf($rand_alf);

    $file_names = uniqid();
    $file_names .= '.';
    $file_names .= substr(str_shuffle($str), 0 , 9);
    $namafile = $file_names.'.png';
    $quality ="H"; // \L (Low), M(Medium), Q(Good), H(High)
    $ukuran =5; // 1 adalah yang terkecil, 10 paling besar
    $padding =1;

    $qr = QRCode::png ($url, $tempdir.$namafile, $quality, $ukuran, $padding); //membuat qr code 

    $koneksi->query("INSERT INTO data_url(id, url_asli, url_short, hit, qrcode, created_at)VALUES(NULL, '$url', '$sUrl', 0, '$namafile', NOW())");

    $qryModal = $koneksi->query("SELECT * FROM data_url WHERE url_short='$sUrl'");
    $result = $qryModal->fetch_assoc();
}