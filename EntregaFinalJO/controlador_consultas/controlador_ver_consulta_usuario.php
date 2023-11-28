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

// Crea la consulta SQL para obtener las consultas del usuario actual
$sqlConsultas = "SELECT id, correo, consulta FROM consultas WHERE id_usuario = ?";
$stmtConsultas = $conexion->prepare($sqlConsultas);
$stmtConsultas->bind_param("i", $idUsuario);
$stmtConsultas->execute();
$resultadoConsultas = $stmtConsultas->get_result();

// Verifica si se obtuvieron resultados
if ($resultadoConsultas->num_rows > 0) {
    // Imprime los encabezados de las columnas
    echo '<table class="table table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Correo</th>';
    echo '<th>Consulta</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Imprime los datos de las consultas del usuario
    while ($datosConsulta = $resultadoConsultas->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $datosConsulta["id"] . '</td>';
        echo '<td>' . $datosConsulta["correo"] . '</td>';
        echo '<td>' . $datosConsulta["consulta"] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    // Si no se encontraron resultados, muestra un mensaje indicando que no hay consultas
    echo '<p>No hay consultas para mostrar para la ID de usuario: '.$idUsuario.'</p>';
}

// Cierra la conexión a la base de datos
$stmtConsultas->close();
mysqli_close($conexion);
?>
