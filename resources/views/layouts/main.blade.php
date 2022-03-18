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
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-danger">TRENITALIA</h1>
                    <p>Gruppo Ferrovie dello stato italiane</p>
                    <p><i>-- Ci scusiamo per il ritardo.</i></p>
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
