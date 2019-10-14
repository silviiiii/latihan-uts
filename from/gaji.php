<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP BASIC</title>
</head>
<body>
    <fieldset>
    <legend>DATA DIRI</legend>
    <form action="gajipro.php" method="post">
    <label for="">nama </label>
    <input type="text" name="nama" required><br>
    <label for="">NIP </label>
    <input type="number" name="nip" required><br>
    <label for="">alamat </label>
    <input type="text" name="alamat" required><br>
    <label for="">Jumlah hari kerja </label>
    <input type="number" name="jumlah" max="30" min="1" required><br>
    <input type="submit" value="simpan" class="btn btn-primary" name="sbm">
    </form>
    </fieldset>
</body>
</html>