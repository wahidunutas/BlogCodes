<?php $koneksi = mysqli_connect("localhost", "root", "", "select_option"); ?> 

<form action="" method="post">
    <select name="select" id="select" onchange="this.form.submit()">
        <?php 
        $qry = $koneksi->query("SELECT * FROM data");
        while($data = $qry->fetch_assoc()){?>
            <option value="<?= $data['id'];?>" 
            <?php
            // Selected option
            if($_POST['select'] == $data['id']){
                echo "selected";
            }
            // Selected option
            ?>><?= $data['name'];?></option>
        <?php } ?>
    </select>
</form>

<?php
if(isset($_POST['select'])){
    $qry = $koneksi->query("SELECT * FROM data WHERE id='$_POST[select]'");
    $res = $qry->fetch_assoc();?>
    <p>Your Select <?= $res['name'];?></p>
<?php }?>
