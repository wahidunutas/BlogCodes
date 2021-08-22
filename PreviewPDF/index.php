<?php
$koneksi = mysqli_connect("localhost", "root", "", "previewpdf");
?>
<!-- style -->
<style>
    table, th, td{
        border:1px solid black;
        width:250px;
        text-align: center;
    }
</style>
<title>Input File & Preview PDF</title>
<!-- content -->
<center>
    <h4>Menginput File Serta Preview PDF</h4><br>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="files"><button type="submit" name="add">Tambah</button><br>
    </form>

    <table>
        <tr>
            <th style="width:20px;">No</th>
            <th>Files Name</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        $sql = $koneksi->query("SELECT * FROM data");
        while($data = $sql->fetch_assoc()){
        ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $data['files'];?></td>
            <td><a href="pdf.php?id=<?= $data['id'];?>" target="_BLANK">Preview</a></td>
        </tr>
        <?php $no++;?>
        <?php } ?>
    </table>
</center>

<?php
if(isset($_POST['add'])){
    $file = $_FILES['files']['name'];
    $lokasi = $_FILES['files']['tmp_name'];

    $ekstensiFileValid = ['pdf'];
    $ekstensiFile = explode('.', $file);
    $ekstensiFile = strtolower(end($ekstensiFile));

    if( !in_array($ekstensiFile, $ekstensiFileValid) ){
        echo"
        <script>
        alert('Pastikan File Berektensi PDF');
        </script>
        ";
        return false;
    }
    move_uploaded_file($lokasi, "file_pdf/".$file);
    
    $koneksi->query("INSERT INTO data(id, files)VALUES('', '$file')");
    echo "<script>alert('Data Berhasil Ditambahkan');document.location='index.php';</script>";
}
?>