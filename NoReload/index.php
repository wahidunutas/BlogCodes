<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jk</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            setInterval(function () {
                getHistory()
            }, 100);
        });
        function getHistory() {
            $.getJSON("data.php", function(data) {
                $("tbody").empty();
                var no = 1;
                $.each(data.result, function () {
                    var nama = this['nama'];
                    var jk = this['jk'];
                    $("tbody").append(function () {
                        return `
                        <tr>
                            <td>`+ (no++) + `</td>
                            <td>`+ nama + `</td>
                            <td>`+ jk + `</td>
                        </tr>`
                        
                    });
                });
            });
        }
    </script>
</body>
</html>