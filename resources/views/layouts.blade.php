<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Comatible" content="ie=edge">
        <title>Data Kartu Mahasiswa</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('style/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>