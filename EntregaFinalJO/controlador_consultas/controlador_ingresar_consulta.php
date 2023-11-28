<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (empty($_SESSION["id"])) {
    // Redirige a la página de inicio de sesión si el usuario no ha iniciado sesión
    header("location: ../src/login.php");
    exit;
}

if (!empty($_POST["btnconsulta"])) {
    if (!empty($_POST["consulta"]) && !empty($_POST["correo"])) {
        // Obtiene el id del usuario que ha iniciado sesión
        $idUsuario = $_SESSION["id"];

        $consulta = $_POST["consulta"];
        $correo = $_POST["correo"];

        // Establecer la conexión a la base de datos
        $conexion = mysqli_connect("localhost", "2_BD_72", "benjamin.morenop23", "2_BD_72");

        if (!$conexion) {
            die("Error al conectar a la base de datos: " . mysqli_connect_error());
        }

        // Crear la consulta SQL para insertar datos en la tabla "consultas" vinculando con id_usuario
        $sql = "INSERT INTO consultas (id_usuario, consulta, correo) VALUES ('$idUsuario', '$consulta', '$correo')";

        // Ejecutar la consulta
        if (mysqli_query($conexion, $sql)) {
            // Mostrar mensaje de consulta enviada
            echo "<div class='alert alert-success'>Consulta Enviada</div>";

            // Mostrar alerta con JavaScript
            echo "<script>alert('Consulta enviada con éxito');</script>";

            // Redirigir a index_sesion.php después de mostrar el mensaje
            header("Refresh: 3; URL=../src/index_sesion.php");
        } else {
            echo "Error al registrar la consulta: " . mysqli_error($conexion);
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($conexion);
    } else {
        echo "Escribe tu consulta";
    }
}
?>
