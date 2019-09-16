<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Latihan Laravel</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Pegawai -
                    <a href="http://www.google.com" target="_blank"
                        >www.google.com</a
                    >
                </div>
                <div class="card-body">
                    <a href="/pegawai/tambah" class="btn btn-primary"
                        >Input Pegawai Baru</a
                    >
                    <br />
                    <br />
                    <table
                        class="table table-bordered table-hover table-striped"
                    >
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawai as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>
                                    <a
                                        href="/pegawai/edit/{{ $p->id }}"
                                        class="btn btn-warning"
                                        >Edit</a
                                    >
                                    <a
                                        href="/pegawai/hapus/{{ $p->id }}"
                                        class="btn btn-danger"
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
