<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Navbar</title>
    @yield('head')
</head>

<body>
    <nav class="navbar">
        <img src="{{ asset('images/women.png') }}" alt="" width="50" height="50">
        <ul class="nav-links">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                            {{ __('Cerrar sesion') }}
                        </x-responsive-nav-link>
                    </form>
                </a>
            </li>
            <li><a href="#">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Perfil') }}
                    </x-responsive-nav-link></a></li>
        </ul>
    </nav>








</body>

</html>
