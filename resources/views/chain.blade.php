
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BlockChain</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h1>All Blocks</h1>
</div>

<div class="container">
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th>Nonce</th>
            <th>Index</th>
            <th>Timestamp</th>
            <th>Data</th>
            <th>Previous Hash</th>
            <th>Hash</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($testCoin as $coin)

            <tr>
                <td>hh</td>
                <td>{{$coin->chain['data']}}</td>
            </tr>

        @endforeach

        </tbody>
    </table>

</div>

</body>
</html>

