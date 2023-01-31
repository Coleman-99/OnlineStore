<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/my-css/style.css">


</head>

<body>
    <!-- Navigation Bar-->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img
                    src={{ asset('/images/coletechstore-low-resolution-logo-color-on-transparent-background.png') }}
                    alt="ColetechStore" width="250" height="80" class="d-inline-block align-text-top" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/products/upload">Upload</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">About</a>
                    </li>
                </ul>
                <form class="d-flex" action="/products">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                        name="search" />
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!--end of navigation bar-->


    @yield('content')

    <footer class="text-center footer">copywrite 2022</footer>
    <!--bootsrap java scrip code codes-->
    <Script src="/boostrap/bootstrap.bundle.min.js"></Script>
</body>

</html>
