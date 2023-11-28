<?php
session_start();

if (!empty($_POST["btnpresupuesto"])) {
    // Verificar que los campos obligatorios estén presentes
    if (!empty($_POST["tipo_producto"]) && !empty($_POST["color"]) && !empty($_POST["cantidad_ventana"])) {
        // Obtener los valores de los campos
        $tipoProducto = $_POST["tipo_producto"];
        $color = $_POST["color"];
        $cantidadVentana = $_POST["cantidad_ventana"];
        $cantidadPuerta = isset($_POST["cantidad_puerta"]) ? $_POST["cantidad_puerta"] : null;
        $dimensiones = isset($_POST["dimensiones"]) ? $_POST["dimensiones"] : null;

        // Crear el presupuesto combinando los valores
        $presupuesto = "Tipo de Producto: $tipoProducto, Color: $color, Cantidad Ventana: $cantidadVentana, Cantidad Puerta: $cantidadPuerta, Dimensiones: $dimensiones";

        // Establecer la conexión a la base de datos
        $conexion = mysqli_connect("localhost", "2_BD_72", "benjamin.morenop23", "2_BD_72");

        if (!$conexion) {
            die("Error al conectar a la base de datos: " . mysqli_connect_error());
        }

        // Obtener el ID del usuario que ha iniciado sesión
        $idUsuario = $_SESSION["id"];

        // Crear la consulta SQL para insertar datos en la tabla "presupuestos"
        $sql = "INSERT INTO presupuestos (id_usuario, tipo_producto, color, cantidad_ventana, cantidad_puerta, dimensiones, presupuesto) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        
        // Preparar la declaración
        $stmt = mysqli_prepare($conexion, $sql);

        if ($stmt) {
            // Vincular los parámetros
            mysqli_stmt_bind_param($stmt, "isssiss", $idUsuario, $tipoProducto, $color, $cantidadVentana, $cantidadPuerta, $dimensiones, $presupuesto);

            // Ejecutar la consulta
            if (mysqli_stmt_execute($stmt)) {
                // Mostrar mensaje de presupuesto enviado
                echo "<div class='alert alert-success'>Presupuesto Enviado</div>";

                // Mostrar alerta con JavaScript
                echo "<script>alert('Presupuesto enviado con éxito');</script>";

                // Redirigir a index_sesion.php después de mostrar el mensaje
                header("Refresh: 3; URL=../src/index_sesion.php");
            } else {
                echo "Error al registrar el presupuesto: " . mysqli_error($conexion);
            }

            // Cerrar la conexión a la base de datos
            mysqli_stmt_close($stmt);
        } else {
            echo "Error en la preparación de la declaración: " . mysqli_error($conexion);
        }

        mysqli_close($conexion);
    } else {
        echo "Completa la información del presupuesto";
    }
}
?>
