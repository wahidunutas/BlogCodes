<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Crud PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <h1 class="text-center">CRUD SEDERHANA PHP MYSQL</h1>
        <div class="container">
            

            <?php
                include "koneksi.php";

                $id = $_GET['id'];
                $qry = $koneksi->query("SELECT * FROM data WHERE id = '$id'");
                $data = $qry->fetch_assoc();
            ?>
            <form method="post">
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?= $data['name'];?>">
                </div>
                <div class="mb-3">
                    <label>Kelas</label>
                    <input type="text" class="form-control" name="kelas" value="<?= $data['kelas'];?>">
                </div>
                <div class="mb-3">
                    <label>Jenis Kelamin</label>
                    <select name="jk" class="form-control">
                        <option value="">Pilih</option>
                        <option value="laki-laki" <?php if($data['jk'] == 'laki-laki'){echo 'selected';}?>>Laki-Laki</option>
                        <option value="wanita" <?php if($data['jk'] == 'wanita'){echo 'selected';}?>>Wanita</option>
                    </select>
                </div>
                <button type="submit" name="edit" class="btn btn-primary btn-sm">Edit</button>
                <a href="index.php" class="btn btn-danger btn-sm">Kembali</a>
            </form>
        </div>
        <?php
        if(isset($_POST['edit'])){
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $jk = $_POST['jk'];

            $koneksi->query("UPDATE data SET 
                            name = '$nama',
                            kelas = '$kelas',
                            jk    = '$jk'
                            WHERE id = '$id' ");
            echo "<script>alert('Data Berhasil Diubah!');
                    window.location.href='index.php';
                </script>";
        }
        ?>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>