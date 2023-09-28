<!DOCTYPE html>
<html lang="es">

<head>
    @yield('head')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu desplegable</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <!-- Agregar este elemento en la sección head de tu HTML -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">


</head>

<body>
    @yield('content')
    <div class="nav">

        <ul class="list">
            <div class="logo-container">
                <img src="{{ asset('images/logo-removebg-preview.png') }}" width="80" height="80" id="logo">
            </div>
            <li class="list__item" id="item">
                <div class="list__button">
                    <i class="fa-solid fa-apple-whole"></i>
                    <a href="{{route('manzanas')}}" class="nav__link">Manzanas</a>
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

@yield('scripts')
<!-- Agregar este elemento antes de cerrar el </body> de tu HTML -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>



</html>
