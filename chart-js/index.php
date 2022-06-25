<?php
$koneksi = mysqli_connect("localhost", "root", "", "data_auth");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ChartJS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center mb-5">Menampilkan Data Didalam ChartJS</h1>
    <section>
        <div class="row">
            <div class="col">
                <canvas id="myChart" style="height:40vh; width:40vw; margin:0 auto;"></canvas>
            </div>
            <div class="col">
                <table class="table table-bordered mx-auto" style="width: 400px;">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Gender</th>
                    </tr>
                    <?php
                    $no = 1;
                    $qry = $koneksi->query("SELECT * FROM authors");
                    while($data = $qry->fetch_assoc()){
                    ?>
                        <tr>
                            <td><?= $no++;?></td>
                            <td><?= $data['first_name'];?></td>
                            <td><?= $data['gender'];?></td>
                        </tr>
                    <? } ?>
                </table>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const data = {
            labels: [
                'Female',
                'Male'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [
                    <?php 
                    $qry = $koneksi->query("SELECT gender FROM authors WHERE gender='Female'");
                    $resF = $qry->num_rows;
                    echo $resF;
                    ?>,
                    <?php 
                    $qry = $koneksi->query("SELECT gender FROM authors WHERE gender='Male'");
                    $resF = $qry->num_rows;
                    echo $resF;
                    ?>
                ],
                backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)'
                ],
                hoverOffset: 4
            }]
        };
        const config = {
            type: 'pie',
            data: data,
        };
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        )
    </script>
</body>
</html>