<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Manzanas del cuidado</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/solicitudservicio.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <h1 class="text-center">Registra las Manzanas</h1>
    <div class="container">
        <button class="my-button" onclick="openModal()">Agregar Solicitud</button>
        <div class="card">
            <div class="card-header">
                <h2>Manzanas</h2>
            </div>
            <div class="card-body">
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
            </div>
        </div>
    </div>
    <div id="modal" class="modal">
        <div class="modal-dialog modal-md"> <!-- Puedes ajustar el tamaño aquí -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Agregar Manzana</h5>
                    <button type="button" class="close" onclick="closeModal()">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formularioAgregar" class="p-3">
                        <div class="form-group">
                            <label for="Codigo">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" required class="form-control">
                            <label for="Codigo">Codigo:</label>
                            <input type="text" id="codigo" name="codigo" required class="form-control">
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit" class="my-button">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
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

    {{-- Implementacion sweetalert --}}
    <script>
        // Obtén una referencia al botón por su clase o ID
        const deleteButton = document.querySelector('.my-button1');

        // Agrega un evento de clic al botón
        deleteButton.addEventListener('click', function() {
            // Utiliza SweetAlert para mostrar un diálogo de confirmación
            Swal.fire({
                title: '¿Estás seguro?',
                text: 'Esta acción no se puede deshacer',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Aquí puedes ejecutar la lógica para eliminar el elemento
                    // Por ejemplo, puedes hacer una solicitud AJAX para eliminarlo en el servidor
                    // Luego, puedes mostrar un SweetAlert de éxito si la eliminación fue exitosa
                    Swal.fire('Eliminado', 'El elemento ha sido eliminado', 'success');
                }
            });
        });
    </script>


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
