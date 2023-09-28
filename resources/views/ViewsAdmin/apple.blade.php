<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/manzanas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
                <li class="nav__items"><a href="{{ route('manzanas') }}"class="nav__links">Manzanas</a></li>
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
    <h1 class="text-center">Solicitud de Servicio</h1>
    <button class="my-button" onclick="openModal()">Agregar Solicitud</button>
    <br>
    <br>
    <table id="solicitudTable" class="display">
        <thead>
            <tr>
                <th hidden>ID</th>
                <th>Codigo</th>
                <th>Name</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td hidden>id</td>
                <td>980023</td>
                <td>Ciudad de chapinero</td>
                <td>
                    <button class="my-button1">Eliminar</button>
                    <button class="my-buttoneditar">Editar</button>
                </td>
            </tr>
            <!-- Agrega más filas según sea necesario -->
        </tbody>
    </table>

    <div id="modal" class="modal">
        <div class="modal-contenido">
            <i class="fas fa-times cerrar" onclick="closeModal()"></i>
            <h2>Agregar Solicitud de Servicio</h2>
            <form id="formularioAgregar">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id" required>
                <label for="Codigo">Codigo:</label>
                <input type="text" id="codigo" name="codigo" required>
                <label for="Nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>
                <button type="submit" class="my-button">Guardar</button>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script>
        function openModal() {
            document.getElementById('modal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }

        document.getElementById('formularioAgregar').addEventListener('submit', function(event) {
            event.preventDefault();
            // Aquí puedes procesar los datos del formulario y guardar la solicitud
            // Por ejemplo, puedes usar AJAX para enviar los datos al servidor
            // Después de guardar la solicitud, cierra el modal
            closeModal();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#solicitudTable').DataTable({
                responsive: true,
                dom: 'lfrtipB',
                buttons: [
                    // Botón para PDF
                    {
                        extend: 'pdf',
                        title: 'Archivo PDF',
                        text: 'Exportar a PDF',
                        className: 'btn btn-danger pdf-button',
                        customize: function(doc) {
                            // Ocultar las columnas en el PDF
                            doc.content[1].table.body.forEach(function(row) {
                                row.splice(0, 1); // Elimina la primera columna (ID)
                                row.splice(-1, 1); // Elimina la última columna (Acciones)
                            });
                        }
                    }
                ]
            });
        });
    </script>
</body>

</html>
