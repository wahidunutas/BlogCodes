<div class="background">
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
</div>
<div class="container">
    <header>
        <div class="home-content">
            <section class="header-content">
                <h1>Puny Url <?= $result['id'];?></h1>
                <p> Login and get various features,<br>
                    Create responsive urls, customize urls and control your urls easily.</p>
                <!-- ad -->
                <script>

                </script>
            </section> 
            <section class="form-home" >
                <form method="post" action="<?= base_url();?>">
                    <input type="url" class="form-control" placeholder="Paste Long Url..." name="url" autofocus required>
                    <input class="btn btn-outline-secondary btn-submit" type="submit" name="submit" value="Submit">
                </form>
                
                <?php include "pages/short.php"; ?>
            </section>
        </div>
    </header>
</div>
