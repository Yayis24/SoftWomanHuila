<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Establecimientos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/solicitudservicio.css') }}">
</head>

<body class="body">
    <h1 class="text-center">Establecimientos</h1>
    <button class="my-button" onclick="openModal()">Agregar Solicitud</button>
    <br>
    <br>
    <table id="solicitudTable" class="display">
        <thead>
            <tr>
                <th hidden>ID</th>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Responsable</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td hidden>1</td>
                <td>Maicol</td>
                <td>340921</td>
                <td>Camilo Restrepo</td>
                <td>Calle 3A-14-9</td>
                <td>
                    <button class="my-button1">Eliminar</button>
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
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                <label for="codigo">Codigo:</label>
                <input type="text" id="codigo" name="codigo" required>
                <label for="responsable">Responsable:</label>
                <input type="text" id="responsable" name="responsable" required>
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" required>
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
