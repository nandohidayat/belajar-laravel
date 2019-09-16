<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial Laravel</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Data Pegawai - <strong>TAMBAH DATA</strong> - <a href="http://www.google.com" target="_blank">www.google.com</a>
            </div>
            <div class="card-body">
                <a href="/pegawai" class="btn btn-primary">Kembali</a>
                <br>
                <br>

                <form action="/pegawai/store" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama pegawai...">
                        @if ($errors->has('nama'))
                            <div class="text-danger">
                                {{$errors->first('nama')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="nama">Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat pegawai..."></textarea>
                        @if ($errors->has('alamat'))
                            <div class="text-danger">
                                {{$errors->first('alamat')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>