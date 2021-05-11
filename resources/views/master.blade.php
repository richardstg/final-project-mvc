<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/app.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="./">Hem</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./dice">Tärningsspelet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./highscore">Highscore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./rolldices">Rulla tärningar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./books">Böcker</a>
                </li>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
