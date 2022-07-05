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
            <a href="tambah.php" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table table-bordered text-center">
                <tr>
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </thead>
                    <?php
                    include "koneksi.php";
                    
                    $no = 1;
                    $qry = $koneksi->query("SELECT * FROM data");
                    while($data = $qry->fetch_assoc()){ // atau mysqli_fetch_assoc($qry)
                    ?>
                    <tbody>
                        <td><?= $no;?></td>
                        <td><?= $data['name'];?></td>
                        <td><?= $data['kelas'];?></td>
                        <td><?= $data['jk'];?></td>
                        <td>
                            <a href="edit.php?id=<?= $data['id'];?>" class="btn btn-info">Edit</a>
                            <a href="delete.php?id=<?= $data['id'];?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini?');" class="btn btn-danger">Delete</a>
                        </td>
                    </tbody>
                    <?php $no++; } ?>
                </tr>
            </table>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>