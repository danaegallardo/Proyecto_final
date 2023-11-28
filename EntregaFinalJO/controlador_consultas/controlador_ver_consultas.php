<?php

$sql = $conexion->query("SELECT c.id, c.correo AS correo_consulta, c.consulta, u.nombre AS nombre_usuario, u.apellido AS apellido_usuario, u.correo AS correo_usuario
                        FROM consultas c
                        JOIN usuarios u ON c.id_usuario = u.id");

// Imprime los encabezados de las columnas
echo '<table class="table table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Usuario</th>';
echo '<th>Consulta</th>';
echo '<th>Correo Usuario</th>';
echo '<th>Correo Consulta</th>'; // Agregado el correo de la consulta
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while ($datos = $sql->fetch_object()) {
    echo '<tr>';
    echo '<td>' . $datos->id . '</td>';
    echo '<td>' . $datos->nombre_usuario . ' ' . $datos->apellido_usuario . '</td>';
    echo '<td>' . $datos->consulta . '</td>';
    echo '<td>' . $datos->correo_usuario . '</td>';
    echo '<td>' . $datos->correo_consulta . '</td>'; // Agregado el correo de la consulta
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';

?>
