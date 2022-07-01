<?php
session_start();
include "config/koneksi.php";
include "assets/vendor/phpqrcode/qrlib.php";
include "config/function.php";


date_default_timezone_set('asia/jakarta');
// error_reporting(0);
$appRootPath = $_SERVER['HTTP_REFERER'];
// *Xt5IRF!{i&}}4[x
$p = explode('/', $_REQUEST['page']);
$page = $p[0];

function base_url() {
	echo str_replace("index.php", "" , $_SERVER['PHP_SELF']);
}

include "template/head.php";
include "template/navbar.php";
include "pages/modal.php";


$sql = $koneksi->query("SELECT url_short, url_asli FROM data_url WHERE url_short='$page'");
$data = mysqli_fetch_array($sql);
?>
<div class="main-content">
    <?php
        if($page == ""){
            include "pages/home.php";
            
        }if($page == $data["url_short"]){
            header("location: $data[url_asli]");
            $koneksi->query("UPDATE data_url SET hit=hit+1 WHERE url_short='$data[url_short]'");
        }else{
            include "pages/404.php";
        }
    ?>
</div>
<?php include "template/footer.php";?>