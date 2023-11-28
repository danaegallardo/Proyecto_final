<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!empty($_POST["btnregistro"])) {
    if (!empty($_POST["correo"]) && !empty($_POST["contrasena"]) && !empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["telefono"]) && !empty($_POST["direccion"])) {
        $correo = $_POST["correo"];
        $contrasena = $_POST["contrasena"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $telefono = $_POST["telefono"];
        $direccion = $_POST["direccion"];

        // Establecer la conexión a la base de datos (asegúrate de haberlo definido previamente).
        $conexion = mysqli_connect("localhost", "2_BD_72", "benjamin.morenop23", "2_BD_72");

        if (!$conexion) {
            die("Error al conectar a la base de datos: " . mysqli_connect_error());
        }

        // Crear la consulta SQL para insertar datos en la tabla "usuarios".
        $sql = "INSERT INTO usuarios (correo, contrasena, nombre, apellido, telefono, direccion) VALUES ('$correo', '$contrasena', '$nombre', '$apellido', '$telefono', '$direccion')";

        // Ejecutar la consulta.
        if (mysqli_query($conexion, $sql)) {
            // Mostrar mensaje de registro exitoso
            echo "<div class='alert alert-success'>Usuario registrado exitosamente</div>";
            
            // Redirigir a login.php después de mostrar el mensaje
            header("Refresh: 3; URL=../src/login.php");
        } else {
            echo "<div class='alert alert-danger'>Error al insertar registro: " . mysqli_error($conexion) . "</div>";
        }

        // Cerrar la conexión a la base de datos.
        mysqli_close($conexion);
    } else {
        echo "<div class='alert alert-danger'>Rellena todos los campos</div>";
    }
}
?>
