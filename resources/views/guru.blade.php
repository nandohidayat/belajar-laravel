<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Tutorial Laravel</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Guru |
                    <a href="http://www.google.com">www.google.com</a>
                </div>
                <div class="card-body">
                    <a href="/guru" class="btn btn-sm btn-primary">Data Guru</a>
                    |
                    <a href="/guru/trash">Tong Sampah</a>
                    <br />
                    <br />
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th style="width:1%">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($guru as $g)
                            <tr>
                                <td>{{ $g->nama }}</td>
                                <td>{{ $g->umur }}</td>
                                <td>
                                    <a
                                        href="/guru/hapus/{{ $g->id }}"
                                        class="btn btn-danger btn-sm"
                                        >Hapus</a
                                    >
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
