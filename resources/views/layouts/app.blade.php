<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="stylesheet" href={{ asset('css/app.css') }}>

    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css"
        href="https://www3.gobiernodecanarias.org/educacion/cau_ce/cookies/cookieconsent.min.css" />
    <script type="text/javascript" src="https://www3.gobiernodecanarias.org/educacion/cau_ce/cookies/cookieconsent.min.js">
    </script>
    <script type="text/javascript" src="https://www3.gobiernodecanarias.org/educacion/cau_ce/cookies/cauce_cookie.js">
    </script>
    <script type="text/javascript"
        src="https://www3.gobiernodecanarias.org/educacion/cau_ce/estadisticasweb/scripts/piwik-base.js"></script>
    <script type="text/javascript"
        src="https://www3.gobiernodecanarias.org/educacion/cau_ce/estadisticasweb/scripts/piwik-eforma.js"></script>

</head>

<body style="font-family: {{ session('font_style', 'Arial') }}!important">
    <!-- header -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}">Online Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="{{ route('home.index') }}">Home</a>
                <a class="nav-link active" href="{{ route('home.about') }}">About</a>
                @guest
                    <a class="nav-link active" href="{{ route('login') }}">Login</a>
                    <a class="nav-link active" href="{{ route('register') }}">Register</a>
                @endguest
                @auth
                    @if (Auth::user()->is_admin)
                        {{-- <a class="nav-link active" href="{{ route('admin.home') }}">Admin Panel</a> --}}
                    @else
                        <a class="nav-link active" href="{{ route('products.index') }}">Products</a>
                    @endif
                    <a class="nav-link active" href="{{ route('conf.index') }}">Settings</a>
                    <a class="nav-link active" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endauth
            </div>
        </div>
        </div>
    </nav>

    <header class="masthead bg-primary text-white text-center py-4" style="background-color: {{ session('header_color', '#333') }}!important">
        <div class="container d-flex align-items-center flex-column">
            <h2>@yield('subtitle', 'Esto es el subtitulo Laravel')</h2>
        </div>
    </header>

    <!-- header -->

    <div class="container my-4">@yield('content')</div>
    <!-- footer -->
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Desarrollo web en entorno servidor - 2º DAW
            </small>
            <br>
            <small>
                {{ now() }}
            </small>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
