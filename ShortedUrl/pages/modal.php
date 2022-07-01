<div class="modal fade" id="QrCode<?= $result['id'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="QrCodeLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <!-- <div class="modal-header">
            <h5 class="modal-title" id="QrCodeLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> -->
        <div class="modal-body">
            <img src="<?= base_url();?>assets/qr/<?= $result['qrcode'];?>" alt="">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary btn-sm">Download</button>
        </div>
        </div>
    </div>
</div>