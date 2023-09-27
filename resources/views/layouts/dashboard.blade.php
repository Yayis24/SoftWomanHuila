<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu desplegable</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <!-- Agregar este elemento en la sección head de tu HTML -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


</head>

<body>
    <div class="nav">

        <ul class="list">
            <div class="logo-container">
                <img src="{{ asset('images/logo-removebg-preview.png') }}" width="80" height="80" id="logo">
            </div>
            <li class="list__item" id="item">
                <div class="list__button">
                    <i class="fa-solid fa-apple-whole"></i>
                    <a href="" class="nav__link">Manzanas</a>
                </div>
            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <i class="fa-solid fa-city"></i>
                    <a href="" class="nav__link">Municipios</a>
                    <img src="" alt="" class="list__arrow">
                </div>
            </li>

            <li class="list__item">
                <div class="list__button">
                    <i class="fa-solid fa-user"></i>
                    <a href="" class="nav__link">Categorias</a>
                </div>
            </li>

            <li class="list__item">
                <div class="list__button">
                    <i class="fa-solid fa-user"></i>
                    <a href="" class="nav__link">Servicios</a>
                </div>
            </li>

            <li class="list__item">
                <div class="list__button">
                    <i class="fa-solid fa-user"></i>
                    <a href="" class="nav__link">Establecimientos</a>
                </div>
            </li>
            
            <li class="list__item">
                <div class="list__button">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf <!-- Añade el token CSRF para seguridad -->
                        <button type="submit" class="nav__link logout-button">Salir</button>
                    </form>
                </div>
            </li>
            
            

        </ul>
    </div>
</body>

<!-- Agregar este elemento antes de cerrar el </body> de tu HTML -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>


</html>
