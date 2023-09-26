<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Registro de Mujeres Cuidadoras</h3>
                    </div>
                    <div class="card-body">
                        <form id="mujer-form">
                            <div class="form-group">
                                <label for="tipo_documento">Tipo de Documento:</label>
                                <select id="tipo_documento" name="tipo_documento" class="form-control" required>
                                    <option value="cedula">Cédula de Identidad</option>
                                    <option value="pasaporte">Pasaporte</option>
                                    <!-- Agrega más opciones según tus necesidades -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="documento">Documento:</label>
                                <input type="text" id="documento" name="documento" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombres:</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="apellidos">Apellidos:</label>
                                <input type="text" id="apellidos" name="apellidos" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono:</label>
                                <input type="text" id="telefono" name="telefono" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo Electrónico:</label>
                                <input type="email" id="correo" name="correo" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="ciudad">Ciudad:</label>
                                <input type="text" id="ciudad" name="ciudad" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Dirección:</label>
                                <textarea id="direccion" name="direccion" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="ocupacion">Ocupación:</label>
                                <input type="text" id="ocupacion" name="ocupacion" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="servicios">Servicios en los que le gustaría participar:</label>
                                <input type="text" id="servicios" name="servicios" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Registrar Mujer Cuidadora</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Registro de Manzanas</h3>
                    </div>
                    <div class="card-body">
                        <form id="manzana-form">
                            <div class="form-group">
                                <label for="nombre">Nombre de la Manzana:</label>
                                <input type="text" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="codigo">Código de la Manzana:</label>
                                <input type="text" id="codigo" name="codigo" required>
                            </div>
                            <div class="form-group">
                                <label for="localidad">Localidad:</label>
                                <input type="text" id="localidad" name="localidad" required>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Dirección:</label>
                                <textarea id="direccion" name="direccion" required></textarea>
                            </div>
                            <button type="submit">Registrar Manzana</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>
