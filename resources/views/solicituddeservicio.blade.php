<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Solicitud de Servicio</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/solicitudservicio.css') }}">
</head>

<body class="body">
    <h1 class="map-title">¡Encuentra Tu Manzana Más Cercana!</h1>
    <div class="map-container">
        <div class="gmap_canvas">
            <iframe width="820" height="560" id="gmap_canvas"
                src="https://maps.google.com/maps?q=Localidades+con+Manzanas+Activas&t=k&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>

    <h1 class="text-center">Solicitud de Servicio</h1>
    <button class="my-button" onclick="openModal()">Agregar Solicitud</button>
    <table id="solicitudTable" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Manzana</th>
                <th>Servicio</th>
                <th>Fecha/Hora</th>
                <th>Estado</th>
                <th>Observación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td class="manzana" data-id="1">Azul</td>
                <td>Educación superior</td>
                <td>7/01/2024</td>
                <td>Aprobada</td>
                <td>Calle 3A-14-9</td>
                <td>
                    <button class="my-button1">Eliminar</button>
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
                <label for="manzana">Manzana:</label>
                <input type="text" id="manzana" name="manzana" required>
                <label for="servicio">Servicio:</label>
                <input type="text" id="servicio" name="servicio" required>
                <label for="fecha">Fecha/Hora:</label>
                <input type="text" id="fecha" name="fecha" required>
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" required>
                <label for="observacion">Observación:</label>
                <input type="text" id="observacion" name="observacion">
                <button type="submit" class="my-button">Guardar</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>

    <script>
        function openModal() {
            document.getElementById('modal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }

        document.getElementById('formularioAgregar').addEventListener('submit', function (event) {
            event.preventDefault();
            // Aquí puedes procesar los datos del formulario y guardar la solicitud
            // Por ejemplo, puedes usar AJAX para enviar los datos al servidor
            // Después de guardar la solicitud, cierra el modal
            closeModal();
        });

        $(document).ready(function () {
            $('#solicitudTable').DataTable({
                responsive: true,
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'Solicitud de Servicio List',
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'Solicitud de Servicio List',
                        exportOptions: {
                            columns: ':visible'
                        },
                        customize: function (doc) {
                            // Personaliza el documento PDF si es necesario
                        }
                    },
                    {
                        extend: 'print',
                        title: 'Solicitud de Servicio List',
                    },
                    {
                        extend: 'copy',
                        title: 'Solicitud de Servicio List',
                    }
                ]
            });
        });
    </script>
</body>

</html>
