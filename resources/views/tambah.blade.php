<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial Laravel</title>
</head>
<body>
    <h2><a href="http://www.google.com">www.google.com</a></h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai">Kembali</a>
    <br>
    <br>

    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        Nama <input type="text" name="nama" required> <br>
        Jabatan <input type="text" name="jabatan" required> <br>
        Umur <input type="number" name="umur" required> <br>
        Alamat <textarea name="alamat" required></textarea> <br>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>