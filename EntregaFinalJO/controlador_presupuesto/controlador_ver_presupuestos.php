<?php
// Suponiendo que ya tienes una conexión a la base de datos ($conexion)
$sql = $conexion->query("SELECT p.*, u.nombre AS nombre_usuario, u.apellido AS apellido_usuario, u.correo AS correo_usuario 
                        FROM presupuestos p
                        JOIN usuarios u ON p.id_usuario = u.id");

// Imprime los encabezados de las columnas
echo '<table class="table table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Usuario</th>';
echo '<th>Correo Usuario</th>'; // Agregado el correo del usuario
echo '<th>Tipo de Producto</th>';
echo '<th>Color</th>';
echo '<th>Cantidad de Ventanas</th>';
echo '<th>Cantidad de Puertas</th>';
echo '<th>Dimensiones</th>';
echo '<th>Presupuesto</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

// Imprime los datos de los presupuestos
while ($datosPresupuesto = $sql->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $datosPresupuesto["id"] . '</td>';
    echo '<td>' . $datosPresupuesto["nombre_usuario"] . ' ' . $datosPresupuesto["apellido_usuario"] . '</td>';
    echo '<td>' . $datosPresupuesto["correo_usuario"] . '</td>'; // Agregado el correo del usuario
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
?>
