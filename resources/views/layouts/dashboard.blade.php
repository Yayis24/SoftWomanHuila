<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Manzanas del cuidado</title>
        <link rel="icon" href="{{ asset('images/simb.png') }}" type="image/png">
        <link rel="shortcut icon" href="{{ asset('images/simb.png') }}" type="image/png">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
</head>

<body>

    {{-- Header define el encabezado de la página  --}}
    <header class="hero2">
        {{-- Barra de navegacion --}}
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title">Cuidamos a quienes tú cuidas</h2>
            </div>
            {{-- Elementos de lista de la barra de navegacion --}}
            <ul class="nav__link nav__link--menu">
                <li class="nav__items"><a href="{{route('apple')}}"class="nav__links">Manzanas</a></li>
                <li class="nav__items"><a href="#service"class="nav__links">Municipios</a></li>
                <li class="nav__items"><a href=""class="nav__links">Categorias</a></li>
                <li class="nav__items"><a href=""class="nav__links">Servicios</a></li>
                <li class="nav__items"><a href=""class="nav__links">Solicitudes</a></li>

                <li class="nav__items"><a href="{{ route('logout') }}"class="nav__links">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('index')" class="nav__links"
                                onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                salir
                            </a>
                        </form>

                        </i>
                    </a>
                </li>
        </nav>
        </ul>
    </header>

</body>

</html>
