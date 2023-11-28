<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (empty($_SESSION["id"])) {
    // Redirige a la página de inicio de sesión si el usuario no ha iniciado sesión
    header("location: ../src/login.php");
    exit;
}

// Establece la conexión a la base de datos
$conexion = mysqli_connect("localhost", "2_BD_72", "benjamin.morenop23", "2_BD_72");

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Obtiene el ID del usuario que ha iniciado sesión directamente de la sesión
$idUsuario = $_SESSION["id"];

// Crea la consulta SQL para obtener los presupuestos del usuario actual
$sqlPresupuestos = "SELECT id, tipo_producto, color, cantidad_ventana, cantidad_puerta, dimensiones, presupuesto 
                    FROM presupuestos 
                    WHERE id_usuario = ?";
$stmtPresupuestos = $conexion->prepare($sqlPresupuestos);
$stmtPresupuestos->bind_param("i", $idUsuario);
$stmtPresupuestos->execute();
$resultadoPresupuestos = $stmtPresupuestos->get_result();

// Verifica si se obtuvieron resultados
if ($resultadoPresupuestos->num_rows > 0) {
    // Imprime los encabezados de las columnas
    echo '<table class="table table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Tipo de Producto</th>';
    echo '<th>Color</th>';
    echo '<th>Cantidad de Ventanas</th>';
    echo '<th>Cantidad de Puertas</th>';
    echo '<th>Dimensiones</th>';
    echo '<th>Presupuesto</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Imprime los datos de los presupuestos del usuario
    while ($datosPresupuesto = $resultadoPresupuestos->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $datosPresupuesto["id"] . '</td>';
        echo '<td>' . $datosPresupuesto["tipo_producto"] . '</td>';
        echo '<td>' . $datosPresupuesto["color"] . '</td>';
        echo '<td>' . $datosPresupuesto["cantidad_ventana"] . '</td>';
        echo '<td>' . $datosPresupuesto["cantidad_puerta"] . '</td>';
        echo '<td>' . $datosPresupuesto["dimensiones"] . '</td>';
        echo '<td>' . $datosPresupuesto["presupuesto"] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    // Si no se encontraron resultados, muestra un mensaje indicando que no hay presupuestos
    echo '<p>No hay presupuestos para mostrar para la ID de usuario: '.$idUsuario.'</p>';
}

// Cierra la conexión a la base de datos
$stmtPresupuestos->close();
mysqli_close($conexion);
?>
