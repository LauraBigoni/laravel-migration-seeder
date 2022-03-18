<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('cdns')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    @yield('styles')
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <header class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <nav class="navbar border-bottom">
                        <h1 class="display-1"><a class="text-danger text-decoration-none" href="{{ url('/') }}">TRENITALIA</a></h1>
                        <p class="display-6">Gruppo Ferrovie dello stato italiane</p>
                        <p><i>-- Ci scusiamo per il ritardo.</i></p>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main>

        @yield('content')

    </main>
    @yield('scripts')
</body>

</html>
