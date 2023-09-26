<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<nav class="navbar">
    <img src="{{ asset('images/women.png') }}" alt="" width="50" height="50">
    <ul class="nav-links">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a href="{{ route('login') }}">
                <i class="material-icons">
                    <span class="material-symbols-outlined">
                        passkey
                    </span>
                </i>
            </a>
        </li>
        {{--             <li><a href="#">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        <i class="material-icons"><span class="material-symbols-outlined">
                                person
                            </span></i>
                    </x-responsive-nav-link></a></li>
            <li><a href="#">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                            <i class="material-icons"><span class="material-symbols-outlined">
                                    logout
                                </span></i>
                        </x-responsive-nav-link>
                    </form>
                </a>
            </li> --}}
    </ul>
</nav> <br>

<main class="container">
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="col-lg-6 px-0">
            <h1 class="display-4 fst-italic">Las manzanas del cuidado</h1>
            <p class="lead my-3">En las Manzanas del Cuidado, encontrarás oportunidades para estudiar, emprender,
                cuidar de tu salud física y mental, recibir orientación legal y apoyo emocional, y hasta lavar la
                ropa de tu familia en lavanderías comunitarias sin costo alguno. Es un lugar donde la comunidad se
                reúne para fortalecerse mutuamente.</p>
            <p id="registerr" class="lead mb-0"><a href="{{ route('register') }}"
                    class="text-body-emphasis fw-bold">Registrate aqui!</a></p>
        </div>
    </div>


    <div class="row featurette align-items-center">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1"> Tu bienestar y el de tu familia son nuestra prioridad
                <span class="text-body-secondary">No te pierdas esta oportunidad.</span>
            </h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting
                prose here.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Imagen">
                <title>Imagen</title>
                <image href="{{ asset('images/woman.png') }}" width="100%" height="100%" />
            </svg>
        </div>
    </div>

    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a>
            </li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a>
            </li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
        </ul>
        <p class="text-center text-body-secondary">&copy; 2023 Company, Inc</p>
    </footer>


    </body>

</html>
