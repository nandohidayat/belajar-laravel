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
            <div class="card-body">
                <h3 class="text-center"><a href="http://www.google.com">www.google.com</a></h3>
                <h5 class="text-center my-4">Eloquent One to Many Relationship</h5>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>    
                            <th>Judul Article</th>
                            <th>Tag</th>
                            <th width="15%" class="text-center">Jumlah Tag</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $a)
                            <tr>
                            <td>{{ $a->judul }}</td>
                            <td>
                                @foreach ($a->tags as $t)
                                    {{ $t->tag }}, 
                                @endforeach
                            </td>
                                <td class="text-center">
                                    {{ $a->tags->count() }}
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