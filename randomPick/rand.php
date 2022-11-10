<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="plugins/sweetalert2.min.css">
    <script src="plugins/sweetalert2.all.min.js"></script>


    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <div class="letak">
                        <input type="text" name="data[]" class="form-control mb-2">
                    </div>
                    <button type="button" class="btn btn-primary tambah">+</button>
                    <button type="submit" name="get" class="btn btn-primary"> Input</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['get'])){
        $data = $_POST['data'];
        
        $random = $data[mt_Rand(0, count($data) - 1)];
        echo"
        <script>
            let timerInterval
            Swal.fire({
            icon: 'question',
            title: 'Auto close alert!',
            html: 'I will close in <b></b> milliseconds.',
            timer: '".json_encode($data)."',
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
            }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
            }
            })
        </script>";
        echo $random;
        
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script>
        // for($i=1; $i<=20; $i+=1){
            $(document).ready(function(){
                $('.tambah').on('click', function(){
                    $(".letak").append("<input type='text' class='form-control mb-2' name='data[]'> ");
                });    
            });
        // }
    </script>
</body>
</html>