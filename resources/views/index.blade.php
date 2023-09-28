<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

{{-- Header define el encabezado de la página  --}}
<header class="hero">
    {{-- Barra de navegacion --}}
    <nav class="nav container">
        <div class="nav__logo">
            <h2 class="nav__title">Cuidamos a quienes tú cuidas</h2>
        </div>
        {{-- Elementos de lista de la barra de navegacion --}}
        <ul class="nav__link nav__link--menu">
            <li class="nav__items"><a href="#inicio"class="nav__links">Inicio</a></li>
            <li class="nav__items"><a href="#service"class="nav__links">Servicios</a></li>
            <li class="nav__items"><a href="{{ route('login') }}"class="nav__links">Ingresar</i>
                </a>
            </li>
    </nav>
    <div class="nav__menu">
        <img src="{{ asset('images/image.jpg') }}" class="nav__img">
    </div>
    </ul>

    {{-- Section para mostrar texto sobre la imagen en el encabezado de la pagina --}}
    <section class="hero__container container">
        <h1 class="hero__title">Manzanas del cuidado</h1>
        <p class="hero__paragraph" style="font-size: 20px">Ven junto a tu familia y disfruta fácil y gratis de todos los servicios gratuitos que
            tenemos para ti.</p>
        <a href="#inicio" class="cta">Comienza ahora</a>
    </section>
</header>


{{-- Se incluyen section con el fin de llamarse por medio del id en el href de los items --}}
{{-- Section Inicio --}}
<section class="hero__container container" id="inicio">
    <div class="p-4 p-md-5 mb-4 rounded" id="estil">
        <div class="col-lg-6 px-0">
            <h1 class="display-4 fst-italic"> Las manzanas del cuidado</h1>
            <p class="lead my-3">Aqui encontrarás oportunidades para estudiar, emprender,
                cuidar de tu salud física y mental, recibir orientación legal y apoyo emocional, y hasta lavar la
                ropa de tu familia en lavanderías comunitarias sin costo alguno. Es un lugar donde la comunidad se
                reúne para fortalecerse mutuamente.</p>
        </div>
    </div>
</section>

{{-- Section Servicios --}}
<section class="hero__container container" id="service">
    <h1>Nuestros servicios</h1><br>

    <div class="container marketing">
        <!-- Se incluyen 3 columnas para servicios -->
        <!-- Columna 1 -->
        <div class="row">
            <div class="col-lg-4 mb-3">
                <img src="{{ asset('images/image.jpg') }}" class="rounded-circle" width="140" height="140"
                    alt="Imagen 1">
                <h2>Para las mujeres y personas cuidadoras</h2><br>
                <p>En las Manzanas del Cuidado encuentra tiempo y servicios gratuitos de educación, respiro, bienestar,
                    atención en violencias y generación de ingresos.</p>
                <p><a class="btn btn-success" id="buttons"
                        href="https://manzanasdelcuidado.gov.co/servicios-para-mujeres-cuidadoras/">Mas detalles</a></p>
            </div>
            <!-- Columna 2 -->
            <div class="col-lg-4 mb-3">
                <img src="{{ asset('images/image.jpg') }}" class="rounded-circle" width="140" height="140"
                    alt="Imagen 2">
                <h2>Para quienes requieren cuidado o apoyo</h2><br>
                <p >Servicios gratuitos para las niñas, los niños, las personas mayores y las personas con discapacidad.
                    Aquí promovemos su autonomía y desarrollamos sus capacidades.</p>
                <p><a class="btn btn-success" id="buttons"
                        href="https://manzanasdelcuidado.gov.co/servicios-para-quienes-requieren-cuidado/">Mas detalles</a></p>
            </div>
            <!-- Columna 3 -->
            <div class="col-lg-4 mb-3">
                <img src="{{ asset('images/image.jpg') }}" class="rounded-circle" width="140" height="140"
                    alt="Imagen 3">
                <h2>Para las familias y la ciudadanía en general</h2><br>
                <p>Las Manzanas del Cuidado
                    brindan servicios para toda la familia. Aquí podrán aprenden a cuidar, mientras se divierten
                    y comparten.</p>
                <p><a class="btn btn-success" id="buttons"
                        href="https://manzanasdelcuidado.gov.co/servicios-para-las-familias-de-las-cuidadoras/">Mas
                        detalles</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>


{{-- Footer - pie de pagina --}}
<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li ><a href="#inicio" class="nav-link px-2 text-body-secondary">Inicio</a></li>
        <li ><a href="#service" class="nav-link px-2 text-body-secondary">Servicios</a>
        </li>
        <li ><a href="{{ route('login') }}" class="nav-link px-2 text-body-secondary">Acceder</a></li>
    </ul>
    <p class="text-center text-body-secondary">&copy; 2023 - Alcaldía Mayor de Bogotá - Todos los derechos reservados.</p>
</footer>


</body>

</html>
