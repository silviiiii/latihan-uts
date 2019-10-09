<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link href="https://fonts.googleapis.com/css?family=Chilanka&display=swap" rel="stylesheet">
        <style>
            font-family: 'Chilanka',
            cursive;
        </style>
            <title>Assalaam Store</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
        <img src="index.png" width="70" height="60" class="d-inline-block align-top" alt="">SMK ASSALAAM</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>
    </div>
</nav>
<center>
        <h2>Assalaam Store</h2>
    </center>
        <div class="container">
        <div class="row justify-content-center">
         <div class="col-md-12">
            <div class="card border-primary">
                 <div class="card-header">kembalian</div>
                     <div class="card-body">
<form action="soalpembelianpro.php" method="post">
<tr>
            <th>Total kembalian</th>
            <td colspan="5" align="right">Rp. <?php echo number_format($total, 0, ',', '.') ?></td> <br>
        </tr>
 <label for="">apakah mau ke halaman awal ?</label> <br>
 <button type="submit" name="login" class="btn btn-outline-primary">iya</button>
 <button type="reset" name="logout" class="btn btn-outline-primary">tidak</button>
</body>
</html>