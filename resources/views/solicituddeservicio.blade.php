<!DOCTYPE html>
<html>

<head>
    <title>Solicitud Servicio</title>
    <link rel="stylesheet" href="{{ asset('css/solicitudservicio.css') }}">
</head>

<body>
    <h1 class="map-title">¡Encuentra Tu Manzana Más Cercana!</h1>
    <div class="mapouter">
        <div class="gmap_canvas"><iframe width="820" height="560" id="gmap_canvas"
                src="https://maps.google.com/maps?q=Localidades+con+Manzanas+Activas&t=k&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                href="https://textcaseconvert.com/"></a><br><a href="https://online-timer.me/"></a><br>
           {{--  <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    height: 560px;
                    width: 820px;
                }
            </style><a href="https://www.embedmaps.co">create map in google</a>
            <style>
                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 560px;
                    width: 820px;
                }
            </style> --}}
        </div>
    </div>
    </div>
    </div>
    <h1 class="text-center">Solicitud de Servicio</h1>
    <table>
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
                <td>Educacion superior</td>
                <td>7/01/2024</td>
                <td>Aprobada</td>
                <td>Calle 3A-14-9</td>
                <td>
                    <button class="my-button">Agregar</button>
                    <button class="my-button1">Eliminar</button>
                </td>
            </tr>
            <!-- Puedes agregar más filas con datos aquí -->
        </tbody>
    </table>

    <!-- Tarjeta informativa -->
    <div class="tarjeta" id="tarjeta">
        <!-- Contenido de la tarjeta -->
        <h2>Servicio: Centro Día Carlos Gaviria Díaz</h2>
        <p>DIRECCIÓN: Calle 69 Sur #18b - 36</p>
        <p>Horario: Lunes a Viernes de 08:00 am a 5:00 pm</p>
        <p>TELEFONO: 6,012,830,541</p>
        <p>LOCALIDAD: Ciudad Bolívar</p>
        <p>MANZANA: Manitas</p>
        <p>TIPO_SERVI: Para quienes requieren Cuidado</p>
        <p>Equipamiento: Centro Día Carlos Gaviria Díaz</p>
    </div>

    <script>
        // Obtener las manzanas y la tarjeta
        const manzanas = document.querySelectorAll('.manzana');
        const tarjeta = document.getElementById('tarjeta');

        // Agregar un controlador de eventos de clic a cada manzana
        manzanas.forEach(manzana => {
            manzana.addEventListener('click', () => {
                // Obtener el ID de la manzana seleccionada (en este ejemplo, usamos el atributo data-id)
                const manzanaId = manzana.getAttribute('data-id');
                
                // Simular una solicitud de datos basada en el ID de la manzana
                // (reemplaza esto con tu lógica real de obtención de datos)
                // Esto es solo un ejemplo para mostrar la tarjeta
                // Cuando se obtengan los datos reales, puedes actualizar el contenido de la tarjeta
                const datosManzana = {
                    servicio: "Centro Día Carlos Gaviria Díaz",
                    direccion: "Calle 69 Sur #18b - 36",
                    horario: "Lunes a Viernes de 08:00 am a 5:00 pm",
                    telefono: "6,012,830,541",
                    localidad: "Ciudad Bolívar",
                    manzana: "Manitas",
                    tipoServicio: "Para quienes requieren Cuidado",
                    equipamiento: "Centro Día Carlos Gaviria Díaz"
                };

                // Actualizar el contenido de la tarjeta con los datos de la manzana
                tarjeta.innerHTML = `
                    <h2>Servicio: ${datosManzana.servicio}</h2>
                    <p>DIRECCIÓN: ${datosManzana.direccion}</p>
                    <p>Horario: ${datosManzana.horario}</p>
                    <p>TELEFONO: ${datosManzana.telefono}</p>
                    <p>LOCALIDAD: ${datosManzana.localidad}</p>
                    <p>MANZANA: ${datosManzana.manzana}</p>
                    <p>TIPO_SERVI: ${datosManzana.tipoServicio}</p>
                    <p>Equipamiento: ${datosManzana.equipamiento}</p>
                `;

                // Mostrar la tarjeta
                tarjeta.style.display = 'block';
            });
        });
    </script> 
</body>

</html>

