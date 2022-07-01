    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5496a52ba9.js" crossorigin="anonymous"></script>
    <script src="<?= base_url();?>assets/js/script.js"></script>
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
        
        const tooltip = new bootstrap.Tooltip('#tooltipQr');
        const tooltipCopy = new bootstrap.Tooltip('#tooltipCopy')
        const tooltipShare = new bootstrap.Tooltip('#tooltipShare')
    </script>
</body>
</html>