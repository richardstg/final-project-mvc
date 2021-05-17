<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/app.css" />
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-light">
        {{-- <div class="noise"></div> --}}
        <div class="container-fluid" style="position: relative; z-index: 5">
            <a class="navbar-brand mr-auto" href="{{ URL::asset('/') }}">Navbar brand</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-5">
                        <a class="nav-link" href="{{ URL::asset('/') }}">Home</a>
                    </li>
                    <li class="nav-item ml-5">
                        <a class="nav-link" href="{{ URL::asset('/') }}blog">Blog</a>
                    </li>
                    <li class="nav-item ml-5">
                        <a class="nav-link" href="{{ URL::asset('/') }}about">About</a>
                    </li>
                    <li class="nav-item ml-5">
                        <a class="nav-link" href="{{ URL::asset('/') }}contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="content">
        @yield('content')
    </main>
    <footer class="footer pt-5 pb-5">
        <div class="noise"></div>
        <div class="container" style="position: relative; z-index: 5">
            <span class="text-light">Place sticky footer content here.</span>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
</body>

</html>
