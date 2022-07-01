<?php
if(isset($_POST['submit'])){?>
<div class="card card-short">
    <div class="card-body">
        <b>Long Url :</b> <?= $_POST['url'];?>
        <hr>
        <div class="output">
            <b>Short Url :</b> <a href="<?= base_url();?><?= $result['url_short'];?>" target="_BLANK" class="otpt" id="urlCopy"><?= base_url();?><?= $result['url_short'];?></a>

            <a href="#" class="btn-icon"
                title="QR Code."
                id="tooltipQr"
                data-bs-toggle="modal" data-bs-target="#QrCode<?= $result['id'];?>">
                <i class="fa-solid fa-qrcode"></i><!-- copy button-->
            </a>
            
            <a href="#" class="btn-icon" data-bs-toggle="tooltip" 
                title="Share."
                id="tooltipShare">
                <i class="fa-solid fa-share"></i><!-- share button-->
            </a>

            <a href="#" class="btn-icon" data-bs-toggle="tooltip" data-bs-placement="left"
                data-bs-custom-class="custom-tooltip"
                title="Copy."
                id="tooltipCopy" 
                onclick="copyUrl()">
                <i class="fa-solid fa-copy"></i><!-- copy button-->
            </a>
        </div>
    </div>
</div>
<?php } ?>