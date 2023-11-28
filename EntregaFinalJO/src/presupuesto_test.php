<!DOCTYPE html>
<html lang="en">

<head>
    <title>Presupuestos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <header>
        <h1>Presupuestos</h1>
        <?php
        include('../controlador_presupuesto/controlador_ingresar_presupuesto.php');
        ?>

        <style>
            h1 {
                text-align: center;
            }
        </style>
        <!-- place navbar here -->
    </header>
    <main>
        <br>
        <div class="login-container">
            <div class="custom-title">Solicita tu presupuesto</div>
            <form action="" method="post" onsubmit="return validateForm()">
                <label for="username">Correo:</label>
                <input type="email" id="username" name="correo" required>

                <label for="producto">Tipo de Producto:</label>
                <select name="tipo_producto" id="producto" required>
                    <option value="ventana">Ventana</option>
                    <option value="puerta">Puerta</option>
                    <option value="ventana_puerta">Ventana y Puerta</option>
                </select>

                <label for="color">Color:</label>
                <input type="text" id="color" name="color" placeholder="Escribe el color" required>

                <!-- Cantidad para Ventana -->
                <label for="cantidad_ventana">Cantidad Ventana:</label>
                <input type="number" id="cantidad_ventana" name="cantidad_ventana" min="1" required>

                <!-- Etiqueta para la Cantidad de Puertas (solo se muestra si se selecciona "Ventana y Puerta") -->
                <div id="cantidad_puerta_label" style="display: none;">
                    <label for="cantidad_puerta">Cantidad Puerta:</label>
                </div>

                <!-- Cantidad para Puerta (solo se muestra si se selecciona "Ventana y Puerta") -->
                <input type="number" id="cantidad_puerta" name="cantidad_puerta" min="1" style="display: none;">

                <label for="dimensiones">Dimensiones:</label>
                <input type="text" id="dimensiones" name="dimensiones" placeholder="Opcional">

                <script>
                    // Función para mostrar/ocultar la cantidad de la puerta según la selección
                    document.getElementById('producto').addEventListener('change', function () {
                        var cantidadPuertaLabel = document.getElementById('cantidad_puerta_label');
                        cantidadPuertaLabel.style.display = this.value === 'ventana_puerta' ? 'block' : 'none';

                        // Si se selecciona "Ventana y Puerta", también se requiere una cantidad para la ventana
                        var cantidadVentanaInput = document.getElementById('cantidad_ventana');
                        cantidadVentanaInput.required = this.value === 'ventana_puerta';

                        var cantidadPuertaInput = document.getElementById('cantidad_puerta');
                        cantidadPuertaInput.style.display = this.value === 'ventana_puerta' ? 'block' : 'none';
                    });

                    // Función para validar el formulario antes del envío
                    function validateForm() {
                        var tipoProducto = document.getElementById('producto').value;
                        var cantidadPuertaInput = document.getElementById('cantidad_puerta');
                        var dimensiones = document.getElementById('dimensiones').value;

                        // Verificar si se seleccionó "Ventana y Puerta" y se proporcionó la cantidad de puertas
                        if (tipoProducto === 'ventana_puerta' && cantidadPuertaInput.value === '') {
                            alert('Por favor, ingresa la cantidad de puertas.');
                            return false;
                        }

                        // Resto de la validación
                        // Verificar si otros campos requeridos están vacíos
                        // ...

                        // Alerta de envío exitoso
                        alert('Presupuesto enviado con éxito');
                        return true;
                    }
                </script>

                <input name="btnpresupuesto" class="login-button" type="submit" value="Solicitar Presupuesto">
                <!-- Agregar este código donde desees en tu formulario -->
                <a href="ver_presupuesto.php" class="btn btn-success">Ver Presupuestos</a>

            </form>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"></script>
</body>

</html>
